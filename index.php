<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form w/o DB</title>
  <link href='http://fonts.googleapis.com/css?family=Nunito:400,300'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
                  <input type="text" name="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}"></label><br>
                  <input id="first_name" type="text" name = "first_name"  value="first_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"><br>
                  <input id="last_name" type="text" name="last_name" value="last_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"><br>
                  <input id="password" type="text" name = "password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><br>
                  <label class="required">
                  <input type="text" name="confirm_password" class="required"  value="confirm_password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}"></label><br>
                  <label class="required">
                  <input type="text" name="birth_date" class="required" value="birth_date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Birth Date';}"></label><br>
               <div class="submit">
                  <input type="submit" value="Submit">
               </div>
         </div>
       </fieldset>
         </form>

         <?php

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
<script>
  alert($('#first_name').val());
</script>
