<?php require('includes/header.php');?>

<?php 

function timeago($date) {
    date_default_timezone_set('Africa/Nairobi'); 
    $timestamp = strtotime($date);	
    
    $strTime = array("ilbariqsi", "daqiiqo", "saac", "maalin", "bil", "sanad");
    $length = array("60","60","24","30","12","10");

    $currentTime = time();
    if($currentTime >= $timestamp) {
         $diff     = time()- $timestamp;
         for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
         $diff = $diff / $length[$i];
         }

         $diff = round($diff);
         return $diff . " " . $strTime[$i] . " ka hor ";
    }
 }

function display_post1(){
    global $con;
    $val = $_POST['search'];
    $stmt = "SELECT * FROM `tbl_post` WHERE title LIKE '%$val%' OR content LIKE '%$val%' ORDER BY (post_id) DESC ";
    $result = mysqli_query($con,$stmt);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $postid = $row['post_id'];
            $title = $row['title'];
            $content = $row['content'];
            $date =$row['date'];
            $source = $row['source_article'];
            $time = timeago($date);
            echo "
            <div class='card bg-light my-3' style='width:70%; margin: 0 auto; min-width:400px;'>
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
    }else{
        echo " <div class='alert alert-info' style='width:70%; margin: 0 auto; min-width:400px;'>No Matching Record</div> ";
    }
}

function display_post(){
    global $con;
    $stmt = "SELECT * FROM `tbl_post` ORDER BY (post_id) DESC ";
    $result = mysqli_query($con,$stmt);
    while($row = mysqli_fetch_assoc($result)){
        $postid = $row['post_id'];
        $title = $row['title'];
        $content = $row['content'];
        $date =$row['date'];
        $source = $row['source_article'];
        $time = timeago($date);
        echo "
        <div class='card bg-light my-3' style='width:70%; margin: 0 auto; min-width:400px;'>
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

<style>
    .search{
        width:70%; 
        
        margin: 0 auto;
        min-width:400px;
        margin-top:2%; 
        border-radius: 0;
        border: 1px solid darkblue;
    }
</style>
<div class="container">
<div class="row">
<div class="form-group col-md-12" >

    <form action="" method="post">
        <div class="input-group" style="width:70%; margin: 0 auto; margin-top:2%;">
            <input type="text" name='search' class="form-control" style="height:45px;" placeholder="search.." required autocomplete="off" autofocus>
            <div class="input-group-append">
                <span class="input-group-text">
                    <button class="btn btn-sm btn-default" name="btn_search"> <span class="fa fa-search"></span> </button>
                </span>
            </div>
        </div>
    </form>
</div>
<?php

    if(isset($_POST['btn_search'])){
        display_post1();
    }else{
        display_post();
    }


?>


</div>
</div>

<script >
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<?php require('includes/footer.php'); ?>