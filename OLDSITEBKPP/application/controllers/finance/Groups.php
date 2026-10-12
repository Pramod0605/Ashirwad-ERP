<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups extends Admin_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Finance/ledger_model', 'ledger_model');
        $this->load->model('Finance/settings_model', 'settings_model');
    }   

	
/**
 * add method
 *
 * @return void
 */
	public function add() {
            $this->load->library('GroupTree');

			/* Create list of parent groups */
			$parentGroups = new GroupTree();
			$parentGroups->Group = &$this->Group;
			$parentGroups->current_id = -1;
			$parentGroups->build(0);
			$parentGroups->toList($parentGroups, -1);
			$this->data['parents'] = $parentGroups->groupList;
			$this->data['feeTypes'] = $this->settings_model->allFeeType();
			
			$this->load->view('layout/header');
            $this->load->view('account_finance/groups/add', $this->data);
            $this->load->view('layout/footer');

        if ($this->input->post('submit')) {
        	$data = array(
				'parent_id' => $this->input->post('parent_id'),
				'name' => $this->input->post('name'),
				'code' => NULL,
				'affects_gross' => $this->input->post('affects_gross'),
			);
			/* If code is empty set it as NULL */
			if (!empty($this->input->post('code'))) {
				$data['code'] = $this->input->post('code');
			}
			
			/* Save group */
			$this->db->insert('cyc_groups', $data);
			$this->session->set_flashdata('message', sprintf(lang('groups_cntrler_add_group_created_successfully'), $this->input->post('name')));
			redirect('finance/accounts');
        }
		
	}


	/**
 * edit method
 *
 * @throws NotFoundException
 * @throws ForbiddenException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {


	    $original_value = $this->db->where('id', $id)->from('cyc_groups')->get()->row()->code ;
	    if($this->input->post('code') != $original_value) {
	       $is_unique =  'is_db_unique[groups.code]';
	    } else {
	       $is_unique =  '';
	    }

		/* Check for valid group */
		if (empty($id)) {
			$this->session->set_flashdata('error', lang('groups_cntrler_edit_group_not_specified_error'));
			redirect('accounts');
		}
		$group = $this->db->where('id',$id)->get('cyc_groups')->row_array();
		if (!$group) {
			$this->session->set_flashdata('error', lang('groups_cntrler_edit_group_not_found_error'));
			redirect('accounts');
		}
		if ($id <= 4) {
			$this->session->set_flashdata('error', lang('groups_cntrler_edit_basic_account_permission_denied_error'));
			redirect('accounts');
		}


	
            $this->load->library('GroupTree');
			/* Create list of parent groups */
			$parentGroups = new GroupTree();
			$parentGroups->Group = &$this->Group;
			$parentGroups->current_id = $id;
			$parentGroups->build(0);
			$parentGroups->toList($parentGroups, -1);
			$this->data['parents'] = $parentGroups->groupList;
			$this->data['group'] = $group;
			$this->data['feeTypes'] = $this->settings_model->allFeeType();
			// render page
    		$this->load->view('layout/header');
            $this->load->view('account_finance/groups/edit', $this->data);
            $this->load->view('layout/footer');;
        if ($this->input->post('submit')) {

			/* Check if group and parent group are not same */
			if ($id == $this->input->post('parent_id')) {
				$this->session->set_flashdata('error', lang('groups_cntrler_edit_account_parent_group_same_error'));
				redirect('finance/accounts');
			}
			$data = array(
				'parent_id' => $this->input->post('parent_id'),
				'name' => $this->input->post('name'),
				'code' => NULL,
				'affects_gross' => $this->input->post('affects_gross'),
			);

			/* If code is empty set it as NULL */
			if (!empty($this->input->post('code'))) {
				$data['code'] = $this->input->post('code');
			}

			$this->db->where('id', $id);
			$this->db->update('cyc_groups', $data);
			$this->session->set_flashdata('message', sprintf(lang('groups_cntrler_edit_group_updated_successfully'), $this->input->post('name')));
			redirect('finance/accounts');
        }

	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @throws MethodNotAllowedException
	 * @param string $id
	 * @return void
	 */
		public function delete($id = null) {

			/* Check if valid id */
			if (empty($id)) {
				$this->session->set_flashdata('error', lang('groups_cntrler_delete_group_not_specified_error'));
				redirect('accounts');
			}

			/* Check if group exists */
			$group = $this->db->where('id',$id)->get('cyc_groups')->row_array();
			if (!$group) {
				$this->session->set_flashdata('error', lang('groups_cntrler_delete_group_not_found_error'));
				redirect('accounts');
			}

			/* Check if group can be deleted */
			if ($id <= 4) {
				$this->session->set_flashdata('error', lang('groups_cntrler_delete_basic_account_permission_denied_error'));
				redirect('accounts');
			}

			/* Check if any child groups exists */
			$this->db->where('cyc_groups.parent_id', $id);
			$q = $this->db->get('cyc_groups');
			if ($q->num_rows() > 0) {
				$this->session->set_flashdata('error', lang('groups_cntrler_delete_child_group_exists_error'));
				redirect('accounts');
			}

			/* Check if any child ledgers exists */
			$this->db->where('cyc_ledgers.group_id', $id);
			$q = $this->db->get('cyc_ledgers');
			if ($q->num_rows() > 0) {
				$this->session->set_flashdata('error', lang('groups_cntrler_delete_child_ledger_exists_error'));
				redirect('accounts');
			}

			/* Delete group */
			$this->db->delete('cyc_groups', array('id' => $id));
			$this->session->set_flashdata('message', sprintf(lang('groups_cntrler_delete_group_deleted_successfully'), $group['name']));
			redirect('finance/accounts');

		}

	public function getNextCode() {
		$id = $_POST['id'];
		$this->db->where('id', $id);
		$p_group_code = $this->db->get('cyc_groups')->row()->code;
		// print_r($p_group_code);
		$this->db->where('id !=', $id);
		$this->db->where('parent_id', $id);
		$this->db->like('code', $p_group_code);
		$q = $this->db->get('cyc_groups')->result();
		// print_r($q);
		if ($q) {
			$last = end($q);
			$last = $last->code;
			$l_array = explode('-', $last);
			$new_index = end($l_array);
			$new_index += 1;
			$new_index = sprintf("%02d", $new_index);
			echo $p_group_code."-".$new_index;
		}else{
			echo $p_group_code."-01";
		}

	}

}



