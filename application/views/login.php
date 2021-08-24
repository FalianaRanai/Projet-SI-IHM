<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="login.css" rel="stylesheet">
    <link href="<?php echo css_loader("login");?>" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Sign In </h2>

       

        <!-- Login Form -->
        <form>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Username">
          <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

      </div>
    </div>
  </body>
</html>