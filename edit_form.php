<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://kit.fontawesome.com/6763a3010a.js" crossorigin="anonymous"></script>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- <script src="https://kit.fontawesome.com/6763a3010a.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->


<style media="screen">
.register{
  background: -webkit-linear-gradient(left, #3931af, #00c6ff);
  margin-top: 3%;
  padding: 3%;
}
.register-left{
  text-align: center;
  color: #fff;
  margin-top: 4%;
}
.register-left input{
  border: none;
  border-radius: 1.5rem;
  padding: 2%;
  width: 60%;
  background: #f8f9fa;
  font-weight: bold;
  color: #383d41;
  margin-top: 30%;
  margin-bottom: 3%;
  cursor: pointer;
}
.register-right{
  background: #f8f9fa;
  border-top-left-radius: 10% 50%;
  border-bottom-left-radius: 10% 50%;
}
.register-left img{
  margin-top: 15%;
  margin-bottom: 5%;
  width: 25%;
  -webkit-animation: mover 2s infinite  alternate;
  animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
  0% { transform: translateY(0); }
  100% { transform: translateY(-20px); }
}
@keyframes mover {
  0% { transform: translateY(0); }
  100% { transform: translateY(-20px); }
}
.register-left p{
  font-weight: lighter;
  padding: 12%;
  margin-top: -9%;
}
.register .register-form{
  padding: 10%;
  margin-top: 10%;
}
.btnRegister{
  float: right;
  margin-top: 10%;
  border: none;
  border-radius: 1.5rem;
  padding: 2%;
  background: #0062cc;
  color: #fff;
  font-weight: 600;
  width: 50%;
  cursor: pointer;
}
.register .nav-tabs{
  margin-top: 3%;
  border: none;
  background: #0062cc;
  border-radius: 1.5rem;
  width: 28%;
  float: right;
}
.register .nav-tabs .nav-link{
  padding: 2%;
  height: 34px;
  font-weight: 600;
  color: #fff;
  border-top-right-radius: 1.5rem;
  border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
  border: none;
}
.register .nav-tabs .nav-link.active{
  width: 100px;
  color: #0062cc;
  border: 2px solid #0062cc;
  border-top-left-radius: 1.5rem;
  border-bottom-left-radius: 1.5rem;
}
.register-heading{
  text-align: center;
  margin-top: 8%;
  margin-bottom: -15%;
  color: #495057;


}
.align{
  /* align: right; */



}

body{
  background-color: #808080;
}
</style>
</head>

<body>
<?php
/** database connection **/
require ("functions.php");

// session_start();
//echo "Hello ".$_SESSION["user_name"];

// if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
// } else {
//   header ("Location: index.php");
// }
$connect = dbConnect();

$id = $_REQUEST['id'];
// echo $username;

$editform_data_sql = "SELECT * FROM `student_info` WHERE `student_info`.`id` = '$id'";
//var_dump($editform_data_sql);

$edit_data = $connect->query($editform_data_sql);
//var_dump($edit_data);

$data = $edit_data->fetch_assoc();


 ?>

 
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away to edit a student</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Edit Student</h3><a  href="atables.php" ><i class="fa fa-ban align" aria-hidden="true"></i></a></h3>
                                <form class="" action="edit_action.php" method="post" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="erpid" type="text" class="form-control" placeholder=" ERP ID*" value="<?php echo ($data['erpid']); ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input name="firstname" type="text" class="form-control" placeholder="First Name *" value="<?php echo ($data['firstname']); ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input name="lastname" type="text" class="form-control"  placeholder="Last Name *" value="<?php echo ($data['lastname']); ?>" required />
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control"  placeholder="Password *" value="<?php echo ($data['password']); ?>" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="M" checked>
                                                    <span> Male </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="F">
                                                    <span>Female </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="Cannot Say">
                                                    <span>Cannot Say </span>
                                                  
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" name="email" value="<?php echo ($data['email']); ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Phone number *" value="<?php echo ($data['phone']); ?>" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="update"/>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

<!-- //////////////////////////////////////////////////////////////////////////////////// -->

<!-- <div class="container register"> -->

            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          </body>

</html>
