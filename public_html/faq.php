<?php  include('includes/header.php'); ?>
<style>
    .accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>

<?php

  function display_faq(){

    global $con;

    $stmt = "SELECT * FROM tbl_faql ";

    $result  = mysqli_query($con,$stmt);

    while($row = mysqli_fetch_assoc($result)){

      $id = $row['faql_id'];

      $question = $row['question'];

      $answer = $row['answer'];

  

      echo "

    <button class='accordion bg-info text-light'>$question</button>
<div class='panel'>
  <p>$answer.</p>
</div>
      

      ";

    }

  

  }

?>

<div class="container">



<div class="row">
<div class="col-md-12 my-4">


<?php display_faq(); ?>

  </div>
</div>



<div class='col-md-12' style='width:100%; height:30%; '>
    
</div>
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

<?php include('includes/footer.php'); ?>