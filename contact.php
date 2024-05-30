<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <!-- Header -->
    <!-- <div class="header">
        <h1>Auto <span>Glass</span></h1>

        <div class="header-linkes">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="services.html">Services</a>
            <a href="#">Contact</a>
            <button>Sign in </button>
        </div>
    </div> -->
    <div class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores placeat ipsum sapiente unde nam ratione
                ipsam consequatur sit magni reprehenderit, deserunt doloribus suscipit rem similique. Voluptatibus sequi
                odio praesentium unde?</p>
        </div>
        <div class="container">
            <div class="contact-Info">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p> العملاق لزجاج السيارات،<br> JCF8+5VC,<br> Wadi
                            El Zayni</p>
                    </div>
                </div>
                <!--  -->
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+96170965232</p>
                    </div>
                </div>

                <!--  -->

                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                       <p>Mostafa_mooti@gmail.com</p>
                    </div>
                </div>
            </div>
            
            <div class="contactform">
                <center>
                    <?php
                    $f=0;
                    if(isset($_GET['flag']))
                    $f=$_GET['flag'];
                    if($f == 1)
                        echo "<h5> All fields are Required</h5>";
                    if($f == 2)
                        echo "<h5> Your Message sended Successfully </h5>";
    
                ?>
                <form method="post" action="contact_action.php">
                    <h2>Send Message</h2>
                    <!-- forName -->
                    <div class="inputBox">
                        <input type="text" required="required" name="txt_fullName">
                        <span>Full Name:</span>
                    </div>
                    <!-- forEmail -->
                    <div class="inputBox">
                        <input type="text" required="required" name="txt_email">
                        <span>Email:</span>
                    </div>
                    <!--  -->

                    <div class="inputBox">
                        <textarea name="txt_message" id="" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    
                    <div class="inputBox">
                        <input type="submit" value="Send" class="submit">
                    </div>
                </form>
                </center>
            </div>
       
        </div>
    </div>


</body>

</html>