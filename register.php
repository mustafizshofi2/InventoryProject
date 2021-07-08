<?php


?>


<html>

    <head>
        <title>Registration Form</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="CSS/style.css" rel="stylesheet" type="text/css">
        <link href="CSS/register.css" rel="stylesheet" type="text/css">

    </head>

    <body>

      <form method="post" action="register.php" enctype="multipart/form-data">

           <div class="container">

                  <h1>Registration Form</h1>
               <hr>

                  <div>
                      <label for="name">Your Name<span>*</span></label>
                      <input type="text" id="name"  name="name" placeholder="Enter your name" required>
                  </div>

                  <div>
                      <label for="nam">Your UserName<span>*</span></label>
                      <input type="text" id="uname"  name="uname" placeholder="Enter your username" required>
                  </div>

                  <div>
                      <label for="email">Your Email</label>
                      <input type="text" id="email"  name="email" placeholder="Enter your Email" >
                  </div>

                  <div>
                      <label for="pass">Password<span>*</span></label>
                      <input type="password" id="pass"  name="pass" placeholder="Enter your Password" required>
                  </div>

                  <div>
                      <label for="r_pass">Confarm Password<span>*</span></label>
                      <input type="password" id="r_pass"  name="rpass" placeholder="Confarm Your Password" required>
                  </div>

                  <div style="text-align: center">
                     <p><span>***</span>By creating an account you agree to our Terms and Privacy</p>
                  </div>

                  <div style="text-align: center; padding: 20px;">
                      <input type="submit" placeholder="Submit" class=" btn btn-success">
                  </div>

                  <div style="text-align: center">
                      <p>Already have an account <a href="login.php">Sign in</a> </p>
                  </div>

           </div>

      </form>

    </body>











</html>