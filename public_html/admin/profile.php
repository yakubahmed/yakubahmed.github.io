<?php
    include('includes/admin_nav.php');
    include('includes/admin_sidebar.php');
    include('includes/profile.php');

?>
<style>
        .img-circle{
        border-radius:90px;
        border: 2px solid blue;
    }
    .table-responsive{
        width:80%;
        margin: 0 auto;
    }

</style>

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
              <h3 class="box-title"> <i class="fa fa-cog"></i> Profile setting</h3>
            </div>
            <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
 
<form method="post" enctype="multipart/form-data">
<div class="table-responsive">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr class="table-success">
                <th>
                <center>
                    <img src="../images/<?php echo $_SESSION['pimage']; ?>"  class="img-circle" width="300" height="300">                      
                </center>
                </th>
            </tr>
            <tr class="table-primary">
                 <th>
                    <center>
                    <input type="file" name="pimage"  class="btn btn-info">
                    <small>Relace new image</small>
                    </center>
                 </th>
            </tr>
            <tr class="table-secondary">
                 <th>
                    <center>
                        <Label>Full name</Label>
                       <input type="text" name="fname" id="" value="<?php echo $_SESSION['fname']; ?>" class="form-control" required>
                    </center>
                 </th>
            </tr>
            <tr class="table-dark">
                 <th>
                    <center>
                      <div class="row">
                        <div class="form-group col-md-6">
                        <label for="">Email Address</label>
                        <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"  class="form-control" required>
                       </div>
                       <div class="form-group col-md-6">
                            <label for="">Password</label>3
                           <input type="text" name="pwd" placeholder="password" id="" class="form-control" autocomplete="off">
                           <small>N.B leaf it blank if you don't need to change</small>
                       </div>
                        </div>
                    </center>
                 </th>
            </tr>

           
            <tr class="table-primary">
                 <th>
                    <center>
                        <div class="row">
                        <div class="form-group col-md-12">
                           <input type="submit" name="btnSubmit" id="" value="Update" class="form-control btn btn-success">
                        </div>

                        </div>
                    </center>
                 </th>
            </tr>
        </thead>
    </table>
</div>
</form>
                    </div>
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
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<?php include('includes/admin_footer.php'); ?>