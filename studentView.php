<?php
include("server.php");

if (empty($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Student Info</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS-->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>
    <main>
        <?php
        $id = $_GET['id'];

        $query = "SELECT * FROM student WHERE id = '$id'";
        $result = mysqli_query($db, $query);

        $row = mysqli_fetch_assoc($result);
        ?>

        <a href="javascript:history.back()" class="back-btn">Back</a>
        <a href="studentEdit.php?id=<?php echo $id ?>" class="add-btn">Edit Info</a>

        <div class="row">
            <div class="col-img">
                <div class="img-container">
                    <img src="images/<?php echo $row['studentImg'] ?>" class="student-img">
                </div>
            </div>

            <div class="col-center">
                <label for="">Name</label>
                <input type="text" name="firstName" placeholder="First Name" value="<?php echo $row['firstName'] ?>" readonly>

                <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" readonly>

                <label for="course">Course</label>
                <input type="text" name="course" value="<?php echo $row['course'] ?>" readonly>


                <label for="college">College</label>
                <input type="text" name="college" id="college-input" value="<?php echo $row['college'] ?>" readonly>

            </div>

            <div class="col-right">
                <label for="year">Year</label>
                <input type="text" name="year" value="<?php echo $row['year'] ?>" readonly>


                <label for="gender">Gender</label>

                <input type="text" name="gender" value="<?php echo $row['gender'] ?>" readonly>



            </div>
        </div>
    </main>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $('#file-attach').bind('change', function() {
            var fileName = '';
            fileName = $(this).val();
            $('#attached-file-selected').html(fileName);
        });
    </script>

</body>

</html>