<!-- <div class="item w2">
  <div class="photo">
    <div class="head">
      <span class="pull-right active"> <i class="fa fa-heart"></i> </span><h4>Road</h4>
      <span class="desc">My Trips</span>
    </div>
    <div class="img">
      <img src="images/gallery/img4.jpg" alt="gallery-image" />
      <div class="over">
        <div class="func"><a href="#"><i class="fa fa-link"></i></a><a class="image-zoom" href="images/gallery/img4.jpg"><i class="fa fa-search"></i></a></div>
      </div>            
    </div>
  </div>
</div> -->
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
              <th>No.</th>
              <th>Name</th>
              <th>Location</th>
              <th>Description</th>
              <th>Profile</th>
              <th>Delete</th>
            </thead>
            <tbody>
              <?php echo $estate_table; ?>
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