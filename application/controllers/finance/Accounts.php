<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends Admin_Controller {
	public function __construct() {
        parent::__construct(); 
        $this->load->model('Finance/ledger_model', 'ledger_model');
        $this->load->model('Finance/settings_model', 'settings_model');
    }
    
	public function index() {
		
		$this->load->library('AccountList');
		
		$accountlist = new AccountList();
		$accountlist->Group = &$this->Group;
		$accountlist->Ledger = &$this->Ledger;
		$accountlist->only_opening = false;
		$accountlist->start_date = null;
		$accountlist->end_date = null;
		$accountlist->affects_gross = -1;
		$accountlist->start(0);

		$this->data['accountlist'] = $accountlist;
		$opdiff = $this->ledger_model->getOpeningDiff();
		$this->data['opdiff'] = $opdiff;

		$this->load->view('layout/header');
        $this->load->view('account_finance/accounts/index', $this->data);
        $this->load->view('layout/footer');
	}

	public function mapper()
	{
		$this->load->library('reader');
		if ($this->input->method() == 'post') {
			$keys = array();
			for($i = 0;$i < $_POST['number_of_keys'];$i++){
				$keys[$_POST['default'.$i]] = $_POST['current'.$i];
			}
			$result = $this->reader->parse_file($_POST['file_path']);
			$this->import($result, $keys);
		}		
	}
}


