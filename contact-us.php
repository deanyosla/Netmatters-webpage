<!DOCTYPE html>
<?php session_start();
include ("includes/validate.php");
?>
<html lang="en" class="">
    <?php 
     include ("includes/head.php");
     include ("includes/close_sidemenu.php");
     include ("includes/message_btn.php");
     include ("includes/consent_btn.php");
     include ("includes/header.php");
    ?>
    <main>
     <div class="contact-nav">
      <div class="contact-nav-inner inner-container">
        <span>
          <a href="index.php">Home</a>  / Our Offices
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1236.9012519929447!2d-0.002868!3d51.681758!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761fff09271cbd%3A0xbfed51d9cf061321!2sPixel%20Business%20Centre%2C%20Brooker%20Rd%2C%20Waltham%20Abbey%20EN9%201JH!5e0!3m2!1sen!2suk!4v1710859574845!5m2!1sen!2suk" width="100%" height="250" style="border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="google-maps"></iframe>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.4449748640736!2d0.1513851765274437!3d52.23530085726904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d871ace1fea115%3A0x3b83f818538541b8!2sSt%20John's%20Innovation%20Centre!5e0!3m2!1sen!2suk!4v1709209752309!5m2!1sen!2suk" width="100%" height="250" style="border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="google-maps"></iframe>
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
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.646653310804!2d1.131838890416635!3d52.57600096009048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddacf5488fd7%3A0x72ab854c586cb9ed!2s15%20Penfold%20Dr%2C%20Wymondham%20NR18%200WZ!5e0!3m2!1sen!2suk!4v1709209806892!5m2!1sen!2suk"
                width="100%" height="250"
                style="border-bottom-left-radius: 20px;
                       border-bottom-right-radius: 20px;
                       border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                id="google-maps">
              </iframe>
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.7627527589448!2d1.710404476545653!3d52.555816233577374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da04f3998cbd9b%3A0x95f38a894b85cdc6!2sBeacon%20Innovation%20Centre%2C%20Camelot%20Rd%2C%20Gorleston-on-Sea%2C%20Great%20Yarmouth%20NR31%207RA!5e0!3m2!1sen!2suk!4v1709209891765!5m2!1sen!2suk" width="100%" height="250" style="border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="google-maps"></iframe>
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
                <form action="contact-us.php" class="contact-form" method="POST">
                      <div class="alert-wrap">                        
                          <div class="alert-hidden <?php if ($_SESSION['form_sent'] == true) {
                                                   echo 'alert-success';
                                                  } else if (!empty($_SESSION['errorMessage'])){
                                                   echo 'alert-fail';
                                                  } else {
                                                    echo '';
                                                    }
                                                   ?>">
                                        <span><?php if($_SESSION['form_sent'] == true) {
                                                echo 'Your Enquiry has been Submitted';
                                                $_SESSION['form_sent'] = false;
                                                } else {
                                                  echo implode("<br><br>",$_SESSION['errorMessage']);
                                                                $_SESSION['errorMessage'] = [];
                                                                }
                                               ?>
                                         </span>
                                        <button type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                           </div>
                      </div>
                  <div class="contact-inputs">
                    <div class="contact-form-group">    
                        <label for="contact-name">Your Name</label>
                        <input id="contact-name" type="text" class="" value="<?php echo $_SESSION['contact-name'] ?? ''; ?>" name="contact-name">
                    </div>
                    <div class="contact-form-group">
                        <label for="company">Your Company</label>
                        <input id="company" type="text"  value="<?php echo $_SESSION['company'] ?? ''?>" name="company">
                    </div>
                    <div class="contact-form-group">
                        <label for="contact-email">Your Email</label>
                        <input type="email" id="contact-email" name="contact-email" value="<?php echo $_SESSION['contact-email'] ?? ''; ?>">
                    </div>
                    <div class="contact-form-group">
                        <label for="telephone">Your Telephone Number</label>
                        <input type="tel" id="telephone" name="telephone" value="<?php echo $_SESSION['telephone'] ?? ''?>">
                    </div>
                    <div class="contact-form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="5" cols="30" name="message" value="<?php echo $_SESSION['message'] ?? ''?>"><?php echo $placeholderText; ?></textarea>
                    </div>
                  </div>
                  <div class="checkbox-wrap-contact">
                      <label class="checkbox" for="checkbox-contact">
                              <input class="checkbox__input" type="checkbox" name="marketing" id="checkbox-contact" value="1">
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
                  </div>
                  <div class="button-container">
                    <button type="submit" class="subscribe" action="#contact-form">send inquiry</button>
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
