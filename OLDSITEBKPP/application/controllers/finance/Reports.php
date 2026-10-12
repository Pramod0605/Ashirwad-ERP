<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends Admin_Controller {
	public $row = 3;
	private $bits = null;

	public function __construct() {
        parent::__construct();
        $this->load->model('Finance/ledger_model', 'ledger_model');
        $this->load->model('Finance/reports_model', 'reports_model');
    }   

	public function index() {
		/* Cash and bank sumary */
		$ledgers = $this->db->where('type', 1)->get('cyc_ledgers')->result_array();
		$ledgersCB = array();
		foreach ($ledgers as $ledger) {
			$ledgersCB[] = array(
				// 'name' => ($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
				'name' => $ledger['name'],
				'code' => $ledger['code'],
				'balance' => $this->ledger_model->closingBalance($ledger['id']),
			);
		}
		$this->data['ledgers'] = $ledgersCB;
		$this->load->library('AccountList');
		/* Account summary */
		$assets = new AccountList();
		$assets->Group = &$this->Group;
		$assets->Ledger = &$this->Ledger;
		$assets->only_opening = false;
		$assets->start_date = null;
		$assets->end_date = null;
		$assets->affects_gross = -1;
		$assets->start(1);

		$liabilities = new AccountList();
		$liabilities->Group = &$this->Group;
		$liabilities->Ledger = &$this->Ledger;
		$liabilities->only_opening = false;
		$liabilities->start_date = null;
		$liabilities->end_date = null;
		$liabilities->affects_gross = -1;
		$liabilities->start(2);

		$income = new AccountList();
		$income->Group = &$this->Group;
		$income->Ledger = &$this->Ledger;
		$income->only_opening = false;
		$income->start_date = null;
		$income->end_date = null;
		$income->affects_gross = -1;
		$income->start(3);

		$expense = new AccountList();
		$expense->Group = &$this->Group;
		$expense->Ledger = &$this->Ledger;
		$expense->only_opening = false;
		$expense->start_date = null;
		$expense->end_date = null;
		$expense->affects_gross = -1;
		$expense->start(4);



		$accsummary = array(
			'assets_total_dc' => $assets->cl_total_dc,
			'assets_total' => $assets->cl_total,
			'liabilities_total_dc' => $liabilities->cl_total_dc,
			'liabilities_total' => $liabilities->cl_total,
			'income_total_dc' => $income->cl_total_dc,
			'income_total' => $income->cl_total,
			'expense_total_dc' => $expense->cl_total_dc,
			'expense_total' => $expense->cl_total,
		);
		$this->data['accsummary'] = $accsummary;
		$this->load->view('layout/header');
        $this->load->view('account_finance/reports/dashboard', $this->data);
        $this->load->view('layout/footer');
	}

		public function getIncomeExpenseMonthlyChart() {

		$income = $this->reports_model->getTotalMonthly(3);
		$expense = $this->reports_model->getTotalMonthly(4);
		
		$total_income = 0;
		$total_expense = 0;

		if ($income) {
			foreach ($income as $in) {
				$total_income += $in; 
			}
		} else {
			$income = array(
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
			);
		}
		
		if ($expense) {
			foreach ($expense as $ex) {
				$total_expense += $ex; 
			}
		} else {
			$expense = array(
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
				0,
			);
		}

		$net_worth = $this->functionscore->calculate($total_income, $total_expense, '-');

		$today_income = $this->reports_model->getTotalofToday(3);
		$today_expense = $this->reports_model->getTotalofToday(4);

		$month_income = $this->reports_model->getTotalofThisMonth(3);
		$month_expense = $this->reports_model->getTotalofThisMonth(4);

		$json_ie_stats = array(
			'Income'		=> $income,
			'Expense'		=> $expense,
			'xAxis'			=> $this->reports_model->getTotalMonthly(0),
			'net_worth'		=> $net_worth,
			'today_income'	=> $today_income,
			'today_expense'	=> $today_expense,
			'month_income'	=> $month_income,
			'month_expense'	=> $month_expense
		);				
		$this->functionscore->send_json($json_ie_stats);
	}

	public function getIncomeExpenseChart() {
		$json_ie_stats = array(
			'Income'	=> $this->reports_model->getTotalPeriodical(3),
			'Expense'	=> $this->reports_model->getTotalPeriodical(4),
		);			
		$this->functionscore->send_json($json_ie_stats);
	}
    
	
	public function balancesheet($download = NULL, $format = NULL, $startdate = NULL, $enddate = NULL) {
        
        $input                 = $this->setting_model->getCurrentSessionName();
        list($a, $b)  = explode('-', $input);
        $Current_year = $a;
        if (strlen($b) == 2) {
            $Next_year = substr($a, 0, 2) . $b;
        } else {
            $Next_year = $b;
        }
        $year_str_month     = $Current_year . '-04-01';
        $year_end_month     = date("Y-m-t", strtotime($Next_year . '-03-31'));
        
		$only_opening = false;
		// $startdate = null;
		// $enddate = null;

		if ($download === 'download') {
			if ($startdate && $enddate) {
				$startdate = $this->functionscore->dateToSql($startdate);
				$this->data['startdate'] = $startdate;
				$enddate = $this->functionscore->dateToSql($enddate);
				$this->data['enddate'] = $enddate;
			} else if ($startdate) {
				$startdate = $this->functionscore->dateToSql($startdate);
				$this->data['startdate'] = $startdate;
			} else if ($enddate) {
				$enddate = $this->functionscore->dateToSql($enddate);
				$this->data['enddate'] = $enddate;
			}	
		} else {
			$this->data['startdate'] = NULL;
			$this->data['enddate'] = NULL;
		}

		if ($this->input->method() == 'post') {
			$this->data['options'] = true;
			
			if (!empty($this->input->post('opening'))) {
				$only_opening = true;
				$this->data['only_opening'] = $only_opening;
				/* Sub-title*/
				$this->data['subtitle'] = sprintf(lang('opening_balance_sheet_as_on'), $this->functionscore->dateFromSql($year_str_month));

			} else {
				if ($this->input->post('startdate')) {
					$startdate = $this->functionscore->dateToSql($this->input->post('startdate'));
					$this->data['start_date'] = $startdate;
					$this->data['startdate'] = $this->input->post('startdate');
				}

				if ($this->input->post('enddate')) {
					$enddate = $this->functionscore->dateToSql($this->input->post('enddate'));
					$this->data['end_date'] = $enddate;
					$this->data['enddate'] = $this->input->post('enddate');
				}

				if ( $this->input->post('startdate') && $this->input->post('enddate')) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from_to'), $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))), $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('enddate'))));

				} else if ( $this->input->post('startdate')) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from'), $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))));

				} else if ($this->input->post('enddate')) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from_to'), $this->functionscore->dateFromSql($year_str_month), $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('enddate'))));

				} else {
					$this->data['options'] = false;
			
					/* Sub-title*/
					$this->data['subtitle'] = sprintf(lang('closing_balance_sheet_as_on'), $this->functionscore->dateFromSql($year_end_month));
				}
			}
		} else {
			$this->data['options'] = false;
			if ($download === 'download') {
				if ($startdate && $enddate) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from_to'), $this->functionscore->dateFromSql($this->functionscore->dateToSql($startdate)), $this->functionscore->dateFromSql($this->functionscore->dateToSql($enddate)));
				} else if ($startdate) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from'), $this->functionscore->dateFromSql($this->functionscore->dateToSql($startdate)));
				} else if ($enddate) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from_to'), $this->functionscore->dateFromSql($year_str_month), $this->functionscore->dateFromSql($this->functionscore->dateToSql($enddate)));
				} else {
					/* Sub-title*/
					$this->data['subtitle'] = sprintf(lang('closing_balance_sheet_as_on'), $this->functionscore->dateFromSql($year_end_month));
				}
			} else {
				/* Sub-title*/
				$this->data['subtitle'] = sprintf(lang('closing_balance_sheet_as_on'), $this->functionscore->dateFromSql($year_end_month));
			}
		}

		/**********************************************************************/
		/*********************** BALANCESHEET CALCULATIONS ********************/
		/**********************************************************************/
		$this->load->library('AccountList');
		/* Liabilities */
		$liabilities = new AccountList();
		$liabilities->Group = &$this->Group;
		$liabilities->Ledger = &$this->Ledger;
		$liabilities->only_opening = $only_opening;
		$liabilities->start_date = $startdate;
		$liabilities->end_date = $enddate;
		$liabilities->affects_gross = -1;
		$liabilities->start(2);

		$bsheet['liabilities'] = $liabilities;

		$bsheet['liabilities_total'] = 0;
		if ($liabilities->cl_total_dc == 'C') {
			$bsheet['liabilities_total'] = $liabilities->cl_total;
		} else {
			$bsheet['liabilities_total'] = $this->functionscore->calculate($liabilities->cl_total, 0, 'n');
		}

		/* Assets */
		$assets = new AccountList();
		$assets->Group = &$this->Group;
		$assets->Ledger = &$this->Ledger;
		$assets->only_opening = $only_opening;
		$assets->start_date = $startdate;
		$assets->end_date = $enddate;
		$assets->affects_gross = -1;
		$assets->start(1);

		$bsheet['assets'] = $assets;

		$bsheet['assets_total'] = 0;
		if ($assets->cl_total_dc == 'D') {
			$bsheet['assets_total'] = $assets->cl_total;
		} else {
			$bsheet['assets_total'] = $this->functionscore->calculate($assets->cl_total, 0, 'n');
		}

		/* Profit and loss calculations */
		$income = new AccountList();
		$income->Group = &$this->Group;
		$income->Ledger = &$this->Ledger;
		$income->only_opening = $only_opening;
		$income->start_date = $startdate;
		$income->end_date = $enddate;
		$income->affects_gross = -1;
		$income->start(3);

		$expense = new AccountList();
		$expense->Group = &$this->Group;
		$expense->Ledger = &$this->Ledger;
		$expense->only_opening = $only_opening;
		$expense->start_date = $startdate;
		$expense->end_date = $enddate;
		$expense->affects_gross = -1;
		$expense->start(4);

		if ($income->cl_total_dc == 'C') {
			$income_total = $income->cl_total;
		} else {
			$income_total = $this->functionscore->calculate($income->cl_total, 0, 'n');
		}
		if ($expense->cl_total_dc == 'D') {
			$expense_total = $expense->cl_total;
		} else {
			$expense_total = $this->functionscore->calculate($expense->cl_total, 0, 'n');
		}

		$bsheet['pandl'] = $this->functionscore->calculate($income_total, $expense_total, '-');

		/* Difference in opening balance */
		$bsheet['opdiff'] = $this->ledger_model->getOpeningDiff();
		if ($this->functionscore->calculate($bsheet['opdiff']['opdiff_balance'], 0, '==')) {
			$bsheet['is_opdiff'] = false;
		} else {
			$bsheet['is_opdiff'] = true;
		}

		/**** Final balancesheet total ****/
		$bsheet['final_liabilities_total'] = $bsheet['liabilities_total'];
		$bsheet['final_assets_total'] = $bsheet['assets_total'];

		/* If net profit add to liabilities, if net loss add to assets */
		if ($this->functionscore->calculate($bsheet['pandl'], 0, '>=')) {
			$bsheet['final_liabilities_total'] = $this->functionscore->calculate(
				$bsheet['final_liabilities_total'],
				$bsheet['pandl'], '+');
		} else {
			$positive_pandl = $this->functionscore->calculate($bsheet['pandl'], 0, 'n');
			$bsheet['final_assets_total'] = $this->functionscore->calculate(
				$bsheet['final_assets_total'],
				$positive_pandl, '+');
		}

		/**
		 * If difference in opening balance is Dr then subtract from
		 * assets else subtract from liabilities
		 */
		if ($bsheet['is_opdiff']) {
			if ($bsheet['opdiff']['opdiff_balance_dc'] == 'D') {
				$bsheet['final_assets_total'] = $this->functionscore->calculate(
					$bsheet['final_assets_total'],
					$bsheet['opdiff']['opdiff_balance'], '+');
			} else {
				$bsheet['final_liabilities_total'] = $this->functionscore->calculate(
					$bsheet['final_liabilities_total'],
					$bsheet['opdiff']['opdiff_balance'], '+');
			}
		}

		$this->data['bsheet'] = $bsheet;
        
        $this->load->view('layout/header');
        $this->load->view('account_finance/reports/balancesheet', $this->data);
        $this->load->view('layout/footer');
	}

	/**
	*	profitloss method
	*
	*	@return void
	**/
	public function profitloss($download = NULL, $format = NULL, $startdate = NULL, $enddate = NULL) {
		$input                 = $this->setting_model->getCurrentSessionName();
        list($a, $b)  = explode('-', $input);
        $Current_year = $a;
        if (strlen($b) == 2) {
            $Next_year = substr($a, 0, 2) . $b;
        } else {
            $Next_year = $b;
        }
        $year_str_month     = $Current_year . '-04-01';
        $year_end_month     = date("Y-m-t", strtotime($Next_year . '-03-31'));
        
        
		if ($download === 'download') {
			if ($startdate && $enddate) {
				$startdate = $this->functionscore->dateToSql($startdate);
				$this->data['startdate'] = $startdate;
				$enddate = $this->functionscore->dateToSql($enddate);
				$this->data['enddate'] = $enddate;
			} else if ($startdate) {
				$startdate = $this->functionscore->dateToSql($startdate);
				$this->data['startdate'] = $startdate;
			} else if ($enddate) {
				$enddate = $this->functionscore->dateToSql($enddate);
				$this->data['enddate'] = $enddate;
			}	
		} else {
			$this->data['startdate'] = NULL;
			$this->data['enddate'] = NULL;
		}

		if ($this->input->method() == 'post') {
			$this->data['options'] = true;
			if (!empty($this->input->post('opening'))) {
				$only_opening = true;
				/* Sub-title*/
				$this->data['subtitle'] = sprintf(lang('opening_profit_loss_as_on'), $this->functionscore->dateFromSql($year_str_month));
			} else {
				if ($this->input->post('startdate')) {
					$startdate = $this->functionscore->dateToSql($this->input->post('startdate'));
					$this->data['start_date'] = $startdate;
					$this->data['startdate'] = $this->input->post('startdate');
					// $startdate = $this->functionscore->dateToSql($this->input->post('startdate'));
				}
				if ($this->input->post('enddate')) {
					$enddate = $this->functionscore->dateToSql($this->input->post('enddate'));
					$this->data['end_date'] = $enddate;
					$this->data['enddate'] = $this->input->post('enddate');
					// $enddate = $this->functionscore->dateToSql($this->input->post('enddate'));
				}
				if ( $this->input->post('startdate') && $this->input->post('enddate')) {
					$this->data['subtitle'] = sprintf(lang('profit_loss_from_to'),  $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))), $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('enddate'))));
				} else if ( $this->input->post('startdate')) {
					$this->data['subtitle'] = sprintf(lang('profit_loss_from'), $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))));

				} else if ($this->input->post('enddate')) {
					$this->data['subtitle'] = sprintf(lang('profit_loss_from_to'), $this->functionscore->dateFromSql($year_str_month), $this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('enddate'))));
				}
			}
		}else{
			$this->data['options'] = false;
			if ($download === 'download') {
				if ($startdate && $enddate) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from_to'), $this->functionscore->dateFromSql($this->functionscore->dateToSql($startdate)), $this->functionscore->dateFromSql($this->functionscore->dateToSql($enddate)));
				} else if ($startdate) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from'), $this->functionscore->dateFromSql($this->functionscore->dateToSql($startdate)));
				} else if ($enddate) {
					$this->data['subtitle'] = sprintf(lang('balance_sheet_from_to'), $this->functionscore->dateFromSql($year_str_month), $this->functionscore->dateFromSql($this->functionscore->dateToSql($enddate)));
				} else {
					/* Sub-title*/
					$this->data['subtitle'] = sprintf(lang('closing_balance_sheet_as_on'), $this->functionscore->dateFromSql($year_end_month));
				}
			} else {
				/* Sub-title*/
				$this->data['subtitle'] = sprintf(lang('closing_balance_sheet_as_on'), $this->functionscore->dateFromSql($year_end_month));
			}
		}


		/**********************************************************************/
		/*********************** GROSS CALCULATIONS ***************************/
		/**********************************************************************/
		$this->load->library('AccountList');
		/* Gross P/L : Expenses */
		$gross_expenses = new AccountList();
		$gross_expenses->Group = &$this->Group;
		$gross_expenses->Ledger = &$this->Ledger;
		$gross_expenses->only_opening = $only_opening;
		$gross_expenses->start_date = $startdate;
		$gross_expenses->end_date = $enddate;
		$gross_expenses->affects_gross = 1;
		$gross_expenses->start(4);

		$pandl['gross_expenses'] = $gross_expenses;

		$pandl['gross_expense_total'] = 0;
		if ($gross_expenses->cl_total_dc == 'D') {
			$pandl['gross_expense_total'] = $gross_expenses->cl_total;
		} else {
			$pandl['gross_expense_total'] = $this->functionscore->calculate($gross_expenses->cl_total, 0, 'n');
		}

		/* Gross P/L : Incomes */
		$gross_incomes = new AccountList();
		$gross_incomes->Group = &$this->Group;
		$gross_incomes->Ledger = &$this->Ledger;
		$gross_incomes->only_opening = $only_opening;
		$gross_incomes->start_date = $startdate;
		$gross_incomes->end_date = $enddate;
		$gross_incomes->affects_gross = 1;
		$gross_incomes->start(3);

		$pandl['gross_incomes'] = $gross_incomes;

		$pandl['gross_income_total'] = 0;
		if ($gross_incomes->cl_total_dc == 'C') {
			$pandl['gross_income_total'] = $gross_incomes->cl_total;
		} else {
			$pandl['gross_income_total'] = $this->functionscore->calculate($gross_incomes->cl_total, 0, 'n');
		}

		/* Calculating Gross P/L */
		$pandl['gross_pl'] = $this->functionscore->calculate($pandl['gross_income_total'], $pandl['gross_expense_total'], '-');

		/**********************************************************************/
		/************************* NET CALCULATIONS ***************************/
		/**********************************************************************/

		/* Net P/L : Expenses */
		$net_expenses = new AccountList();
		$net_expenses->Group = &$this->Group;
		$net_expenses->Ledger = &$this->Ledger;
		$net_expenses->only_opening = $only_opening;
		$net_expenses->start_date = $startdate;
		$net_expenses->end_date = $enddate;
		$net_expenses->affects_gross = 0;
		$net_expenses->start(4);

		$pandl['net_expenses'] = $net_expenses;

		$pandl['net_expense_total'] = 0;
		if ($net_expenses->cl_total_dc == 'D') {
			$pandl['net_expense_total'] = $net_expenses->cl_total;
		} else {
			$pandl['net_expense_total'] = $this->functionscore->calculate($net_expenses->cl_total, 0, 'n');
		}

		/* Net P/L : Incomes */
		$net_incomes = new AccountList();
		$net_incomes->Group = &$this->Group;
		$net_incomes->Ledger = &$this->Ledger;
		$net_incomes->only_opening = $only_opening;
		$net_incomes->start_date = $startdate;
		$net_incomes->end_date = $enddate;
		$net_incomes->affects_gross = 0;
		$net_incomes->start(3);

		$pandl['net_incomes'] = $net_incomes;

		$pandl['net_income_total'] = 0;
		if ($net_incomes->cl_total_dc == 'C') {
			$pandl['net_income_total'] = $net_incomes->cl_total;
		} else {
			$pandl['net_income_total'] = $this->functionscore->calculate($net_incomes->cl_total, 0, 'n');
		}

		/* Calculating Net P/L */
		$pandl['net_pl'] = $this->functionscore->calculate($pandl['net_income_total'], $pandl['net_expense_total'], '-');
		$pandl['net_pl'] = $this->functionscore->calculate($pandl['net_pl'], $pandl['gross_pl'], '+');

		$this->data['pandl'] = $pandl;

		$this->load->view('layout/header');
        $this->load->view('account_finance/reports/profitloss', $this->data);
        $this->load->view('layout/footer');

		return;
	}

	/**
	*	trialbalance method
	*
	*	@return void
	**/
	public function trialbalance($download = NULL, $format = NULL) {
		// set page title
		$input                 = $this->setting_model->getCurrentSessionName();
        list($a, $b)  = explode('-', $input);
        $Current_year = $a;
        if (strlen($b) == 2) {
            $Next_year = substr($a, 0, 2) . $b;
        } else {
            $Next_year = $b;
        }
        $year_str_month     = $Current_year . '-04-01';
        $year_end_month     = date("Y-m-t", strtotime($Next_year . '-03-31'));
        

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
        
        $this->load->view('layout/header');
        $this->load->view('account_finance/reports/trialbalance', $this->data);
        $this->load->view('layout/footer');

	}

	public function pagination($page, $op_balance = NULL) {
		$this->load->model("reports_model");
		$this->load->library("pagination");
		
		if ($this->input->method() == 'post') {
			if (empty($this->input->post('ledger_id'))) {
				$this->session->set_flashdata('error', lang('invalid_ledger'));
				redirect('finance/reports/ledgerstatement');
			}

			$startdate = null;
			$enddate = null;

			$ledgerId = $this->input->post('ledger_id');

			if (!empty($this->input->post('startdate'))) { 
				$startdate = $this->functionscore->dateToSql($this->input->post('startdate'));
			}

			if (!empty($this->input->post('enddate'))) {
				$enddate = $this->functionscore->dateToSql($this->input->post('enddate'));
			}

			$config = array();
			$config["base_url"] = "#";
			$config["total_rows"] = $this->reports_model->count_all($ledgerId, $startdate, $enddate);
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config["use_page_numbers"] = TRUE;
			$config["full_tag_open"] = '<ul class="pagination">';
			$config["full_tag_close"] = '</ul>';
			$config["first_tag_open"] = '<li>';
			$config["first_tag_close"] = '</li>';
			$config["last_tag_open"] = '<li>';
			$config["last_tag_close"] = '</li>';
			$config['next_link'] = '&gt;';
			$config["next_tag_open"] = '<li>';
			$config["next_tag_close"] = '</li>';
			$config["prev_link"] = "&lt;";
			$config["prev_tag_open"] = "<li>";
			$config["prev_tag_close"] = "</li>";
			$config["cur_tag_open"] = "<li class='active'><a href='#'>";
			$config["cur_tag_close"] = "</a></li>";
			$config["num_tag_open"] = "<li>";
			$config["num_tag_close"] = "</li>";
			$config["num_links"] = 1;

			$this->pagination->initialize($config);
			$page = $this->uri->segment(3);
			if (is_numeric($page) == false) {
			    $page = 1;
			}
			$start = ($page - 1) * $config["per_page"];
			
			if ($start < 0) {
			    $start = 10;
			}

			$output = array(
				'pagination_link'  => $this->pagination->create_links(),
				'entry_table'   => $this->fetch_details($config["per_page"], $start, $ledgerId, $startdate, $enddate, $page, $op_balance),
			);

			return $this->functionscore->send_json($output);
		}
	}

	function fetch_details($limit, $start, $ledgerId, $startDate = NULL, $endDate = NULL, $page = NULL, $op_balance = NULL) {

		$data = $this->ledgerstatement('ajax', $ledgerId, $startDate, $endDate, $limit, $start);
		
		if ($data['id'] == 0) {
			return $data;
		}

		$output = array();

		$html = '';

		$html .= '<table class="stripped" id="ledgerstatement_table" style="width: 100%;">
			<thead>
				<tr>
					<th>' . lang('date') . '</th>
					<th>' . lang('number') . '</th>
					<th>' . lang('ledger') . '</th>
					<th>' . lang('type') . '</th>
					<th>' . lang('tag') . '</th>
					<th>' . lang('dr_amount') . ' (₹)</th>
					<th>' . lang('cr_amount') . ' (₹)</th>
					<th>' . lang('balance') . '' . ' (₹)</th>
					<th>' . lang('actions') . '</th>
				</tr>
			</thead>
			<tbody>';

		/* Current opening balance */
		$entry_balance['amount'] = $data['current_op']['amount'];
		$entry_balance['dc'] = $data['current_op']['dc'];

		$html .=  '<tr class="tr-highlight">';
		$html .=  '<td colspan="7">';
		$html .=  lang('curr_opening_balance');
		$html .=  '</td>';
		if ($page > 1 && !is_null($op_balance)) {
			$op_balance = explode('_', $op_balance);
			$html .=  '<td colspan="2">' . $this->functionscore->toCurrency($op_balance[0], $op_balance[1]) . '</td>';
		} else {
			$html .=  '<td colspan="2">' . $this->functionscore->toCurrency($data['op']['dc'], $data['op']['amount']) . '</td>';
		}
		$html .=  '</tr>';

		foreach($data['entries'] as $row) {
			/* Calculate current entry balance */
			$entry_balance = $this->functionscore->calculate_withdc($entry_balance['amount'], $entry_balance['dc'], $row['amount'], $row['dc']);

			/* Negative balance if its a cash or bank account and balance is Cr */
			if ($data['ledger_data']['type'] == 1) {
				if ($entry_balance['dc'] == 'C' && $entry_balance['amount'] != '0.00') {
					$html .= '<tr class="error-text">';
				} else {
					$html .= '<tr>';
				}
			} else {
				$html .= '<tr>';
			}

			$html .= '<td>' . $this->functionscore->dateFromSql($row['date']) . '</td>';
			$html .= '<td>' . $this->functionscore->toEntryNumber($row['number'], $row['entrytype_id']) . '</td>';
			$html .= '<td>' . $this->functionscore->entryLedgers($row['id']) . '</td>';
			$html .= '<td>' . $row['entryTypeName'] . '</td>';
			$html .= '<td>' . $this->functionscore->showTag($row['tag_id']) . '</td>';
			if ($row['dc'] == 'D') {
				$html .= '<td>' . $this->functionscore->toCurrency('D', $row['amount']) . '</td>';
				$html .=  '<td>-</td>';
			} else if ($row['dc'] == 'C') {
				$html .= '<td>-</td>';
				$html .= '<td>' . $this->functionscore->toCurrency('C', $row['amount']) . '</td>';
			} else {
				$html .= '<td>' . lang('search_views_amounts_td_error') . '</td>';
				$html .= '<td>' . lang('search_views_amounts_td_error') . '</td>';
			}

			$html .= '<td>' . $this->functionscore->toCurrency($entry_balance['dc'], $entry_balance['amount']) . '</td>';

			$html .= '<td><a href="' . base_url('entries/view/' . $row['entryTypeLabel'] . '/' . $row['id']) . '" style="padding-right: 5px;" title="' . lang('view') . '" data-toggle="tooltip"><i class="fas fa-eye"></i>
				</a>';

			$html .= '<a href="' . base_url('entries/edit/' . $row['entryTypeLabel'] . '/' . $row['id']) . '" style="padding-right: 4px;" title="' . lang('edit') . '" data-toggle="tooltip"><i class="fas fa-edit"></i>
				</a>';

		 	$html .= '<a href="' . base_url('entries/delete/' . $row['entryTypeLabel'] . '/' . $row['id']) . '" title="' . lang('delete') . '" data-toggle="tooltip"><i class="fas fa-trash"></i>
				</a></td>';

			$html .= '</tr>';
		}

		/* Current closing balance */
		$html .=  '<tr class="tr-highlight">';
		$html .=  '<td colspan="7">';
		$html .=  lang('curr_closing_balance');
		$html .=  '</td>';
		$html .=  '<td id="cl_td" colspan="2" data-op-balance="' . $entry_balance['dc'] . "_" . $entry_balance['amount'] . '">' . $this->functionscore->toCurrency($entry_balance['dc'], $entry_balance['amount']) . '</td>';
		$html .=  '</tr>';

		$html .= '</tbody></table>';

		$output['entry_table_html'] = $html;
		$output['data'] = $data;

		return $output;
	}

	/**
	*	ledgerstatement method
	*
	*	@return void
	**/
    
    public function ledgerentries($show = true, $ledgerId = NULL) {
		// set page title
        
        
        $input                 = $this->setting_model->getCurrentSessionName();
        list($a, $b)  = explode('-', $input);
        $Current_year = $a;
        if (strlen($b) == 2) {
            $Next_year = substr($a, 0, 2) . $b;
        } else {
            $Next_year = $b;
        }
        $year_str_month     = $Current_year . '-04-01';
        $year_end_month     = date("Y-m-t", strtotime($Next_year . '-03-31'));

		/* Create list of ledgers to pass to view */
		$ledgers = new LedgerTree();
		$ledgers->Group = &$this->Group;
		$ledgers->Ledger = &$this->Ledger;
		$ledgers->current_id = -1;
		$ledgers->restriction_bankcash = 1;
		$ledgers->build(0);
		$ledgers->toList($ledgers, -1);
		
		$this->data['ledgers'] = $ledgers->ledgerList;

		if ($this->input->method() == 'post') {
			if ($show === 'ajax' && empty($this->input->post('ledger_id'))) {
				return $this->functionscore->send_json(array('id' => $ledgerId, 'status' => 'error', 'msg' => lang('invalid_ledger')));
			}

			if (empty($this->input->post('ledger_id'))) {
				$this->session->set_flashdata('error', lang('invalid_ledger'));
				redirect('finance/reports/ledgerentries');
			}
			$ledgerId = $this->input->post('ledger_id');

			
		}
		$this->data['showEntries'] = false;
		// $this->data['options'] = false;

		
		if ($ledgerId) {
			/* Check if ledger exists */
			$this->db->where('id', $ledgerId);
			$ledger = $this->db->get('cyc_ledgers')->row_array();

			if (!$ledger) {
				$this->session->set_flashdata('error', lang('ledger_not_found'));
				redirect('finance/reports/ledgerentries');
			}

			$this->data['ledger_data'] = $ledger;

			/* Set the approprite search conditions */
			$conditions = array();
			$conditions['cyc_entryitems.ledger_id'] = $ledgerId;

			/* Set the approprite search conditions if custom date is selected */
			$startdate = null;
			$enddate = null;

			// $this->data['options'] = true;

			if (!empty($this->input->post('startdate'))) {
				/* TODO : Validate date */
				$startdate = $this->functionscore->dateToSql($this->input->post('startdate'));
				$conditions['cyc_entries.date >='] = $startdate;
			}

			if (!empty($this->input->post('enddate'))) {
				/* TODO : Validate date */
				$enddate = $this->functionscore->dateToSql($this->input->post('enddate'));
				$conditions['cyc_entries.date <='] = $enddate;
			}

			/* Sub-title*/
			if (!empty($this->input->post('startdate')) && !empty($this->input->post('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('enddate')))
				);
				$this->data['startdate'] = $this->input->post('startdate');
				$this->data['enddate'] = $this->input->post('enddate');
			} else if (!empty($this->input->post('startdate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))),
					$this->functionscore->dateFromSql($year_end_month)
				);
				$this->data['startdate'] = $this->input->post('startdate');
				
			} else if (!empty($this->input->post('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($this->input->post('enddate'))
				);
				$this->data['enddate'] = $this->input->post('enddate');
			} else {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($year_end_month)
				);
			}

			/* Opening and closing titles */
			if (is_null($startdate)) {
				$this->data['opening_title'] = sprintf(lang('opening_balance_as_on'),
					$this->functionscore->dateFromSql($year_str_month));
			} else {
				$this->data['opening_title'] = sprintf(lang('opening_balance_as_on'),
					$this->functionscore->dateFromSql($startdate));
			}
			if (is_null($enddate)) {
				$this->data['closing_title'] = sprintf(lang('closing_balance_as_on'),
					$this->functionscore->dateFromSql($year_end_month));
			} else {
				$this->data['closing_title'] = sprintf(lang('closing_balance_as_on'),
					$this->functionscore->dateFromSql($enddate));
			}

			/* Calculating opening balance */
			$op = $this->ledger_model->openingBalance($ledgerId, $startdate);
			$this->data['op'] = $op;

			/* Calculating closing balance */
			$cl = $this->ledger_model->closingBalance($ledgerId, null, $enddate);
			$this->data['cl'] = $cl;

			/* Calculate current page opening balance */
			$current_op = $op;

			$this->db->where($conditions)->select('cyc_entries.id, cyc_entries.tag_id, cyc_entries.entrytype_id, cyc_entries.number, cyc_entries.date, cyc_entries.dr_total, cyc_entries.cr_total, cyc_entryitems.narration, cyc_entryitems.entry_id, cyc_entryitems.ledger_id, cyc_entryitems.amount, cyc_entryitems.dc, cyc_entryitems.reconciliation_date')->join('cyc_entryitems', 'cyc_entries.id = cyc_entryitems.entry_id', 'left')->order_by('cyc_entries.date', 'asc');

			$this->data['entries'] = $this->db->get('cyc_entries')->result_array();

			/* Set the current page opening balance */
			$this->data['current_op'] = $current_op;

			/* Pass varaibles to view which are used in Helpers */
			$this->data['allTags'] = $this->db->get('cyc_tags')->result_array();
			$this->data['showEntries'] = true;
		}

		if ($show === 'false') {
			/* Sub-title*/
			if (!empty($this->input->get('startdate')) && !empty($this->input->get('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->get('startdate'))),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->get('enddate')))
				);
				$this->data['startdate'] = $this->input->get('startdate');
				$this->data['enddate'] = $this->input->get('enddate');
			} else if (!empty($this->input->get('startdate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->get('startdate'))),
					$this->functionscore->dateFromSql($year_end_month)
				);
				$this->data['startdate'] = $this->input->get('startdate');
				
			} else if (!empty($this->input->get('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($this->input->get('enddate'))
				);
				$this->data['enddate'] = $this->input->get('enddate');
			}else{
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($year_end_month)
				);
			}
        	$name = 'Ledger Entries.pdf';

			// $this->load->view('reports/pdf/ledgerentries', $this->data);
			
            $html = $this->load->view('reports/pdf/ledgerentries', $this->data, TRUE, NULL, NULL, NULL, NULL, 'L');
            if (!$this->pdf->generate($html, $name, true)) {
			    if ($error = $this->pdf->getError()) {
            		$this->session->set_flashdata('error', $error);
			    	redirect($_SERVER['HTTP_REFERER']);
            	}
			}
            // $this->functionscore->generate_pdf($html, $name);
		}

		if ($show === true) {
			// render page
			
		$this->load->view('layout/header');
        $this->load->view('account_finance/reports/ledgerentries', $this->data);
        $this->load->view('layout/footer');
		} else if ($show === 'ajax') {
			$opening_balance = $this->functionscore->toCurrency($this->data['op']['dc'], $this->data['op']['amount']);
			$closing_balance = $this->functionscore->toCurrency($this->data['cl']['dc'], $this->data['cl']['amount']);

			$startDate = (isset($this->data['startdate']) ? $this->data['startdate'] : null);
			$endDate = (isset($this->data['enddate']) ? $this->data['enddate'] : null);

			$ajax_data = array(
				'id' 				=> 1,
				'showEntries' 		=> $this->data['showEntries'],
				'ledger_data' 		=> $this->data['ledger_data'],
				'subtitle' 			=> $this->data['subtitle'],
				'opening_title' 	=> $this->data['opening_title'],
				'closing_title' 	=> $this->data['closing_title'],
				'op' 				=> $this->data['op'],
				'cl' 				=> $this->data['cl'],
				'opening_balance'	=> $opening_balance,
				'current_op' 		=> $this->data['current_op'],
				'closing_balance' 	=> $closing_balance,
				'startDate' 		=> $startDate,
				'endDate' 			=> $endDate,
			);
			return $this->functionscore->send_json($ajax_data);
		} else {
			return array(
				'ledgers' 	=> $this->data['ledgers'],
				'showEntries' => $this->data['showEntries'],
				'ledger_data' => $this->data['ledger_data'],
				'subtitle' 	=> $this->data['subtitle'],
				'opening_title' => $this->data['opening_title'],
				'closing_title' => $this->data['closing_title'],
				'op' 			=> $this->data['op'],
				'cl' 			=> $this->data['cl'],
				'entries'		=> $this->data['entries'],
				'current_op' 	=> $this->data['current_op'],
				'allTags' 	=> $this->data['allTags'],
			);
		}
	}
	
	public function getSearchedEntries($type) {
		if ($type === 'ledgerentries') {
			$ledgerId = $_POST['form_data']['id'];
			$startDate = $_POST['form_data']['startDate'];
			$endDate = $_POST['form_data']['endDate'];
		
			if ($ledgerId) {
				$this->load->helper('general');
				$this->load->library('datatablesa');

				/* Set the approprite search conditions */
				$conditions = array();
				$conditions['cyc_entryitems.ledger_id'] = $ledgerId;

				/* Set the approprite search conditions if custom date is selected */
				$startdate = null;
				$enddate = null;

				if (!empty($startDate)) {
					/* TODO : Validate date */
					$startdate = $this->functionscore->dateToSql($startDate);
					$conditions['cyc_entries.date >='] = $startdate;
				}

				if (!empty($endDate)) {
					/* TODO : Validate date */
					$enddate = $this->functionscore->dateToSql($endDate);
					$conditions['cyc_entries.date <='] = $enddate;
				}

				$this->datatables->where($conditions)
				->select('cyc_entries.date as date, cyc_entries.number as number, cyc_entries.id as id, cyc_entrytypes.name as entryTypeName, cyc_entries.tag_id as tag_id, cyc_entries.dr_total, cyc_entries.cr_total, cyc_entryitems.amount, cyc_entryitems.dc as dc, cyc_entries.entrytype_id as entrytype_id, cyc_entrytypes.label as entryTypeLabel')
				->join('cyc_entryitems', 'cyc_entries.id = cyc_entryitems.entry_id', 'left')
				->join('cyc_entrytypes', 'cyc_entries.entrytype_id = cyc_entrytypes.id', 'left')
				->from('cyc_entries')
				->edit_column("date", "$1", "getDateFromSql(date)")
				->edit_column("number", "$1", "getToEntryNumber(number, entrytype_id)")
				->edit_column("id", "$1", "getEntryLedgers(id)")
				->edit_column("tag_id", "$1", "getShowTag(tag_id)")
				->edit_column("dr_total", "$1", "getToCurrency(dc, amount)")
				->edit_column("cr_total", "$1", "getToCurrency(dc, amount)")
				->add_column("Actions", '
					<a href="'.base_url().'finance/entries/view/$2/$1" style="padding-right: 5px;" title="'.lang('view').'" data-toggle="tooltip">
						<i class="fas fa-eye"></i>
					</a>
					<a href="'.base_url().'finance/entries/edit/$2/$1" style="padding-right: 4px;" title="'.lang('edit').'" data-toggle="tooltip">
						<i class="fas fa-edit"></i>
					</a>
					<a href="'.base_url().'finance/entries/delete/$2/$1" title="'.lang('delete').'" data-toggle="tooltip">
					<i class="fas fa-trash"></i>
					</a>'
					, "id, entryTypeLabel");

				$this->datatables->unset_column('entrytype_id');
				$this->datatables->unset_column('amount');
				$this->datatables->unset_column('dc');
				$this->datatables->unset_column('entryTypeLabel');

		        echo $this->datatables->generate();
			}
		}

		if ($type === 'reconciliation') {
			$ledgerId = $_POST['form_data']['id'];
			$startDate = $_POST['form_data']['startDate'];
			$endDate = $_POST['form_data']['endDate'];
			$showall = $_POST['form_data']['showall'];

			if ($ledgerId) {
				$this->load->helper('general');
				$this->load->library('datatablesa');

				/* Set the approprite search conditions */
				$conditions = array();
				$conditions['cyc_entryitems.ledger_id'] = $ledgerId;

				/* Set the approprite search conditions if custom date is selected */
				$startdate = null;
				$enddate = null;

				if (!empty($startDate)) {
					/* TODO : Validate date */
					$startdate = $this->functionscore->dateToSql($startDate);
					$conditions['cyc_entries.date >='] = $startdate;
				}

				if (!empty($endDate)) {
					/* TODO : Validate date */
					$enddate = $this->functionscore->dateToSql($endDate);
					$conditions['cyc_entries.date <='] = $enddate;
				}

				if ($showall != '1') {
					$conditions['cyc_entryitems.reconciliation_date'] = NULL;
				}

				$this->datatables->where($conditions)
				->select('cyc_entries.date as date, cyc_entries.number as number, cyc_entries.id as id, cyc_entrytypes.name as entryTypeName, cyc_entries.tag_id as tag_id, cyc_entries.dr_total, cyc_entries.cr_total, cyc_entryitems.amount, cyc_entryitems.id as eiid, cyc_entries.entrytype_id as entrytype_id, cyc_entrytypes.label as entryTypeLabel, cyc_entryitems.reconciliation_date as reconciliation_date')
				->join('cyc_entryitems', 'cyc_entries.id = cyc_entryitems.entry_id', 'left')
				->join('cyc_entrytypes', 'cyc_entries.entrytype_id = cyc_entrytypes.id', 'left')
				->from('cyc_entries')
				->edit_column("date", "$1", "getDateFromSql(date)")
				->edit_column("number", "$1", "getToEntryNumber(number, entrytype_id)")
				->edit_column("id", "$1", "getEntryLedgers(id)")
				->edit_column("tag_id", "$1", "getShowTag(tag_id)")
				->edit_column("dr_total", "$1", "getToCurrency('D', amount)")
				->edit_column("cr_total", "$1", "getToCurrency('C', amount)")
				->add_column("RecDate", '$1__$2__$3', "id, eiid, reconciliation_date");
				// ->add_column("RecDate", '<input type="hidden" name="ReportRec[$1][id]" value="$2"><input type="text" name="ReportRec[$1][recdate]" value="$3" class="recdate">', "id, eiid, reconciliation_date");

				$this->datatables->unset_column('entrytype_id');
				$this->datatables->unset_column('amount');
				$this->datatables->unset_column('eiid');
				$this->datatables->unset_column('entryTypeLabel');
				$this->datatables->unset_column('reconciliation_date');

		        echo $this->datatables->generate();
		    }
		}
	}
	
	public function reconciliation($show = true, $ledgerId = NULL) {
	    
	    $input                 = $this->setting_model->getCurrentSessionName();
        list($a, $b)  = explode('-', $input);
        $Current_year = $a;
        if (strlen($b) == 2) {
            $Next_year = substr($a, 0, 2) . $b;
        } else {
            $Next_year = $b;
        }
        $year_str_month     = $Current_year . '-04-01';
        $year_end_month     = date("Y-m-t", strtotime($Next_year . '-03-31'));
		
		$this->db->where('cyc_ledgers.reconciliation', 1);
		$this->db->order_by('cyc_ledgers.name', 'asc');
		$this->db->select('cyc_ledgers.id, cyc_ledgers.name, cyc_ledgers.code');
		$ledgers_q = $this->db->get('cyc_ledgers')->result_array();

		if($ledgers_q) {
			$ledgers = array(0 => lang('please_select_ledger'));
			foreach ($ledgers_q as $row) {
				$ledgers[$row['id']] = $this->functionscore->toCodeWithName(
					$row['code'], $row['name']
				);
			}
		} else {
			$ledgers = array(0 => lang('no_reconciled_ledgers_found'));
		}

		$this->data['ledgers'] = $ledgers;

		if ($this->input->method() == 'post' && $show !== 'ajax') {
			/* Ledger selection form submitted */
			if (!empty($this->input->post('submit_ledger'))) {
				if (empty($this->input->post('ledger_id'))) {
					$this->session->set_flashdata('error', lang('invalid_ledger'));
					redirect('finance/reports/reconciliation');
				}
			} else if (!empty($this->input->post('submitrec'))) {
				/* Check if acccount is locked */
				

				/* Reconciliation form submitted */
				foreach ($this->input->post('ReportRec[]') as $row => $recitem) {
					if (empty($recitem['id'])) {
						continue;
					}
					if (!empty($recitem['recdate'])) {
						$recdate = $this->functionscore->dateToSql($recitem['recdate']);
						if (!$recdate) {
							$this->session->set_flashdata('error', lang('invalid_reconciliation_date'));
							continue;
						}
					} else {
						$recdate = NULL;
					}
					$this->db->where('id', $recitem['id']);
					$this->db->update('cyc_entryitems', array('reconciliation_date'=>$recdate));
				}

				$this->session->set_flashdata('message', lang('reconciliation_successs'));
				redirect('finance/reports/reconciliation');
			} else {
				redirect('finance/reports/reconciliation');
			}
		}

		$this->data['showEntries'] = false;
		// $this->data['options'] = false;

		/* Set the approprite search conditions if custom date is selected */
		$startdate = null;
		$enddate = null;

		if ($this->input->method() == 'post') {
			$ledgerId = $this->input->post('ledger_id');

			if ($show === 'ajax' && $ledgerId == 0) {
				return $this->functionscore->send_json(array('id' => $ledgerId, 'status' => 'error', 'msg' => lang('invalid_ledger')));
			}

			/* Check if ledger exists */
			$this->db->where('id', $ledgerId);
			$ledger = $this->db->from('cyc_ledgers')->get()->row_array();

			if (!$ledger) {
				$this->session->set_flashdata('error', lang('ledger_not_found'));
				redirect('finance/reports/reconciliation');
			}

			$this->data['ledger_data'] = $ledger;

			/* Set the approprite search conditions */
			// $conditions = array();
			// $conditions['entryitems.ledger_id'] = $ledgerId;
			// $this->data['options'] = true;
			
			if (!empty($this->input->post('startdate'))) {
				/* TODO : Validate date */
				$startdate = $this->functionscore->dateToSql($this->input->post('startdate'));
				// $conditions['entries.date >='] = $startdate;
			}

			if (!empty($this->input->post('enddate'))) {
				/* TODO : Validate date */
				$enddate = $this->functionscore->dateToSql($this->input->post('enddate'));
				// $conditions['entries.date <='] = $enddate;
			}

			/* Sub-title*/
			if (!empty($this->input->post('startdate')) && !empty($this->input->post('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('reconciliation_for_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('enddate')))
				);
				$this->data['startdate'] = $this->input->post('startdate');
				$this->data['enddate'] = $this->input->post('enddate');
			} else if (!empty($this->input->post('startdate'))) {
				$this->data['subtitle'] = sprintf(lang('reconciliation_for_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))),
					$this->functionscore->dateFromSql($year_end_month)
				);
				$this->data['startdate'] = $this->input->post('startdate');
			} else if (!empty($this->input->post('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('reconciliation_for_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($this->input->post('enddate'))
				);
				$this->data['enddate'] = $this->input->post('enddate');
			} else {
				$this->data['subtitle'] = sprintf(lang('reconciliation_for_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($year_end_month)
				);
			}

			// if (empty($this->input->post('showall')) || $this->input->post('showall') == '0') {
			// 	$conditions['entryitems.reconciliation_date'] = NULL;
			// 	$this->data['showall'] = null;
			// } else {
			// 	$this->data['showall'] = $this->input->post('showall');
			// }

			/* Opening and closing titles */
			if (is_null($startdate)) {
				$this->data['opening_title'] = sprintf(lang('opening_balance_as_on'),
				$this->functionscore->dateFromSql($year_str_month));
			} else {
				$this->data['opening_title'] = sprintf(lang('opening_balance_as_on'),
				$this->functionscore->dateFromSql($startdate));
			}

			if (is_null($enddate)) {
				$this->data['closing_title'] = sprintf(lang('closing_balance_as_on'),
				$this->functionscore->dateFromSql($year_end_month));

			} else {
				$this->data['closing_title'] = sprintf(lang('closing_balance_as_on'),
				$this->functionscore->dateFromSql($enddate));
			}

			/* Reconciliation pending title */
			$this->data['recpending_title'] = '';

			/* Sub-title*/
			if (!is_null($startdate) && !is_null($enddate)) {
				$this->data['recpending_title'] = sprintf(lang('reconciliation_from_to'),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('enddate')))
				);
			} else if (!is_null($this->input->post('startdate'))) {
				$this->data['recpending_title'] = sprintf(lang('reconciliation_from_to'),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->post('startdate'))),
					$this->functionscore->dateFromSql($year_end_month)
				);
			} else if (!is_null($this->input->post('enddate'))) {
				$this->data['recpending_title'] = sprintf(lang('reconciliation_from_to'),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($this->input->post('enddate'))
				);
			}else{
				$this->data['recpending_title'] = sprintf(lang('reconciliation_from_to'),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($year_end_month)
				);
			}
			
			/* Calculating opening balance */
			$op = $this->ledger_model->openingBalance($ledgerId, $startdate);
			$this->data['op'] = $op;

			/* Calculating closing balance */
			$cl = $this->ledger_model->closingBalance($ledgerId, null, $enddate);
			$this->data['cl'] = $cl;

			/* Calculating reconciliation pending balance */
			$rp = $this->ledger_model->reconciliationPending($ledgerId, $startdate, $enddate);
			$this->data['rp'] = $rp;


			/* Pass varaibles to view which are used in Helpers */
			$this->data['allTags'] = $this->db->get('cyc_tags')->result_array();
			$this->data['showEntries'] = true;
		}

		if ($show === true) {
			// render page
			$this->load->view('layout/header');
            $this->load->view('account_finance/reports/reconciliation', $this->data);
            $this->load->view('layout/footer');
        
		} else if ($show === 'ajax') {
			$recpending_balance_d = $this->functionscore->toCurrency('D', $this->data['rp']['dr_total']);
			$recpending_balance_c = $this->functionscore->toCurrency('C', $this->data['rp']['cr_total']);

			$opening_balance = $this->functionscore->toCurrency($this->data['op']['dc'], $this->data['op']['amount']);
			$closing_balance = $this->functionscore->toCurrency($this->data['cl']['dc'], $this->data['cl']['amount']);

			$startDate = (isset($this->data['startdate']) ? $this->data['startdate'] : null);
			$endDate = (isset($this->data['enddate']) ? $this->data['enddate'] : null);

			$ajax_data = array(
				'id' 					=> 1,
				'showEntries' 			=> $this->data['showEntries'],
				'ledger_data' 			=> $this->data['ledger_data'],
				'subtitle' 				=> $this->data['subtitle'],
				'opening_title' 		=> $this->data['opening_title'],
				'closing_title' 		=> $this->data['closing_title'],
				'op' 					=> $this->data['op'],
				'cl' 					=> $this->data['cl'],
				'rp' 					=> $this->data['rp'],
				'recpending_title'		=> $this->data['recpending_title'],
				// 'showall' 				=> $this->data['showall'],
				'recpending_balance_d'	=> $recpending_balance_d,
				'recpending_balance_c' 	=> $recpending_balance_c,
				'opening_balance'		=> $opening_balance,
				'closing_balance' 		=> $closing_balance,
				'startDate' 			=> $startDate,
				'endDate' 				=> $endDate,
			);
			return $this->functionscore->send_json($ajax_data);
		} 
	}
	
	
	public function ledgerstatement($show = true, $ledgerId = NULL, $startDate = NULL, $endDate = NULL, $limit = NULL, $offset = NULL) {
        
        $input                 = $this->setting_model->getCurrentSessionName();
        list($a, $b)  = explode('-', $input);
        $Current_year = $a;
        if (strlen($b) == 2) {
            $Next_year = substr($a, 0, 2) . $b;
        } else {
            $Next_year = $b;
        }
        $year_str_month     = $Current_year . '-04-01';
        $year_end_month     = date("Y-m-t", strtotime($Next_year . '-03-31'));
        
		/* Create list of ledgers to pass to view */
		$ledgers = new LedgerTree();
		$ledgers->Group = &$this->Group;
		$ledgers->Ledger = &$this->Ledger;
		$ledgers->current_id = -1;
		$ledgers->restriction_bankcash = 1;
		$ledgers->build(0);
		$ledgers->toList($ledgers, -1);
		
		$this->data['ledgers'] = $ledgers->ledgerList;
		
		$this->data['showEntries'] = false;
		$this->data['options'] = false;

		if ($this->input->method() == 'post' && $show !== 'ajax') {
			if (empty($this->input->post('ledger_id'))) {
				$this->session->set_flashdata('error', lang('invalid_ledger'));
				redirect('finance/reports/ledgerstatement');
			}
			$ledgerId = $this->input->post('ledger_id');
		}

		if ($ledgerId) {
			/* Check if ledger exists */
			$this->db->where('id', $ledgerId);
			$ledger = $this->db->get('cyc_ledgers')->row_array();

			if (!$ledger) {
				$this->session->set_flashdata('error', lang('ledger_not_found'));
				redirect('finance/reports/ledgerstatement');
			}

			$this->data['ledger_data'] = $ledger;

			/* Set the approprite search conditions */
			$conditions = array();
			$conditions['cyc_entryitems.ledger_id'] = $ledgerId;

			/* Set the approprite search conditions if custom date is selected */
			$startdate = null;
			$enddate = null;

			$sDate = null;
			$eDate = null;

			$this->data['options'] = true;

			if (!empty($this->input->post('startdate'))) {
				$sDate = $this->input->post('startdate');
				$startdate = $this->functionscore->dateToSql($this->input->post('startdate'));
			} else if ($startDate != NULL) {
				$sDate = $startDate;
				$startdate = $this->functionscore->dateToSql($startDate);
			}

			if (!empty($this->input->post('enddate'))) {
				$eDate = $this->input->post('enddate');
				$enddate = $this->functionscore->dateToSql($this->input->post('enddate'));
			} else if ($endDate != NULL) {
				$eDate = $endDate;
				$enddate = $this->functionscore->dateToSql($endDate);
			}
			
			/* Sub-title*/
			if (!empty($startdate) && !empty($enddate)) {
				$this->data['subtitle'] = sprintf(lang('ledger_statement_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($startdate),
					$this->functionscore->dateFromSql($enddate));
				$this->data['startdate'] = $sDate;
				$this->data['enddate'] = $eDate;

			} else if (!empty($startdate)) {
				$this->data['subtitle'] = sprintf(lang('ledger_statement_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($startdate),
					$this->functionscore->dateFromSql($year_end_month)
				);
				$this->data['startdate'] = $sDate;
			} else if (!empty($enddate)) {
				$this->data['subtitle'] = sprintf(lang('ledger_statement_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($enddate)
				);
				$this->data['enddate'] = $this->input->post('enddate');
			} else {
				$this->data['subtitle'] = sprintf(lang('ledger_statement_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($year_end_month)
				);
			}

			/* Opening and closing titles */
			if (is_null($startdate) || empty($startdate)) {
				$this->data['opening_title'] = sprintf(lang('opening_balance_as_on'),
				$this->functionscore->dateFromSql($year_str_month));
			} else {
				$conditions['cyc_entries.date >='] = $startdate;
				$this->data['opening_title'] = sprintf(lang('opening_balance_as_on'),
				$this->functionscore->dateFromSql($startdate));
			}

			if (is_null($enddate) || empty($enddate)) {
				$this->data['closing_title'] = sprintf(lang('closing_balance_as_on'),
				$this->functionscore->dateFromSql($year_end_month));
			} else {
				$conditions['cyc_entries.date <='] = $enddate;
				$this->data['closing_title'] = sprintf(lang('closing_balance_as_on'),
				$this->functionscore->dateFromSql($enddate));
			}

			/* Calculating opening balance */
			$op = $this->ledger_model->openingBalance($ledgerId, $startdate);
			$this->data['op'] = $op;

			/* Calculating closing balance */
			$cl = $this->ledger_model->closingBalance($ledgerId, null, $enddate);
			$this->data['cl'] = $cl;

			/* Calculate current page opening balance */
			$current_op = $op;
			
			$this->db->where($conditions)
			->select('cyc_entries.date as date, cyc_entries.number as number, cyc_entries.id as id, cyc_entrytypes.name as entryTypeName, cyc_entries.tag_id as tag_id, cyc_entries.dr_total, cyc_entries.cr_total, cyc_entryitems.amount, cyc_entryitems.dc as dc, cyc_entries.entrytype_id as cyc_entrytype_id, cyc_entrytypes.label as entryTypeLabel, cyc_entryitems.entry_id')
			->join('cyc_entryitems', 'cyc_entries.id = cyc_entryitems.entry_id', 'left')
			->join('cyc_entrytypes', 'cyc_entries.entrytype_id = cyc_entrytypes.id', 'left')
			->order_by('cyc_entries.id', 'asc');
			if (!is_null($limit) && !is_null($offset)) {
				$this->db->limit($limit, $offset);
			}
			$this->data['entries'] = $this->db->get('cyc_entries')->result_array();
			/* Set the current page opening balance */
			
			$this->data['current_op'] = $current_op;

			/* Pass varaibles to view which are used in Helpers */
			$this->data['allTags'] = $this->db->get('cyc_tags')->result_array();
			$this->data['showEntries'] = true;
		}

        if ($show === 'false') {
        	/* Sub-title*/
			if (!empty($this->input->get('startdate')) && !empty($this->input->get('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->get('startdate'))),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->get('enddate')))
				);
				$this->data['startdate'] = $this->input->get('startdate');
				$this->data['enddate'] = $this->input->get('enddate');
			} else if (!empty($this->input->get('startdate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($this->functionscore->dateToSql($this->input->get('startdate'))),
					$this->functionscore->dateFromSql($year_end_month)
				);
				$this->data['startdate'] = $this->input->get('startdate');
				
			} else if (!empty($this->input->get('enddate'))) {
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($ledger['name']),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($this->input->get('enddate'))
				);
				$this->data['enddate'] = $this->input->get('enddate');
			}else{
				$this->data['subtitle'] = sprintf(lang('ledger_entries_from_to'),
					($this->functionscore->toCodeWithName($ledger['code'], $ledger['name'])),
					$this->functionscore->dateFromSql($year_str_month),
					$this->functionscore->dateFromSql($year_end_month)
				);
			}

        	$name = 'Ledger Statement.pdf';

        	
            if (!$this->pdf->generate($html, $name, true)) {
			    if ($error = $this->pdf->getError()) {
            		$this->session->set_flashdata('error', $error);
			    	redirect($_SERVER['HTTP_REFERER']);
            	}
			}
            // $this->functionscore->generate_pdf($html, $name);
		}

		if ($show === true || $show === 'true' || $show === 'ledgerid') {
		$this->load->view('layout/header');
        $this->load->view('account_finance/reports/ledgerstatement', $this->data);
        $this->load->view('layout/footer');
		} else if ($show === 'ajax') {
			if ($ledgerId == NULL) {
				if (empty($this->input->post('ledger_id')) || $this->input->post('ledger_id') == null || $this->input->post('ledger_id') == 0 || !$this->input->post('ledger_id')) {
					return array('id' => 0, 'status' => 'error', 'msg' => lang('invalid_ledger'));
				}
			}

			$opening_balance = $this->functionscore->toCurrency($this->data['op']['dc'], $this->data['op']['amount']);
			$closing_balance = $this->functionscore->toCurrency($this->data['cl']['dc'], $this->data['cl']['amount']);

			$startDate = (isset($this->data['startdate']) ? $this->data['startdate'] : $startDate);
			$endDate = (isset($this->data['enddate']) ? $this->data['enddate'] : $endDate);

			
			
			$ajax_data = array(
				'id' 				=> 1,
				'entries'			=> $this->data['entries'],
				'showEntries' 		=> $this->data['showEntries'],
				'ledger_data' 		=> $this->data['ledger_data'],
				'subtitle' 			=> $this->data['subtitle'],
				'opening_title' 	=> $this->data['opening_title'],
				'closing_title' 	=> $this->data['closing_title'],
				'op' 				=> $this->data['op'],
				'cl' 				=> $this->data['cl'],
				'opening_balance'	=> $opening_balance,
				'current_op' 		=> $this->data['current_op'],
				'closing_balance' 	=> $closing_balance,
				'startDate' 		=> $startDate,
				'endDate' 			=> $endDate,
			);

			// return $this->functionscore->send_json($ajax_data);
			return $ajax_data;
		} else {
			return array(
				'ledgers' 	=> $this->data['ledgers'],
				'showEntries' => $this->data['showEntries'],
				'ledger_data' => $this->data['ledger_data'],
				'subtitle' 	=> $this->data['subtitle'],
				'opening_title' => $this->data['opening_title'],
				'closing_title' => $this->data['closing_title'],
				'op' 			=> $this->data['op'],
				'cl' 			=> $this->data['cl'],
				'entries'		=> $this->data['entries'],
				'current_op' 	=> $this->data['current_op'],
				'allTags' 	=> $this->data['allTags'],
			);
		}
	}

	
	function print_space($count) {
		$html = '';
		for ($i = 1; $i <= $count; $i++) {
			$html .= '      ';
		}
		return $html;
	}
}
