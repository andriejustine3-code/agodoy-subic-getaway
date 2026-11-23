<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subic Getaway | Homepage</title>
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>

    <header class="web-header">
      
      <div class="mobile-view">
        <a class="headerLogo" href="{{ url('/') }}"><img src="images/logo.png" alt="Website Logo" /></a>
        
        <button class="menu" onclick="navBar()" type="button"><img class="menuIcon" src="images/menuBtn.svg" alt="Menu" /></button> 
      </div>
      <nav class="headerNav" aria-label="Website Navigation Buttons">
        <ul>
          <li><a href="{{ url('/about') }}">About Us</a></li>
          <li><a href="{{ url('/hotels-and-restaurants') }}">Hotels & Restaurants</a></li>
          <li><a href="{{ url('/attractions') }}">Attractions</a></li>
          <li><a href="{{ url('/news-and-events') }}">News & Events</a></li>
          <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
        </ul>
      </nav>
      
    </header>

    <main class="content">
        @yield('content')

    </main>
    
  <!--:::::::::FOOTER AREA BELOW:::::::::::::::-->

    <footer>
      
      <!-- FOOTER NAVIGATION -->
      <section class="footerNav" aria-label="Footer navigation">
          <ul>
            <li><a href="pages/about-us.html">About Us</a></li>
            <li><a href="pages/hotels-res.html">Hotels & Restaurants</a></li>
            <li><a href="pages/attr.html">Attractions</a></li>
            <li><a href="pages/news-events.html">News & Events</a></li>
            <li><a href="pages/contact-us.html">Contact Us</a></li>
        </ul>
      </section>
      
      <!-- WEBSITE COMPANY INFORMATION -->
      <section class="footer-bottom">
        <div class="company-info">
          <p>&copy; 2023 COMTEQ Computer & Business College</p>
            <address>
              <a href="mailto:customer_service@subicgetaway.com" class="email-link">customer_service@subicgetaway.com</a><br>
              <a href="tel:+639112345123" class="phone-link">(+63) 911 234 5123 / 252 - 3335</a>
            </address>
          </div>
        </section>
        
        <!-- WEBSITE SOCIAL MEDIA LINKS -->     
        <section class="social-media">
          <h3>FOLLOW US</h3>
          <ul class="social-links">
            <li><a href="#" aria-label="Facebook"><img src="images/facebook.svg" alt="facebook" /><span>Facebook</span></a></li>
            <li><a href="#" aria-label="Twitter"><img src="images/twitter.svg" alt="twitter" /><span>Twitter</span></a></li>
            <li><a href="#" aria-label="Instagram"><img src="images/instagram.svg" alt="instagram" /><span>Instagram</span></a></li>
            <li><a href="#" aria-label="LinkedIn"><img src="images/linkedin.svg" alt="linkedin" /><span>LinkedIn</span></a></li>
          </ul>
        </section>

        <section class="disclaimer">
          <p>
            The website design, layout, images, and content displayed on this site are for demonstration and portfolio purposes only. 
            All names, characters, businesses, places, events, and incidents featured in this template are completely fictitious. Any resemblance to actual persons (living or dead), existing businesses, or real-world events is purely coincidental.
            No real products or services are offered for sale, and any contact information (such as phone numbers, email addresses, or physical locations) is strictly placeholder data used to illustrate the visual layout.</p>
        </section>
    </footer>
    <script src="js/app.js"></script>
  </body>
</html>