<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form w/o DB</title>
  <link href='http://fonts.googleapis.com/css?family=Nunito:400,300'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>
   <div class="layer">
      <div class="flex-container">
        <h1>Please register to join our lovely bootcamp :)</h1>

         <div class="main">
            <form class="input-form" action="process.php" method="POST">
              <fieldset>
               <div class="input-fields">
                 <label class="required">
                  <input type="text" name="email" placeholder="email" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'email';}"  ></label><br>
                  <input id="first_name" type="text" name = "first_name"  placeholder="first_name" onfocus="this.placeholder = ''"; onblur="if (this.placeholder == '') {this.placeholder = 'first_name';}"><br>
                  <input id="last_name" type="text" name="last_name" placeholder="last_name" onfocus="this.placeholder = ''"; onblur="if (this.placeholder == '') {this.placeholder = 'last_name';}"><br>
                  <input id="password" type="text" name = "password" placeholder="password" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Password';}"><br>
                  <label class="required">
                  <input type="text" name="confirm_password" class="required"  placeholder="confirm_password" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Confirm Password';}"></label><br>
                  <label class="required">
                  <input type="text" name="birth_date" class="required" placeholder="birth_date" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Birth Date';}"></label><br>
               <div class="submit">
                  <input type="submit" value="Submit">
                  <button><a href="logout.php">Destroy session</a></button>
               </div>
         </div>
       </fieldset>
         </form>

         <?php
         var_dump($_SESSION['test']);

            if($_SESSION['first_name'] =='numeric') {?>
              <script>
              $(document).ready(function() {
              $('#first_name').val("No numeric values allowed.");
            });
              </script>

           <?php }

           if($_SESSION['password'] =='error') {?>
             <script>
             $(document).ready(function() {
             $('#password').val("password too short");
           });
             </script>

          <?php } ?>

      </div><!--end of main-->
   </div><!--end of flex container-->
   <div class="clear"> </div>
   </div><!--end of layer-->
</body>
</html>
