<?php
$pro_id = $_GET['pro_id'];
require '../connect.php';
$sql = "DELETE FROM product WHERE pro_id='$pro_id'";
$result = $con->query($sql);
if(!$result){
    echo "<script>alert('Error deleting user');</script>";
} else {
    echo "<script>window.location.href='index.php?page=product'</script>";
}
?>