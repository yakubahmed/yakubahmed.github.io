<?php
    include('includes/admin_nav.php');
    include('includes/admin_sidebar.php');
    include('includes/add-news.php');

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
        <div class="box box-primary">
            <div class="box-header with-border">
              <?php 
              if(isset($_GET['upd'])){ 
                echo '<h3 class="box-title">Update news</h3>';
              }else{
                echo '<h3 class="box-title">Add news</h3>';
              }
                ?>
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" >
              <div class="box-body">
                  <div class="row">
                  <?php print_message();?>
                        <div class="form-group col-md-6">
                        
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title..." required autocomplete="off" value="<?php display_t();?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Source Article</label>
                            <input type="url" name="s_article" id="" required placeholder="" class="form-control" autocomplete="off"  value="<?php display_s(); ?>">
                          
                        </div>
                        <div class="form-group col-md-12">
                            <label>Post content</label>
                            <textarea name="pcontent" id="pcontent"  class="form-control"><?php display_c(); ?></textarea>
                            
                          
                        </div>


        
  

                    

              
              <!-- /.form group -->


                  </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <?php 
                if(isset($_GET['upd'])){
                  echo ' <button type="submit" class="btn btn-success" name="btnUpdate">Update</button>';
                }else{
                  echo ' <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>';
                } 
              ?>
               
              </div>
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


  <script>
    ClassicEditor
        .create( document.querySelector( '#pcontent' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<?php include('includes/admin_footer.php'); ?>