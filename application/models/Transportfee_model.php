<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Transportfee_model extends MY_Model
{

    public function add($insert_data, $update_data)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (!empty($insert_data)) {
            $this->db->insert_batch('transport_feemaster', $insert_data);
        }
        if (!empty($update_data)) {
            $this->db->update_batch('transport_feemaster', $update_data, 'id');
        }

        //======================Code End==============================

        $this->db->trans_complete(); # Completing transaction
        /* Optional */

        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
            return $record_id;
        }

    }

    public function getSessionFees($session_id)
    {
        $data = $this->db->select('*')->from('transport_feemaster')->where('session_id', $session_id)->get()->result_array();
        return $this->sortTransportFeesForDisplay($data);
    }

    public function getYearlyTransportFee($session_id)
    {
        $query = $this->db->select('*')
            ->from('transport_feemaster')
            ->where('session_id', $session_id)
            ->where("LOWER(month) = 'yearly'", null, false)
            ->get();

        return $query->num_rows() > 0 ? $query->row_array() : null;
    }

    public function sortTransportFeesForDisplay($fees)
    {
        if (empty($fees)) {
            return $fees;
        }

        usort($fees, function ($a, $b) {
            $a_is_yearly = isset($a['month']) && strtolower($a['month']) === 'yearly';
            $b_is_yearly = isset($b['month']) && strtolower($b['month']) === 'yearly';

            if ($a_is_yearly && !$b_is_yearly) {
                return -1;
            }

            if (!$a_is_yearly && $b_is_yearly) {
                return 1;
            }

            return 0;
        });

        return $fees;
    }

    public function resolveTransportFeeSelection($posted_ids, $session_id)
    {
        if (empty($posted_ids)) {
            return array();
        }

        $posted_ids = array_values(array_unique(array_filter(array_map('intval', (array) $posted_ids))));

        $yearly_fee = $this->getYearlyTransportFee($session_id);
        if (empty($yearly_fee)) {
            return $posted_ids;
        }

        $yearly_id = (int) $yearly_fee['id'];

        if (in_array($yearly_id, $posted_ids, true)) {
            return array($yearly_id);
        }

        return array_values(array_filter($posted_ids, function ($id) use ($yearly_id) {
            return (int) $id !== $yearly_id;
        }));
    }

     public function transportfesstype($session_id,$month)
    {
        $data = $this->db->select('transport_feemaster.*,transport_feemaster.month as type,"Fees" as code')->from('transport_feemaster')->where('month', $month)->where('session_id', $session_id)->get()->result();
        return !empty($data) ? $data[0] : null;
    }

}
