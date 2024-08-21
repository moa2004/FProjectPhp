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
    <title>Contact</title>
</head>
<body>
   <!-- start header  logo  nav  btn-icon -->
      <?php
    require "static_content.php";
    ?>
    <!-- end header -->
<!-- end header -->
<!-- start bg-contact -->
<section class="bg-contact">
 <h3>Contact Us</h3>
 <h6>Home-Contact Us</h6>   
</section>
<!-- end bg-contact -->


<!-- start form-contact -->
 <section class="form-contact-map">
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1728375.6575011571!2d30.466232321875005!3d32.2114054710939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1704102377049!5m2!1sar!2seg"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-form">

        <div class="card-contact">
            <ul>
                <li><span><i class="fa-solid fa-house"></i></span>
                <span>California united state</span>
                <p>Santa monical bulleted</p>
                </li>

                <li>
                    <span><i class="fa-solid fa-headphones"></i></span>
                    <span>00 (020)15233842</span>
                    <p>men to fri 9 to 6pm</p>
                </li>
            
                <li>
                   <span><i class="fa-solid fa-envelope"></i></span> 
                   <span>Support@colorl.com</span>
                    <p>send us your query any time</p>
                </li>
                  
            </ul> 
        </div>
        <div class="card-contact-intput">
            <input type="text" placeholder="Enter your name">
            <input type="email" placeholder="Enter email address">
            <input type="text" placeholder="Enter Subject">
        </div>
        <div class="card-contact">
            <textarea name="" id="" cols="60" rows="9" placeholder="Enter Message"></textarea>
        </div>
    </div>
    <a href="contact.html" class="btn-contact">Send Message</a>
 </section>   
<!-- end form-contact-map -->

<!-- start footer -->
<?php
require "footer.php";
?>
    <div class="devolper">
        <p>Copyright @2023 All right reeved . this template is made with🤍by <span>Moaz El Sabagh</span> </p>
    </div>

</body>
</html>