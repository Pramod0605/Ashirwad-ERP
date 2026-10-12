<style>
      div.dt-buttons {
          position: relative !important;
      }
    </style>
    <link rel="stylesheet" href="<?= base_url() ?>backend/finance/css/mystyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/finance/plugins/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url() ?>backend/finance/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>backend/finance/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<script src="<?= base_url() ?>backend/finance/js/myjs.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.flash.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<?php


    
  function print_account_chart($account, $c = 0, $THIS) {
    $CI =& get_instance();
    $counter = $c;
    /* Print groups */
    if ($account->id != 0) {
      if ($account->id <= 4) {
        echo '<tr class="tr-group tr-root-group">';
      } else {
        echo '<tr class="tr-group">';
      }
      echo '<td>';
      echo print_space($counter);
      echo $account->code;
      echo '</td>';
      echo '<td class="td-group">';
      echo print_space($counter);
      echo $account->name;
      echo '</td>';

      echo '<td>'.lang('accounts_index_td_label_group').'</td>';

      echo '<td style="text-align:center;">-</td>';
      echo '<td style="text-align:center;">-</td>';

      /* If group id less than 4 dont show edit and delete links */
      if ($account->id <= 4) {
        echo '<td class="td-actions"></td>';
      } else {
        echo '<td class="td-actions" style="text-align:right">';
        echo anchor('finance/groups/edit/'.$account->id, '&emsp;<i class="fa fa-edit"></i>'.lang('accounts_index_edit_btn'), array('class' => 'no-hover font-normal', 'escape' => false, 'style' => 'margin-right: 3px;'));
        echo "<span class='link-pad'></span>";

        echo anchor('finance/groups/delete/'.$account->id, '&emsp;<i class="fa fa-trash"></i>'.lang('accounts_index_delete_btn'), 
            array('class' => 'no-hover font-normal',
                  'escape' => false,
                  'confirm' => lang('accounts_index_delete_group_alert'))
        );

        echo '</td>';
      }
      echo '</tr>';
    }

    /* Print child ledgers */
    if (count($account->children_ledgers) >= 1) {
      $counter++;
      foreach ($account->children_ledgers as $id => $data) {
        echo '<tr class="tr-ledger">';
        echo '<td class="td-ledger">';
        echo anchor('finance/reports/ledgerstatement/ledgerid/'.$data['id'], print_space($counter).$data['code']);
        echo '</td>';
        echo '<td class="td-ledger">';
        //to change later
        echo anchor('finance/reports/ledgerstatement/ledgerid/'.$data['id'], print_space($counter).$data['name']); 
        echo '</td>';
        echo '<td>'.lang('accounts_index_td_label_ledger').'</td>';

        echo '<td style="text-align:right">';
        echo $CI->functionscore->toCurrency($data['op_total_dc'], $data['op_total']);
        echo '</td>';

        echo '<td style="text-align:right">';
        echo $CI->functionscore->toCurrency($data['cl_total_dc'], $data['cl_total']);
        echo '</td>';

        echo '<td class="td-actions" style="text-align:right">';
        echo anchor('finance/ledgers/edit/'.$data['id'], '&emsp;<i class="fa fa-edit"></i>'.lang('accounts_index_edit_btn'), 
            array('class' => 'no-hover', 'escape' => false, 'style' => 'margin-right: 3px;')
        );
        echo "<span class='link-pad'></span>";
        echo anchor('finance/ledgers/delete/'.$data['id'], '&emsp;<i class="fa fa-trash"></i>'.lang('accounts_index_delete_btn'), 
            array('class' => 'no-hover', 'escape' => false, 'confirm' => (lang('accounts_index_delete_ledger_alert')))
        );
        // echo "</td>";
        echo '</tr>';
      }
      $counter--;
    }
    
    /* Print child groups recursively */
    foreach ($account->children_groups as $id => $data) {
      $counter++;
      print_account_chart($data, $counter, $THIS);
      $counter--;
    }
  }

  function print_space($count) {
    $html = '';
    for ($i = 1; $i <= $count; $i++) {
      $html .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    }
    return $html;
  }

?>
<!-- Main content -->
<div class="content-wrapper">
    <section class="content">
      <?php if ($this->functionscore->calculate($opdiff['opdiff_balance'], 0, '!=')) {
        echo '<div><div role="alert" class="alert alert-danger">' .
          sprintf(lang('accounts_index_label_difference_bw_balance'), $this->functionscore->toCurrency($opdiff['opdiff_balance_dc'], $opdiff['opdiff_balance'])) .
          
          '</div></div>';
      }; ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <!-- <div class="card-header with-border">
              <h3 class="card-title"><?= lang('accounts_index_heading'); ?></h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <?php
                echo '<table id="ledgertable" class="stripped" style="padding-top: 40px;">';
                echo '<thead>';
                echo '<th>' . (lang('accounts_index_account_code')) . '</th>';
                echo '<th>' . (lang('accounts_index_account_name')) . '</th>';
                echo '<th>' . (lang('type')) . '</th>';
                echo '<th>' . (lang('accounts_index_op_balance')) . '₹' . '</th>';
                echo '<th>' . (lang('accounts_index_cl_balance')) . '₹' . '</th>';
                echo '<th>' . (lang('actions')) . '</th>';
                echo '</thead>';
                echo "<tbody>";
                print_account_chart($accountlist, -1, $this);
                echo "</tbody>";  
                echo '</table>';
              ?>
            </div>
          </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
  $.fn.dataTable.ext.buttons.creategroup =
  {
    className: 'btn btn-primary pb-4 mb-4',
    id: 'CreateGroupButton',
    text: "<i class='fa fa-database'></i> <?= lang('accounts_index_add_group_btn'); ?>",
    action: function (e, dt, node, config)
    {
      //This will send the page to the location specified
      window.location.href = '<?= base_url(); ?>finance/groups/add';
    }
  };

  $.fn.dataTable.ext.buttons.createledger =
  {
    className: 'btn btn-primary pb-4 mb-4',
    id: 'CreateLedgerButton',
    text: "<i class='fa fa-plus'></i> <?= lang('accounts_index_add_ledger_btn'); ?>",
    action: function (e, dt, node, config)
    {
      //This will send the page to the location specified
      window.location.href = '<?= base_url(); ?>finance/ledgers/add';
    }
  };


  var ledgertable = $('#ledgertable').DataTable({
    "paging": false,
    "lengthChange": true,
    "searching": false,
    "ordering": false,
    "info": false,
    "autoWidth": true,
    dom: 'Bfrtip',
    buttons: 
    [
      'creategroup',
      'createledger',
      'import',
      'excel',
    ],
    columnDefs: [
      { targets: [0], ordering: true},
    ],
    "order": [[ 0, "desc" ]]
  });
  // ledgertable.order([0, 'asc']).draw();
</script>