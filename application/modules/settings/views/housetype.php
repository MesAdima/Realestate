<div class="row">
  <div class="col-md-12">
    <div class="block-flat">
      <div class="header">              
        <h3>List of all Estates</h3>
      </div>
      <div class="content">
        <div class="table-responsive">
          <table class="table table-bordered" id="datatable" >
            <thead>
              <th>House Type ID</th>
              <th>Description</th>
              <th>House Type</th>
              <th>Multiple Houses</th>
            </thead>
            <tbody>
              <?php echo $houses_table; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#datatable').dataTable();
  $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
  $('.dataTables_length select').addClass('form-control');
</script>