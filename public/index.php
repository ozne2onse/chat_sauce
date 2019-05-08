<?php require_once 'php/validate.php';?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up Form Concept</title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="css/style.css">


<style media="screen">
  .alert{
  padding:20px;
  border: 2px solid red;
  border-radius: 2px;
  background-color: rgba(255, 0, 0, 0.5);
  width: 30%;
  color: white;
  margin-top: 2rem;
position: absolute;
left: 32.5%;
  }

  .cotn_principal{
    background-color: #fff !important;
  }


</style>

</head>

<body>
  <div class="cotn_principal">
<div class="cont_centrar">

<!-- custom display for error -->

<?php if (@$_GET['pass']): ?>
  <div class="alert">
   <p><?php echo 'Password do not match'; ?></p>
  </div>
<?php endif; ?>

<!-- End -->

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">

        <h2>LOGIN</h2>
  <p>Sign in to start using our simple chatsauce.</p>
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>


  <p>Sign up to experience our amazing simple chatsauce.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>


    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>

    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" accept-charset="utf-8">
  <div class="cont_form_login">
  <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
  <h2>LOGIN</h2>
    <input type="text" placeholder="Username"  name="sign_user" value="<?php echo $sign_user; ?>" required/>
    <input type="password" placeholder="Password" name="log_pass" value=""  required/>
    <button name="log_in" class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
</form>
<form class="" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

  <div class="cont_form_sign_up">
    <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>

    <h2>SIGN UP</h2>
    <input type="text" placeholder="Username" name="sign_user" value="<?php echo $sign_user; ?>" required/>
    <input type="password" id="sign_user" placeholder="Password"  name="sign_pass" value="<?php echo $sign_pass; ?>"/>
    <input type="password" id="pass" placeholder="Confirm Password" name="sign_conpass" value="<?php echo $sign_conpass; ?>" required />
    <button name="sign_up" id="conpass" class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
  </div>
</form>
    </div>

  </div>
 </div>
</div>

    <script src="js/index.js"></script>

</body>
</html>
