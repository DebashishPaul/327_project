<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome Loco</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: aliceblue;
        }

        .lion {
            background-color: aliceblue;
            height: 5000px;
        }

    </style>
</head>

<body>
    <!--
    <div class="logo">

        <a href="index.html"><img src="loco_icon.png" alt="Smiley face" height="82" width="82"></a>
    </div>
-->
    <div class="lion">
        <div class="header">
            <h2>Welcome LOCO</h2>
        </div>
        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
                </h3>
            </div>
            <?php endif ?>

            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>

        </div>


        <h2 style="margin left:400px;">Alls Posts</h2>
    </div>
</body>

</html>
