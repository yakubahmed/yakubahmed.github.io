
<?php

if(isset($_POST['btn_submit'])){
  $number  = $_POST['number'];
  $stmt = "UPDATE total_cases SET recovered=$number";
  $result = mysqli_query($con, $stmt);
  if($result){
    header('location: cases');
  }else{
    echo "failed";
  }
  
}

function display_recovered(){
  global $con;
  $stmt = "SELECT * FROM total_cases";
  $result = mysqli_query($con, $stmt);
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['t_id'];
    $recovered = $row['recovered'];


    echo "
      <tr>
        <td>$id</td>
        <td>$recovered</td
      </tr>
    ";
  }
}

?>

      
      <div class="row">
        <!-- ./col -->

        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add recovered number</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post">
              <div class="box-body">
                  <div class="row">
 
                        <div class="form-group col-md-12">
                            <label>Number of people recovered</label>
                            <div class="input-group input-group-md">
                              <input type="number" class="form-control" name="number" required>
                              <span class="input-group-btn">
                                <button type="submit"  name="btn_submit" class="btn btn-info btn-flat">Submit</button>
                              </span>
                            </div>
                          
                        </div>


                  </div>
              
              </div>
              <!-- /.box-body -->

           
            </form>
          </div>
        </div>


        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Manage number of  recovered people</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                  <div class="row">
 
                        <div class="form-group col-md-12">
                           <div class="table-responsive">
                           <table class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Recovered number</th>
                      
                                  </tr>
                              </thead>

                              <tbody>
                               <?php display_recovered(); ?>
                              </tbody>
                            </table>
                           </div>
                        </div>


                  </div>
              
              </div>
              <!-- /.box-body -->

        
    
          </div>
        </div>


      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->

   
 



