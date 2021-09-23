<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Need help? Ask anything</h3>
         

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>No.65, 1st Floor, 1st Main, 3rd Cross, Chamarajpet, Bangalore - 560018, Near Royan Circle And Bata Showroom </p>
            </div>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>080-26611283,+919845259518</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://m.facebook.com/pages/category/Local-Business/Sri-Maruthi-Pharma-General-Stores-1798995330361189/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/govindswamy14?lang=en">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://api.whatsapp.com/send/?phone=918123215186&text&app_absent=0">
                <i class="fab fa-whatsapp"></i>
              </a>
             <a href="https://www.instagram.com/srimaruthimedicals/">
                 <i class="fab fa-instagram"></i>
             </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
          
         
          <form action="connect1.php" method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send"  name="submit" class="btn" />
          </form>
        </div>
      </div>
    </div>
    

    <script src="app.js"></script>
  </body>
</html>