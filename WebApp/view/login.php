
<?php
    session_start();
    include_once('../db.inc');
    ob_start();
    
?>
<head>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>


 <body>

     <?php 
            //foreach($_POST as $value){
              //echo $value;}
     
    if ($_POST['yourEmail'] || $_POST['regpassword'] || $_POST['verifypassword']){
        
        //echo "you're in";
        $email = $_POST['yourEmail'];
        $regpassword = $_POST['regpassword'];
        $verifypassword = $_POST['verifypassword'];
        
        if ($verifypassword != $regpassword)
            echo '<center>passwords do not match, try again</center>';
        else
        {
            $sql = 'insert into users (userEmail,password) values ("'.$email.'", "'.$regpassword.'")';
            
        //echo $sql;
         $connection = mysqli_connect(DB_SERVER,DB_UN, DB_PWD, DB_Name);
        //$connection = mysqli_connect('localhost:8889','root', 'root', 'login');
        $result = mysqli_query($connection, $sql);
            if (!$result)
                echo '<div class="bg-warning" ><center>duplicate found</center></div>'; 
        }
    }
//echo $_POST['email'];
checkLogin($_POST['email'], $_POST['password']);
 function checkLogin ($user, $password){
     // echo 'function '.$user;
     //$connection = mysqli_connect(DB_SERVER,DB_UN, DB_PWD, DB_Name);
    $connection = mysqli_connect('localhost:8889','root', 'root', 'login');
     if ($connection)
     {
         $sql = 'select userEmail from users where (useremail = "'.$user.'") AND (password = "'.$password.'")';
        // echo $sql;
         $result = mysqli_query($connection, $sql);
         $row = mysqli_fetch_assoc($result);
         $_SESSION['userLogin'] = $row;
         
         
         //echo $row['userEmail'];
     }
     
     else 
         echo 'you not connected';
 }
?>
  
       
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
        <?php
        //echo 'Session: '.$_SESSION['userLogin'];
        if ($_SESSION['userLogin']){
            //echo "logged in or something like that";
            header('Location: https://goaptaris.com/');
            exit; 
        }
        else{
            echo '
            
              <section class="login-form">
        <form method="post" action="login.php" role="login">
            <div class="logo">
				<a href="https://goaptaris.com/"><img src="https://goaptaris.com/wp-content/themes/aptaris/images/logo.png" class="img-responsive" alt="" ></a>
			</div>
            <div align="center">
          <input type="email" name="email"  required class="form-control input-lg" placeholder="Email" />
          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
            
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                </div>
          <div align="center">
            <a href="./register.php">Create account</a> or <a href="./passwordreset.html">reset password</a>
          </div>
          
        </form>
        
        <div class="form-links" align="center">
          <a href="https://goaptaris.com"><span color="red">www.goaptaris.com</span></a>
        </div>
      </section> ';
        
        }
        ?> 
      </div>
      
      <div class="col-md-4"></div>
      

  </div>   
</div>
     </body>
