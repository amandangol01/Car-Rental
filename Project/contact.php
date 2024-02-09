<?php 
include("header1.php");
?>
	<!--contact-->
	<section class="contact">
        
        <div class="content">
            <h1><b>CONTACT US</b></h1>
           
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>1234 Naxal,<br>Kathmandu<br>55060</p>
                        </div>
                 
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>123-456-7890</p>
                        </div>
                 </div>
                 <div class="box">
                    <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>contactuscars@gmail.com</p>
                        </div>
                 </div>

            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>

                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                       <button class="btn" style="
                        width: 150px;
                        background: purple;
                        color: #fff;
                        border: none;
                        cursor: pointer;
                        padding: 10px;
                        font-size: 18px;
                        margin-left:100px;
                    "><a href="index1.php" style="
                    text-decoration: none;
                    color: #fff;">Go To Home</a></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php include("footer.php");?>