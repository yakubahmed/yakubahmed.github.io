<?php
    include('includes/admin_nav.php');
    include('includes/admin_sidebar.php');
    include('includes/users.php');
?>
<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Users</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-md-12">
        <div class="box box-primary" style="width:90%; margin:0 auto;">
            <div class="box-header with-border">
              <h3 class="box-title">Add new User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post">

              <div class="box-body" style="width:90%; margin:0 auto;">
                  <div class="row">
                  <?php //print_message(); ?>
                      <div class="form-group col-md-6" >
                          <label for="">Full name</label>
                          <input type="text" name="fname" placeholder="eg. Abdulkadir Mohamed" class="form-control" autocomplete="off" autofocus required>
                      </div>
                    
                      <div class="form-group col-md-6" >
                          <label for="">Email Address</label>
                          <input type="email" name="email" placeholder="Email Address" class="form-control" autcomplete="off" required>
                      </div>
                   
                      <div class="form-group col-md-6" >
                          <input type="submit" name="btnSubmit"  class="btn btn-info">
                      </div>


                  </div>
              </div>
        </div>
        </div>

        <div class="col-md-12">
        <div class="box box-primary" style="width:90%; margin:0 auto;">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Users</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post">
              <div class="box-body">
                  <div class="row">
                    <div class=" col-md-12 table-reponsive">
                      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full name</th>
                                <th>Email Address </th>
                                <th>Date </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php display_users(); ?>
                        </tbody>
                      </table>
                    </div>

                  </div>
              
              </div>
              <!-- /.box-body -->

     
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->

    </section>

    <!-- /.content -->
  </div>

  <script >
    $('.btn-danger').on('click',function(e){
      e.preventDefault();
      const href = $(this).attr('href');
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          window.location = href;
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
    })
  </script>

  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<?php include('includes/admin_footer.php'); ?>