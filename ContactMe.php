<?php include("header.php") ?>

 <div class="main-container contact-bg">

    <div class="common-block contact-banner">

    </div>

    <div class="contact-form">
     
    <div class="contact-address">
    <h3>Contact Me</h3>
    <ul>
    <li class="mapad">
    Near Markaz Madeena Masjid Gohalpur, Jabalpur, India
    </li>
    <li class="emailid"><a href="mailto:ibadurrehman14@gmail.com">ibadurrehman14@gmail.com</a></li>
    <li class="skypeid">Ibadur.rehman75</li>
    <li class="contactno">+91-9713791927</li>
    </ul>
    </div>

    <div class="contact-info">
    <h2 class="contact_title">Send a Message</h2>

    <form name="sentMessage" id="contactForm"  method="post" action="contact_me.php">
    <div class="md-input">
    <input class="md-form-control" required="" title="Enter Your Name" type="text" id="name"  />
    <span class="highlight"></span>
    <label>Your Name</label>
    </div>

    <div class="md-input">
    <input class="md-form-control" required="" title="Enter Your Email" type="text" id="email" />
    <span class="highlight"></span>
    <label>Your Email</label>
    </div>

    <div class="md-input">
    <input class="md-form-control" required="" title="Enter Your Phone Number" type="text" id="phone" />
    <span class="highlight"></span>
    <label>Your Phone No.</label>
    </div>

    <div class="md-input">
    <textarea class="md-form-control md-form-resize" required="" title="Enter Your Message" rows="3" cols="1" id="message"></textarea>
    <span class="highlight"></span>
    <label>Your Message</label>
    </div>

    <button class="btn-submit-msg">Send Message</button>
    </form>
    </div>
    

    
    

    </div>

    </div>
<script src="JScript/contact_me.js"></script>

<?php include("footer.php") ?>