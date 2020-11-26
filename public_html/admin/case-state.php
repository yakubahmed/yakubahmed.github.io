<?php
    include('includes/admin_nav.php');
    include('includes/admin_sidebar.php');
    include('includes/cases-state.php');
 
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-md-12">
        <div class="box box-primary" style="width:90%; margin:0 auto;">
            <div class="box-header with-border">
              <h3 class="box-title">Add case satate</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post">

              <div class="box-body" style="width:90%; margin:0 auto;">
                  <div class="row">
                  <?php //print_message(); ?>


                      <div class="form-group col-md-6" >
                          
                          <label for="">State name</label>
                          <select name="stateid" class="form-control" required>
                            <option value=''>Select state</option>
                            <?php display_states();?>
                          </select>
                      </div>
                    <?php
                      if(isset($_GET['upd'])){
                        $id=$_GET['id'];
                        $new=$_GET['new'];
                        $total=$_GET['total'];
                        echo "
                        
                        <div class='form-group col-md-6' >
                        <label for=''>New</label>
                        <input type='number' name='new_pple'  class='form-control' required value='$new'>
                        </div>
                        <div class='form-group col-md-12' >
                        <label for=''>Total</label>
                        <input type='number' name='total_pple'  class='form-control' required value='$total'>
                        </div>

                        <div class='from-group col-md-6'>
                          <input type='submit' name='btnUpdate' value='Update' class='btn btn-primary'>
                        </div>
                        
                        ";
                      }else{
                        echo '
                        
                        <div class="form-group col-md-6" >
                        <label for="">Number of people effected</label>
                        <input type="number" name="number_ppl" id="" class="form-control" required>
                        </div>

                        <div class="from-group col-md-6">
                          <input type="submit" name="btnSubmit" value="Submit" class="btn btn-info">
                        </div>
                        
                        ';
                      }
                    
                    
                    ?>


                  </div>
              </div>
        </div>
        </div>

        <div class="col-md-12">
        <div class="box box-primary" style="width:90%; margin:0 auto;">
            <div class="box-header with-border">
              <h3 class="box-title">Manage State</h3>
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
                                <th>State name</th>
                                <th>new </th>
                                <th>Effected</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php display_cases_state(); ?>
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