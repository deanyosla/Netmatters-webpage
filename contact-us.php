<!DOCTYPE html>
<html lang="en" class="">
    <?php include ("includes/head.php") ?>
    <?php include ("includes/close_sidemenu.php") ?>
    <?php include ("includes/message_btn.php") ?>
    <?php include ("includes/consent_btn.php"); ?>
    <?php include ("includes/header.php"); ?>
    <main>
     <div class="contact-nav">
      <div class="contact-nav-inner inner-container">
        <span>
          <a href="index.php">Home &nbsp;</a>/ Our Offices
        </span> 
      </div>
     </div>
      <!-- Offices wrapper -->
        <div class="offices-wrap">
          <div class="offices-heading-wrap">
            <div class="inner-container">
              <h1 class="offices-heading">Our Offices</h1>
            </div>
          </div>
          <div class="offices-cards-wrap inner-container">
            <div class="office-card">
              <div class="office-card-main">
                <div class="card-image">
                  <img src="img/offices/london.webp" alt="london office">
                </div>
                <div class="office-card-content">
                  <h2><a href="#">London Office</a></h2>
                  <address>
                    Unit G6,<br>
                    Pixel Business Centre,<br>
                    110 Brooker Road, Waltham Abbey,<br>
                    London,<br>
                    EN9 1JH</address>
                    <a href="tel:+442045397354" class="office-telephone">02045 397354</a>
                    <a href="#" class="office-btn">view more</a>
                </div>
              </div>
              <div class="card-map">
                <img src="img/google/london-map.webp" alt="london office location">
              </div>
            </div>
            <div class="office-card">
              <div class="office-card-main">
                <div class="card-image">
                    <img src="img/offices/cambridge.webp" alt="cambridge office">
                  </div>
                  <div class="office-card-content">
                    <h2><a href="#">Cambridge Office</a></h2>
                      <address>
                        Unit 1.31,<br>
                        St John's Innovation Centre,<br>
                        Cowley Road, Milton,<br>
                        Cambridge,<br>
                        CB4 0WS 
                      </address>
                      <a href="tel:+4401223375772" class="office-telephone">01223 37 57 72</a>
                      <a href="#" class="office-btn">view more</a>
                  </div>
                </div>
                <div class="card-map">
                  <img src="img/google/cambridge-map.webp" alt="cambridge office location">
                </div>
            </div>
            <div class="office-card">
               <div class="office-card-main">
               <div class="card-image">
                  <img src="img/offices/wymondham.webp" alt="wymondham office">
                </div>
                <div class="office-card-content">
                  <h2><a href="#">Wymondham Office</a></h2>
                  <address>
                       Unit 15,<br>
                       Penfold Drive,<br>
                       Gateway 11 Business Park,<br>
                       Wymondham, Norfolk,<br>
                       NR18 0WZ 
                  </address>
                    <a href="tel:+4401603704020" class="office-telephone">01603 70 40 2072</a>
                    <a href="#" class="office-btn">view more</a>
                </div>
               </div>
               <div class="card-map">
               <img src="img/google/wymondham-map.webp" alt="wymondham office location">
               </div>
            </div>
            <div class="office-card">
              <div class="office-card-main">
              <div class="card-image">
                  <img src="img/offices/yarmouth.webp" alt="great yarmouth office">
                </div>
                <div class="office-card-content">
                  <h2><a href="#">Great Yarmouth Office</a></h2>
                  <address>
                      Suite F23,<br>
                      Beacon Innovation Centre,<br>
                      Beacon Park, Gorleston,<br>
                      Great Yarmouth, Norfolk,<br>
                      NR31 7RA 
                  </address>
                    <a href="tel:+4401493603204" class="office-telephone">01493 60 32 04</a>
                    <a href="#" class="office-btn">view more</a>
                </div>
              </div>
              <div class="card-map">
              <img src="img/google/GY-map.webp" alt="great yarmouth office location">
              </div>
            </div>
          </div>
        </div>
      <!-- Offices wrapper end -->
      <!-- contact wrapper -->
        <div class="contact-wrap-outer">
          <div class="contact-wrap-inner inner-container">
            <!-- contact details -->
              <div class="contact-details-wrap">
                <div class="contact-details">
                  <p>Email us on: </p>
                  <p><a href="#">sales@netmatters.com</a></p>
                  <p>Business hours: </p>
                  <p>Monday - Friday 07:00 - 18:00</p>    
                </div>
                <div class="out-of-hours">
                  <h4>Out of Hours IT Support <i class="fa-solid fa-chevron-down"></i></h4>
                  <div class="content-container">
                    <div class="content">
                      <p class="text-light">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                      <p> Monday - Friday 18:00 - 22:00<br>
                          Saturday 08:00 - 16:00<br>
                          Sunday 10:00 - 18:00</p>
                      <p class="text-light">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail.
                         A technician will contact you on the number provided within 45 minutes of your call.</p>
                    </div>
                  </div>
                </div>
              </div>
            <!-- contact form -->
              <div class="contact-form-wrap" id="contact-form">
                 <div class="alert-wrap">
                        <!-- alert success and fail messages needs to be appended by JS later  -->

                        <!-- <div class="alert-success alert">
                               <span>Your message has been sent!</span> 
                               <button class="close">x</button>
                        </div> -->
                        <!-- <div class="alert-fail alert">
                        <span>Please enter a value into name.<br>
                          <br>Please enter a value into email.<br>
                          <br>Please enter a value into telephone.</span>
                          <button class="close">x</button>
                        </div> -->

                      </div>
                <form action="contact-us.php#contact-form" class="contact-form" method="POST">
                  <div class="contact-inputs">
                    <div class="contact-form-group">    
                        <label for="contact-name">Your Name</label>
                        <input id="contact-name" type="text" class="" value="">
                    </div>
                    <div class="contact-form-group">
                        <label for="company">Your Company</label>
                        <input id="company" type="text"  value="">
                    </div>
                    <div class="contact-form-group">
                        <label for="contact-email">Your Email</label>
                        <input type="email" id="contact-email" name="email" value="">
                    </div>
                    <div class="contact-form-group">
                        <label for="telephone">Your Telephone Number</label>
                        <input type="tel" id="telephone" name="telephone" value="">
                    </div>
                    <div class="contact-form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="5" cols="30" class="">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                    </div>
                  </div>
                  <div class="checkbox-wrap-contact">
                      <label class="checkbox" for="checkbox-contact">
                              <input class="checkbox__input" type="checkbox" name="myCheckboxName" id="checkbox-contact">
                              <span class="checkbox__box"></span>
                      </label>
                        <label for="checkbox-contact" class="pointy">
                              Please tick this box if you wish to receive marketing
                              information from us. Please see our
                              <a href="#" target="_blank" class="privacy">Privacy Policy</a>
                              for more information on how we keep your data safe.
                        </label>
                  </div>
                  <div class="captcha-wrap">
                    <span>This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</span>
                    <?php include ("includes/db-conn.php") ?>
                  </div>
                  <div class="button-container">
                    <button type="submit" class="subscribe" action="contact-us.php#contact-form">send inquiry</button>
                    <span><span class="notice">*</span> Fields Required</span>
                  </div>
            
                </form>
              </div>
          </div>
        </div>

      <!-- contact wrapper end -->
    <!-- =========================== Newsletter =============================== -->
      <?php include ("includes/newsletter.php") ?>
    </main>
    <!-- ============= Footer section =======================================            -->
    <?php include ("includes/footer.php"); ?>
    <?php include ("includes/consent_popup.php"); ?>
    <?php include ("includes/side_menu.php"); ?>
    <?php include ("includes/scripts.php"); ?>
  </body>
</html>
