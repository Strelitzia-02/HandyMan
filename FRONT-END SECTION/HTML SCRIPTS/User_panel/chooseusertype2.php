<?php
session_start();
if (isset($_SESSION['uID'])) {
    header("location:./index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/chooseUserTypeDesign.css">
    <title>Choose Platform</title>
</head>

<body>
    <header>
        <div class="main-page">
            <div class="company-logo">
                <!--<img src="hANDYman.png">-->
            </div>
           
        </div>
        <!--Changed 2.0-->
        <div class="platform-selection">
            <h2>Platform Selection</h2>
            <a href="userSignup.php"><button type="button" class="btn btn-dark btn-lg">Customer Platform</button></a>
            <a href="../Employee_panel/employee registration.php"><button type="button" class="btn btn-dark btn-lg">Employee Platform</button></a>
        </div>
        <!--Changed 2.0-->

        

        <!-- <button type="button" class="btn btn-dark btn-lg">Customer Platform</button>
        <button type="button" class="btn btn-dark btn-lg">Employee Platform</button> -->
      
        <!--platform choosing option-->
        <!-- <div class="button">
            <a href="userSignup.php" class="btn">Customer Platform</a>
            <a href="../Employee_panel/employee registration.php" class="btn">Employee Platform</a>
        </div> -->
        
    </header>
</body>

</html>