<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/alogin.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
<?php

if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]!=""){
     echo "<div style='margin-top:10px;' class='alert alert-danger' role='alert'>";
      echo $_REQUEST["msg"];
    echo "</div>";
}
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="assets/img/register.svg" alt="">
            </div>
            <div class="col-md-6 col-sm-12 jumbotron align-middle">
                <form action="adashboard.php" method="post">
                    <div class="form-group">
                        <label>LOGIN ID</label>
                        <input type="text" class="form-control" name = "erpid" placeholder="Erp id">
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" class="form-control" name = "password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>