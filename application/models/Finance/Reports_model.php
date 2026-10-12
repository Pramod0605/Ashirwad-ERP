<?php
Class Reports_model extends CI_Model {

	public function count_all($ledgerId = NULL, $startDate = NULL, $endDate = NULL) {
		if ($ledgerId === NULL) {
			return FALSE;
		}

		$conditions = array();
		$conditions['cyc_entryitems.ledger_id'] = $ledgerId;

		/* Opening and closing titles */
		if (!is_null($startDate) && !empty($startDate)) {
			$conditions['cyc_entries.date >='] = $startDate;
		}

		if (!is_null($endDate) || !empty($endDate)) {
			$conditions['cyc_entries.date <='] = $endDate;
		}
		$this->db->where($conditions)
		->join('cyc_entryitems', 'cyc_entries.id = cyc_entryitems.entry_id', 'left');

		$query = $this->db->get("cyc_entries");
		return $query->num_rows();
	}



	/**
	* Show the entry ledger details
	*/
	public function buildTree(array $elements, $parentId = 0) {
	    $branch = array();
	    foreach ($elements as $element) {
	        if ($element->parent_id == $parentId) {
	            $children = $this->buildTree($elements, $element->id);
	            if ($children) {
	            	$branch = array_merge($branch, $children);
	            }
	            $branch[] = $element->id;
	        }
	    }
	    return $branch;
	}

	public function getTotalPeriodical($id) {
   		// build our category list only once
	   	$cats = [];
		$q = $this->db->get('cyc_groups');
		if ($q->num_rows() > 0) {
			$cats = $q->result();
		}

		$parent_ids = $this->buildTree($cats, $id);

		$q = $this->db
			->select('SUM(amount) as total, date')
			->join('cyc_ledgers', 'cyc_entryitems.ledger_id=cyc_ledgers.id', 'left')
			->join('cyc_entries', 'cyc_entries.id=cyc_entryitems.entry_id', 'left')
			->where_in('cyc_ledgers.group_id', $parent_ids)
			->group_by('cyc_entries.id')
			->where("MONTH(cyc_entries.date) = MONTH(CURRENT_DATE()) AND YEAR(cyc_entries.date) = YEAR(CURRENT_DATE())", NULL, FALSE)
			->from('cyc_entryitems')
			->get();
			
			$number = array();
	        for ($i = 1; $i <= 31; $i++) {
	            $number[$i] = 0;
	        }

			if ($q->num_rows() > 0) {
				$data = $q->result_array();
				$dated = array();
				foreach ($data as $row) {
					if(array_key_exists($row['date'], $dated)){
				        $dated[$row['date']]['total']	.= $row['total'];
				        $dated[$row['date']]['date']	= $row['date'];
				    } else {
				        $dated[$row['date']]  = $row;
				    }
				}
				foreach ($dated as $row) {
					$id = @date('j', strtotime($row['date']));
		            $number[$id] = $number[$id] + @$row['total'];
				}
			}

			
			return array_values($number);
	}

	
	public function getTotalofToday($id) {
   		// build our category list only once
	   	$cats = [];
		$q = $this->db->get('cyc_groups');
		if ($q->num_rows() > 0) {
			$cats = $q->result();
		}

		$parent_ids = $this->buildTree($cats, $id);

		$q = $this->db
			->select('SUM(amount) as total, date')
			->join('cyc_ledgers', 'cyc_entryitems.ledger_id=cyc_ledgers.id', 'left')
			->join('cyc_entries', 'cyc_entries.id=cyc_entryitems.entry_id', 'left')
			->where_in('cyc_ledgers.group_id', $parent_ids)
			->group_by('cyc_entries.date')
			->where("cyc_entries.date = CURRENT_DATE()", NULL, FALSE)
			->from('cyc_entryitems')
			->get();
			
		if ($q->num_rows() > 0) {
			$data = $q->row();
			return $data->total;
		}
		return false;
	}

	public function getTotalofThisMonth($id) {
   		// build our category list only once
	   	$cats = [];
		$q = $this->db->get('cyc_groups');
		if ($q->num_rows() > 0) {
			$cats = $q->result();
		}

		$parent_ids = $this->buildTree($cats, $id);

		$q = $this->db
			->select('SUM(amount) as total, date')
			->join('cyc_ledgers', 'cyc_entryitems.ledger_id=cyc_ledgers.id', 'left')
			->join('cyc_entries', 'cyc_entries.id=cyc_entryitems.entry_id', 'left')
			->where_in('cyc_ledgers.group_id', $parent_ids)
			->group_by("MONTH(cyc_entries.date)")
			->where("MONTH(cyc_entries.date) = MONTH(CURRENT_DATE()) AND YEAR(cyc_entries.date) = YEAR(CURRENT_DATE())", NULL, FALSE)
			// ->where($this->db->dbprefix('entries').".date = CURRENT_DATE()", NULL, FALSE)
			->from('cyc_entryitems')
			->get();
			
		if ($q->num_rows() > 0) {
			$data = $q->row();
			return $data->total;
		}
		return false;
	}

	public function getTotalMonthly($id) {
		$number = array();
		for ($i=11; $i >= 0 ; $i--) {
			$date = new DateTime('now');
			$date->modify('first day of -'.$i.' month');

			$number[$date->format('Y-m')] = 0;
		}

		if ($id == 0) {
			$xAxis = array_keys($number);
			foreach ($xAxis as $key => $offset) {
				$new_offset = date('M Y', strtotime($offset));
				$xAxis[$key] = $new_offset;
			}
			return $xAxis;
		}

   		// build our category list only once
	   	$cats = [];
		$q = $this->db->get('cyc_groups');
		if ($q->num_rows() > 0) {
			$cats = $q->result();
		}

		$parent_ids = $this->buildTree($cats, $id);			

		$q = $this->db
			->select('SUM(amount) as total, date, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`,"%Y-%m") as offset')
			->join('cyc_ledgers', 'cyc_entryitems.ledger_id=cyc_ledgers.id', 'left')
			->join('cyc_entries', 'cyc_entries.id=cyc_entryitems.entry_id', 'left')
			->where_in('cyc_ledgers.group_id', $parent_ids)
			->group_by("offset")
			->where("cyc_entries.date <= NOW() and cyc_entries.date >= Date_add(Now(),interval - 12 month)")
			->from('cyc_entryitems')
			->get();

		if ($q->num_rows() > 0) {
			$data = $q->result_array();
			$dated = array();
			foreach ($data as $row) {
				if(array_key_exists($row['offset'], $dated)){
			        $dated[$row['offset']]['total']	.= $row['total'];
			        $dated[$row['offset']]['date']	= $row['date'];
			    } else {
			        $dated[date('Y-m', strtotime($row['date']))]  = $row;
			    }
			}	

			foreach ($dated as $row) {
				$id = $row['offset'];
				if (array_key_exists($id, $number)) {
					$number[$id] = @$row['total'];
				}
			}

			return array_values($number);
		}
		return FALSE;
	}

}