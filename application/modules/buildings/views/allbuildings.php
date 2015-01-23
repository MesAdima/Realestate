
<div class="row">
  <div class="col-md-12">
    <div class="block-flat">
      <div class="header">              
        <h3>List of all Buildings</h3>
      </div>
      <div class="content">
        <div class="table-responsive">
          <table class="table table-bordered" id="datatable" >
            <thead>
              <th>No.</th>
              <th>Estate No.</th>
              <th>Name</th>
              <th>Description</th>
              <th>Type No.</th>
              <th>View</th>
              <th>Delete</th>
            </thead>
            <tbody>
              <?php echo $building_table; ?>
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