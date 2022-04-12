<?php include_once("php/header.php");
?>
<header class="page-header header container-fluid">
</header>
<div class="description">
	<h1>Contact Us</h1>
    <h2>24/7 support</h2>

</div>
<div class="col-sm-12" id="contact">
    <div class="col-sm-12">
        <div class="contact-details">
            <div id="phone">
                <img src="">
                <p>Phone</p>
                <p id="main-bold">082 000 0000</p>
            </div>
            <div id="email">
            <img src="">
                <p>Email</p>
                <p id="main-bold">email@example.com</p>
            </div>
            <div id="location">
            <img src="">
                <p>Location</p>
                <p id="main-bold">42 Business Rd</p>
            </div>
        </div>
    </div><!-- End of details for contact-->
    
</div>

<div class="col-sm-6" id="mail">
        <div class="contact-form">
                    <div class="container">  
            <form id="contact" action="" method="post">
                <h1>How Can we help?</h1>
                
                <fieldset>
                    <label>Name</label>
                    <input type="text" tabindex="1" required autofocus>
                </fieldset>
                
                <fieldset>
                    <label>Contact number</label>
                    <input type="tel" tabindex="3" required>
                </fieldset>

                <fieldset>
                    <label>Email address</label>
                    <input type="email" tabindex="4" required>
                </fieldset>

                <fieldset>
                    <label>How can we help?</label>
                    <textarea tabindex="5" required></textarea>
                </fieldset>

                <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
            
            
            </div>
        </div>
    </div>


<?php
include_once("php/footer.php");
?>
