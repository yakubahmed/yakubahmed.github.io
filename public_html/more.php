<?php require('includes/header.php');?>



<?php 



function timeago($date) {

    date_default_timezone_set('Africa/Nairobi'); 

    $timestamp = strtotime($date);	

    

    $strTime = array("seconds", "minutes", "hour", "day", "month", "year");

    $length = array("60","60","24","30","12","10");



    $currentTime = time();

    if($currentTime >= $timestamp) {

         $diff     = time()- $timestamp;

         for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {

         $diff = $diff / $length[$i];

         }



         $diff = round($diff);

         return $diff . " " . $strTime[$i] . " ago ";

    }

 }





function display_post(){

    global $con;
    $id = $_GET['id'];
    $stmt = "SELECT * FROM `tbl_post` WHERE post_id =$id ";

    $result = mysqli_query($con,$stmt);

    while($row = mysqli_fetch_assoc($result)){

        $postid = $row['post_id'];

        $title = $row['title'];

        $content = $row['content'];

        $date =$row['date'];

        $source = $row['source_article'];

        $time = timeago($date);

        echo "

        <div class='card text-light my-3' style='width:70%; margin: 0 auto; min-width:400px; background-color:#445174; border-radius:15px; padding: 2% 2%;'   >

            <div class='card-body'>

                <p class='text-info'>$time</p>

                <h5>$title</h5>

                <hr>

                $content

                <p> <a href='$source' class='btn btn-sm btn-primary'>source</a> </p>

            </div>

        </div>

        ";

    }

}





?>


<div class="container">

<div class="row">


<?php

display_post();





?>





</div>

</div>



<script >

$(document).ready( function () {

    $('#myTable').DataTable();

} );

</script>



<?php require('includes/footer.php'); ?>