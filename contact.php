<?php require('head.php');?>

<div class="contactContainer" id="contact">

    <h2 class="contactH2">Contact Us</h2>

    <div class="contactFormDiv">
    
              
        <form method="post" action="parser.php">
            <input type="text" name="name" placeholder="Enter your name" id="name">
            <input type="email" name="email" placeholder="Enter your email" id="email">
            <textarea type="text" name="message" placeholder="Enter your message" id="message"></textarea>

            <input type="submit" name="submit" value="Submit" id="submit">
        </form>
    </div> <!--contactForm-->

                 
</div><!--contactContainer-->

