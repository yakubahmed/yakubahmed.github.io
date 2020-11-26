<?php require('includes/header.php');?>
<?php 

function display_state(){
    global $con;
    $stmt  = "SELECT * FROM view_tbl_cases_view ORDER BY (cases_state_id) DESC ";
    $result = mysqli_query($con, $stmt);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['cases_state_id'];
        $state_name = $row['state_name'];
        $new = $row['new'];
        $total = $row['Total'];

        echo "
        <tr>
            <td>$id</td>
            <td>$state_name</td>
            <td>$new</td>
            <td>$total</td>
        </tr>
        ";
    }
}

?>

<div class="container">
    <div class="table-repsponsive my-4">
    <table class="table table-striped table-bordered " id="myTable">
        <thead>
            <tr class="">
            <th>#</th>
            <th>State</th>
            <th>New</th>
            <th>Effected</th>
            </tr>
        </thead>
        <tbody>
            <?php display_state();?>
        </tbody>
    </table>
    </div>
</div>

<script >
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<?php require('includes/footer.php'); ?>