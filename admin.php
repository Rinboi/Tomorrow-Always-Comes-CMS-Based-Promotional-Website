<?php
    session_start();
    include_once 'serverside/variables.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $websiteTitle; ?> - Admin Login</title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
    <style>
        .login {
  position: relative;
  top: 50%;
  margin-left: auto;
  margin-right: auto;
  display: block;
  width: 20rem;
  height: 20rem;
  padding: 3em;
  background: hsla(255,255%,255%,1);
  border-radius: 50%;
  overflow: hidden;
  transition:all 1s ease;
}
.login:hover > .header, .login.clicked > .header {
  width: 2rem;
}
.login:hover > .header > .text, .login.clicked > .header > .text {
  font-size: 1rem;
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
.login.loading > .header {
  width: 20rem;
  transition:all 1s ease;
}
.login.loading > .header > .text {
  display: none;
}
.login.loading > .header > .loader {
  display: block;
}
.header {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  width: 20rem;
  height: 20rem;
  background: hsla(0, 5%, 0%, 1);
  transition: width 0.5s ease-in-out;
}
.header > .text {
  display: block;
  width: 100%;
  height: 100%;
  font-size: 2rem;
  text-align: center;
  line-height: 20rem;
  color: hsla(255,255%,255%,1);
  transition: all 0.5s ease-in-out;
}
.header > .loader {
  display: none;
  position: absolute;
  left: 5rem;
  top: 5rem;
  width: 10rem;
  height: 10rem;
  border-left: 10px solid hsla(255, 255%, 255%, 1);
  border-bottom:10px solid hsla(255,255%,255%,1);
  border-right:10px solid hsla(255,255%,255%,1);
  border-top: 8px solid hsla(255,255%,255%,1);
  border-radius: 50%;
  box-shadow:inset 2px 2px 2px 2px hsla(0, 5%, 0%, 1);
  animation: loading 2s linear infinite;
}
.header > .loader:after {
  content: "";
  position: absolute;
  left: 4.15rem;
  top: -0.5rem;
  width: 1rem;
  height: 1rem;
  background: hsla(1, 75%, 55%, 1);
  border-radius: 50%;
  border-right: 1px solid hsla(1, 75%, 55%, 1);
  
}
.header > .loader:before {
  content: "";
  position: absolute;
  left: 3.4rem;
  top: -0.5rem;
  width: 0;
  height: 0;
  border-right: 1rem solid hsla(1, 75%, 55%, 1);
  border-top: 0.5rem solid transparent;
  border-bottom: 0.5rem solid transparent;
}

@keyframes loading {
  50% {
  border-left: 10px solid hsla(1, 95%, 25%, 1);
  border-bottom:10px solid hsla(1, 95%, 25%, 1);
  border-right:10px solid hsla(1, 95%, 25%, 1);
  border-top:8px solid hsla(1, 95%, 25%, 1);  
  }

  100% {
    transform: rotate(360deg);
  }
}
.form {
  margin: 0 0 0 2rem;
  padding: 0.5rem;
}

.input {
  display: block;
  width: 100%;
  font-size: 2rem;
  padding: 0.5rem 1rem;
  box-shadow: none;
  border-color: hsla(0, 5%, 0%, 1);
  border-width: 0 0 3px 0;
  transition: all .5s ease-in;
  outline:transparent;
}
.input + .input {
  margin: 10px 0 0;
}
.input:focus {
  border-bottom: 3px solid hsla(1, 75%, 55%, 1);
}

.btn {
  position: absolute;
  right: 7.8rem;
  bottom: 3rem;
  width: 4rem;
  height: 4rem;
  border: none;
  background:#000000;
  font-size: 18px;
  border: none;
  transition: all 0.3s ease-in-out;
}
.btn:after {
  content: "▶";
  position: absolute;
  left: 1.4rem;
  top: 1rem;
  width: 0;
  height: 0;
  border-left: 1.6rem solid hsla(1, 75%, 55%, 1);
  border-top: .8rem solid transparent;
  border-bottom: .8rem solid transparent;
  transition: border 0.3s ease-in-out 0s;
}
.btn:hover, .btn:focus, .btn:active {
  outline: none;
  
}
.btn:hover:after, .btn:focus:after, .btn:active:after {
  border-left-color: hsla(0, 5%, 0%, 1);
}
    </style>
</head>
<body>
    <?php
        include_once "layouts/header.php";
    ?>

    <?php
        if(isset($_SESSION['admin_logged_in'])){
    ?>
        <div id="admin_login">
            <div class="container">
                <form action="serverside/logout.inc.php" method="POST">
                    <div class="form_inner">
                        <h2>Exit Admin Mode</h2>
                        <input type="submit" name="submit" value="Log Out">
                    </div>
                </form>
            </div>
        </div>
    <?php
        }
        else{
    ?>

        <div id="admin_login">
            <div class="container">
                <form action="serverside/verify.php" method="POST">
                    <div class="form_inner">

                    <?php
                        if ( isset( $_GET['login'] ) && !empty( $_GET['login'] ) ){
                            if($_GET['login'] == "empty"){
                                echo "
                                    <div class='admin_login_error'>
                                        <p>Warning: User Name or Password is empty</p>
                                    </div>
                                ";
                            }
                            else if($_GET['login'] == "error"){
                                echo "
                                    <div class='admin_login_error'>
                                        <p>Warning: User Name or Password is incorrect</p>
                                    </div>
                                ";
                            }
                        }
                    ?>
                  
                  <div class="login">
  <header class="header">
    <span class="text">CLICK TO LOGIN</span>
    <span class="loader"></span>
  </header>
    <input class="input" type="text" name="username" placeholder="Username">
    <input class="input" type="password" name="password" placeholder="Password">
    <input class="btn" type="submit" name="submit" value="▶">
</div>
                    </div>
                </form>
            </div>
        </div>

    <?php
        }
    ?>

    <?php
        include_once "layouts/footer.php";
    ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
  $('.input').on('focus', function() {
    $('.login').addClass('clicked');
  });
  $('.login').on('submit', function(e) {
    e.preventDefault();
    $('.login').removeClass('clicked').addClass('loading');
  });
  $('.resetbtn').on('click', function(e){
      e.preventDefault();
    $('.login').removeClass('loading');
  });
});
    </script>
</body>
</html>