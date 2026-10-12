<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ledgers extends Admin_Controller {
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

		$allowed = 2;
		
			$this->load->library('GroupTree');
			/* Create list of parent groups */
			$parentGroups = new GroupTree();
			$parentGroups->Group = &$this->Group;
			$parentGroups->current_id = -1;
			$parentGroups->build(0);
			$parentGroups->toList($parentGroups, -1);
			$this->data['parents'] = $parentGroups->groupList;
			$this->data['feeTypes'] = $this->settings_model->allFeeType();
			// render page
			
		    $this->load->view('layout/header');
            $this->load->view('account_finance/ledgers/add', $this->data);
            $this->load->view('layout/footer');
            
        if ($this->input->post('submit')) {
            
            $lname = $this->input->post('name');
        	$data = array(
				'code' => NULL,
				'op_balance' => 0,
				'name' => $this->input->post('name'),
				'group_id' => $this->input->post('group_id'),
				'op_balance_dc' => $this->input->post('op_balance_dc'),
				'notes' => $this->input->post('notes'),
				'reconciliation' => 0,
				'type' => 0,
			);

			if (!empty($this->input->post('reconciliation'))) {
				$data['reconciliation'] = 1;
			}
			if (!empty($this->input->post('code'))) {
				$data['code'] = $this->input->post('code');
			}
			if (!empty($this->input->post('type'))) {
				$data['type'] = 1;
			}
			if (!empty($this->input->post('op_balance'))) {
				$data['op_balance'] = $this->input->post('op_balance');
			}
			
			if (!empty($this->input->post('is_link_to_transport_fee'))) {
				$data['is_link_to_transport_fee'] = 1;
			}
			
			$this->db->insert('cyc_ledgers', $data);
			
			
			$headIds    =  $_POST['feetype_id'];
			$linfo = $this->db->query("SELECT id as lid FROM cyc_ledgers WHERE name = '".$lname."' ORDER BY id DESC LIMIT 1 ")->row();
			foreach ($headIds as $key => $headId) {
			    $ldata = array(
				    'ledger_id' => $linfo->lid,
				    'head_id'   => $headId,
			     );
			     $this->db->insert('cyc_fee_head_ledger', $ldata);
			}
			
			$this->session->set_flashdata('message', sprintf(lang('ledgers_cntrler_add_ledger_created_successfully'), $this->input->post('name')));
			redirect('finance/accounts');
        }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		/* Check for valid group */
		if (empty($id)) {
			$this->session->set_flashdata('error', lang('ledgers_cntrler_edit_ledger_not_specified_error'));
			redirect('accounts');
		}
		$ledger = $this->db->where('id', $id)->get('cyc_ledgers')->row_array();
		if (!$ledger) {
			$this->session->set_flashdata('error', lang('ledgers_cntrler_edit_ledger_not_found_error'));
			redirect('accounts');
		}
		$original_value = $ledger['code'] ;
	    if($this->input->post('code') != $original_value) {
	       $is_unique =  'is_db_unique[ledgers.code]';
	    } else {
	       $is_unique =  '';
	    }

		$allowed = 2;

		
			$this->load->library('GroupTree');
			/* Create list of parent groups */
			$parentGroups = new GroupTree();
			$parentGroups->Group = &$this->Group;
			$parentGroups->current_id = -1;
			$parentGroups->build(0);
			$parentGroups->toList($parentGroups, -1);
			$this->data['parents'] = $parentGroups->groupList;
			$this->data['ledger'] = $ledger;
			$this->data['feeTypes'] = $this->settings_model->allFeeType();
			// render page
			
			$this->load->view('layout/header');
            $this->load->view('account_finance/ledgers/edit', $this->data); 
            $this->load->view('layout/footer');
        if ($this->input->post('submit')) {
        	/* Check if acccount is locked */
			

			$data = array(
				'code' => NULL,
				'op_balance' => 0,
				'name' => $this->input->post('name'),
				'group_id' => $this->input->post('group_id'),
				'op_balance_dc' => $this->input->post('op_balance_dc'),
				'notes' => $this->input->post('notes'),
				'reconciliation' => 0,
				'type' => 0,
			);

			if (!empty($this->input->post('reconciliation'))) {
				$data['reconciliation'] = 1;
			}
			if (!empty($this->input->post('code'))) {
				$data['code'] = $this->input->post('code');
			}
			if (!empty($this->input->post('type'))) {
				$data['type'] = 1;
			}
			if (!empty($this->input->post('op_balance'))) {
				$data['op_balance'] = $this->input->post('op_balance');
			}
			
			if (!empty($this->input->post('is_link_to_transport_fee'))) {
				$data['is_link_to_transport_fee'] = 1;
			}
			
			$this->db->where('id', $id);
			$this->db->update('cyc_ledgers', $data);
			
		    $headIds    =  $_POST['feetype_id'];
			foreach ($headIds as $headId) {
			    $ldata = array(
				    'ledger_id' => $id,
				    'head_id'   => $headId,
			     );
			     $this->db->insert('cyc_fee_head_ledger', $ldata);
			     
			     echo $headId;
			}
			
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
			$this->session->set_flashdata('error', lang('ledgers_cntrler_delete_ledger_not_specified_error'));
			redirect('accounts');
		}

		/* Check if ledger exists */
		$ledger = $this->db->where('id', $id)->get('cyc_ledgers')->row_array();
		if (!$ledger) {
			$this->session->set_flashdata('error', lang('ledgers_cntrler_delete_ledger_not_found_error'));
			redirect('accounts');
		}

		/* Check if any entry item using this ledger still exists */
		$this->db->where('cyc_entryitems.ledger_id', $id);
		$q = $this->db->get('cyc_entryitems');
		if ($q->num_rows() > 0) {
			$this->session->set_flashdata('error', lang('ledgers_cntrler_delete_entries_exist_error'));
			redirect('accounts');
		}

		$this->db->delete('cyc_ledgers', array('id' => $id));

		$this->session->set_flashdata('message', sprintf(lang('ledgers_cntrler_delete_ledger_deleted_successfully'), $ledger['name']));
		redirect('finance/accounts');
	}

	/**
	 * closing balance method
	 *
	 * Return closing balance for the ledger
	 *
	 * @return void
	 */
	public function cl($id = null) {

		/* Read ledger id from url get request */
		if ($id == null) {
			$id = (int)$this->input->get('id');
		}

		/* Check if valid id */
		if (!$id) {
			// $this->data['cl'] = array('cl' => array('dc' => '', 'amount' => 0));
			echo json_encode(0);
			return;
		}

		/* Check if ledger exists */
		$this->db->where('id', $id);
		$ledger = $this->db->get('cyc_ledgers')->row_array();
		if (!$ledger) {
			$cl = array('cl' => array('dc' => '', 'amount' => ''));
		}else{
			$cl = $this->ledger_model->closingBalance($id);
			$status = 'ok';
			if ($ledger['type'] == 1) {
				if ($cl['dc'] == 'C') {
					$status = 'neg';
				}
			}

			/* Return closing balance */
			$cl = array('cl' => 
					array(
						'dc' => $cl['dc'],
						'amount' => $cl['amount'],
						'status' => $status,
					)
			);
		}
		echo json_encode($cl);
	}

	public function getNextCode() {
		$id = $_POST['id'];
		$this->db->where('id', $id);
		$p_group_code = $this->db->get('cyc_groups')->row()->code;
		$this->db->where('group_id', $id);
		$q = $this->db->get('cyc_ledgers')->result();
		if ($q) {
			$last = end($q);
			$last = $last->code;
			$l_array = explode('-', $last);
			$new_index = end($l_array);
			$new_index += 1;
			$new_index = sprintf("%04d", $new_index);
			echo $p_group_code."-".$new_index;
		}else{
			echo $p_group_code."-0001";
		}

	}


}



