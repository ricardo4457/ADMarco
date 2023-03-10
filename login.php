<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  <link rel="stylesheet" href="css/Login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a>Iniciar  Sess??o </a></h1> 
   
        </div>
        <div class="box-root flex-flex flex-justifyContent--center error">
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
            

              <form method="post" id="stripe-login">

              <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email"  id="email"    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="Coloque o seu Email">
                </div>

                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                  </div>
                  <input type="password" name="password" id="password" placeholder="Coloque a sua Password" minlength="6">
                </div>
             
                <div class="field padding-bottom--24">
                <button class="field padding-bottom--24" style="background: rgb(255, 0, 0);" type="submit">Login</button>
                </div>
                <div class="field padding-bottom--24">
                <button class="field padding-bottom--24" style="background: rgb(255, 0, 0);" href="index.php"  type="submit" >Voltar</button>   
                </div>
                        
               
                     
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>N??o t??m conta? <a style="color: rgb(255, 0, 0); cursor: pointer;" href="signup.html" > Criar Conta</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- partial -->
  
</body>
</html>
