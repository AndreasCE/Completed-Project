<?php 
include "../function/db_reservasi.php";
if(isset($_GET['deletes'])){
    $id=$_GET['deletes'];
    $delete = "DELETE FROM booking where id_user = $id ";
    $hasil = mysqli_query($conn,$delete);
    
    if($hasil){
        header("Location : index.php");
        $_SESSION['dlt'] = "Delete successfuly";
    }
    else{
        die(mysqli_error($conn));
    }
}
?>