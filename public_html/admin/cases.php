<?php
    include('includes/admin_nav.php');
    include('includes/admin_sidebar.php');

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

    <!-- /.content -->
    
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
    	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li><a href="#tab3default" data-toggle="tab">Recovered</a></li>                          
                            <li><a href="#tab4default" data-toggle="tab">ICU</a></li>                          
                            <li><a href="#tab5default" data-toggle="tab">Death</a></li>                          
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="tab3default"><?php include('recovered.php'); ?></div>
                        <div class="tab-pane fade" id="tab4default"><?php include('icu.php'); ?></div>
                        <div class="tab-pane fade" id="tab5default"><?php include('death.php'); ?></div>
                    </div>
                </div>
            </div>
        </div>

        

      </div>


    </section>

</div>


  <script>
    ClassicEditor
        .create( document.querySelector( '#pcontent' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<?php include('includes/admin_footer.php'); ?>

  