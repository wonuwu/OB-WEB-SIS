<?php 
    include("server.php");

    $id = $_GET['id'];

    $removeStudent = "DELETE FROM student WHERE id = '$id'";
    $result = mysqli_query($db,$removeStudent);

    echo "<script>alert('Student Removed'); location.href='index.php'</script>";
?>