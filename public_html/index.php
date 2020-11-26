<?php 

require('includes/header.php');

require('includes/index.php');

?>



<style>

    .img{

        width:100%;

        height: 100px;

    }

    .number{
        font-size: 60px;
        font-weight: bold;
    }

 







</style>



<div class="container-fluid" style="margin:0; padding:0; ">
        <img src="images/banner22.jpeg"  class="img-responsive" alt="" style="width:100%;height:10%; ">
</div>

        <div class="container ">



        <div class="row ">

        <div class="my-4 col-md-4 col-sm-6 col-xs-6" >

                <div class="card"  style="background-color:#445174; border-radius:15px; padding: 2% 2%;">

                    <center>
                        <h1 class="text-light"> Tirada Guud <br>  </h1>
                        <span class="number text-info"><?php infected();?></span>
                    </center>

                </div>

            </div>

            <div class=" my-4 col-md-4 col-sm-6 col-xs-6">

            <div class="card  "style="background-color:#445174; border-radius:15px; padding: 2% 2%;">

                    <center>
                    <h1 class="text-light"> Tirada Bogsatay <br>  </h1>
                        <span class="number text-success"><?php  recovered();?></span> 
                    </center>

                </div>

            </div>

            <div class="col-md-4 my-4 col-sm-6 col-xs-6">

            <div class="card  " style="background-color:#445174; border-radius:15px; padding: 2% 2%;">

                    <center>
                        <h1 class="text-light"> Tirada uu haayo <br>   </h1>
                        <span class="number text-primary"><?php  active(); ?></span>
                    </center>

                </div>

            </div>

            <div class="col-md-4 my-4 col-sm-6 col-xs-6">

    

            </div>

            <div class="col-md-4 my-4 col-sm-6 col-xs-6">

            <div class="card  " style="background-color:#445174; border-radius:15px; padding: 2% 2%;">

                    <center>
                        <h1 class="text-light"> Tirada Dhimatay <br> </h1>
                        <span class="number text-info"><?php death();?></span>
                    </center>

            </div>

        </div>

        </div>

















            <div class="row">



  

            <div class="col-md-4 my-4">
            <div class="card  " style="background-color:#445174; border-radius:15px; padding: 2% 2%;">
            <h3 class="text-light">Gobolada uu sameeyay</h3>
            <div class="table-responsive">
                <table class="table table-striped table-hover" style="border:0;" >
                    <thead >
                        <tr class=" text-light"  style="border:0; " >
                        <th style="border-color:#9d9d9d " >Gobolka</th>
                        <th style="border-color:#9d9d9d ">+</th>
                        <th  style="border-color:#9d9d9d "> Tirada guud</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php display_state();?>
                    </tbody>
                </table>
            </div>
            </div>


                


 

                

            </div>

            <div class="col-md-8 my-4">
            <div class="card  " style="background-color:#445174; border-radius:15px; padding: 2% 2%;">
            <h3 class="text-light">Lasts Posts</h3>

            <?php display_post(); ?>

            <a href="news" class="btn btn-default btn-block text-light">More</a>
            </div>




                



            </div>

        </div>       



</div>

<?php require('includes/footer.php'); ?>