<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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

$editform_data_sql = "SELECT * FROM `event_info` WHERE `event_info`.`id` = '$id'";
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
                        <p>You are 30 seconds away to insert a Event</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Add Event</h3>
                                <form class="" action="cadd_actions.php" method="post" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Event Name *" value="<?php echo ($data['name']); ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input name="date" type="date" class="form-control"  placeholder="Date *" value="<?php echo ($data['date']); ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input name="instructor" type="text" class="form-control"  placeholder="Instructor *" value="<?php echo ($data['instructor']); ?>" required/>
                                        </div>
                                    
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <input type="submit" class="btnRegister"  value="Update"/>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          </body>

</html>
