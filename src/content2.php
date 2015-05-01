<?php require_once( 'auth.php'); $_SESSION['count']++?>
<!DOCTYPE html>
<html lang="en">
   <title>Login</title>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../src/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../src/css/dataTables.bootstrap.css">
      <script type="text/javascript" charset="utf8" src="../src/scripts/jquery.js"></script>
      <script type="text/javascript" charset="utf8" src="../src/scripts/bootstrap.js"></script>
      <script type="text/javascript" charset="utf8" src="../src/scripts/jquery.dataTables.js"></script>
      <script type="text/javascript" charset="utf8" src="../src/scripts/dataTables.bootstrap.js"></script>
   </head>
   <body>
      <div class='container'>
         <div class="row">
            <div class="col-md-12">
              <p class="lead"><?php  echo "Hello ", $_SESSION['username'], " you have visited this page ", $_SESSION['count'], " times.  Click <a href='logout.php'>here</a> to logout"; ?></p>
            </div>
         </div>
      </div>
   </body>
</html>