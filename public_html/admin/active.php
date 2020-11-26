
      <div class="row">
        <!-- ./col -->

        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Active number</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post">
              <div class="box-body">
                  <div class="row">
 
                        <div class="form-group col-md-12">
                            <label>Number of people active</label>
                            <div class="input-group input-group-md">
                              <input type="number" class="form-control">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat">Submit</button>
                              </span>
                            </div>
                          
                        </div>


                  </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="btn_submit_student">Submit</button>
              </div>
            </form>
          </div>
        </div>


        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Manage number of  active people</h3>
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
                                      <th>active number</th>
                                  
                                      <th>Actions</th>
                                  </tr>
                              </thead>

                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>65</td>
                                      <td></td>
                                      
                                  </tr>
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

   
 

  <script>
    ClassicEditor
        .create( document.querySelector( '#pcontent' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


