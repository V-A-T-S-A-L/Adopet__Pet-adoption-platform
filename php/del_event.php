<?php 
    session_start();
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "DELETE FROM events WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        header("Location: events.php");
    }
?>