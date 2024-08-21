<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- google font -->
    <link rel="stylesheet" href="Style/all.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="Style/Style.css">
    <!-- file css -->
    <title>page 2 Register</title>
</head>
<body>
 <!-- start header  logo  nav  btn-icon -->
 
    <!-- start header  logo  nav  btn-icon -->
    <?php
    require "static_content.php";
    ?>
    <!-- end header -->
<!-- start bg-contact -->
<section class="bg-contact">
    <h3>Register</h3>
    <h6>Home-Register</h6>   
   </section>
   <!-- end bg-contact -->
   <section class="page-form">
    <div class="createAcount">
        <h3>Already have an Account</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora necessitatibus inventore sed sequi, ad aspernatur!</p>
        <a href="page2.html" class="btn-page">Login Now</a>
    </div>  
    <div class="Login">
        <h3>Create An Account</h3>
        <input type="text" placeholder="Username">
        <input type="text" placeholder="Enter Address">
        <input type="password" placeholder="password">
        <input type="password" placeholder="Confirm password">
        <div class="check-box">
            <input type="checkbox" id="checkbox-login" ><label for="checkbox-login" >Keep me logged in</label>
        </div>
        <a href="home.html" class="btn-register">Log in</a>
        </div>
   </section>
   <!-- end form -->

   <!-- start footer -->
   <?php
require "footer.php";
?>
    <div class="devolper">
        <p>Copyright @2023 All right reeved . this template is made with🤍by <span>Moaz El Sabagh</span> </p>
    </div>




</body>
</html>