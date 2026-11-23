@extends('index')

@section('content')
    <!-- HERO CAROUSEL -->
      <section class="heroImg" aria-label="Featured Images">
        <img class="hero" src="../slides/1.jpg" alt="Featured Image" />
        <div class="ftBtns">
          <button id="backBtn" onclick="prevImg()" class="heroBtn" type="button"><img src="../images/arrow_back.svg" alt="previous" /></button>
          <button id="forwardBtn" onclick="nextImg()" class="heroBtn" type="button"><img src="../images/arrow_forward.svg" alt="next" /></button>
        </div>
      </section>
      
      <!-- MAIN CONTENT -->
      <section class="body-section">

        <!-- NEWS & EVENTS -->
        <section class="main-content">
        <!-- CONTENT TITLE -->
        <h1>News and Events</h1>
        
        <!-- PLACES IN SUBIC --> 
        <article class="articleCard">
          <!-- Content Header -->
          <div>
            <h2>Must-See Places in Subic</h2>

            <!-- Content Thumbnail -->
            <figure>
              <img src="../images/pierre.jpg" alt="Must-See Places in Subic">
            </figure>
          </div>
          <div>
            <!-- Content Body-->
          <p>The Subic Bay Freeport Zone hosts Southeast Asia's only open-water marine park, Ocean Adventure, where visitors can watch educational dolphin and sea lion shows or swim in a natural lagoon. Nearby, Zoobic Safari covers 21 hectares of lush land where exotic animals like tigers and camels roam freely, offering guests an immersive up-close view from specially-caged jeepneys. For high-altitude thrills, Tree Top Adventure features motorized canopy tours and ziplines soaring high above the rich, protected rainforest foliage. Visitors looking for aquatic fun can head to Inflatable Island, a massive floating playground on the water, or relax by the coastlines of All Hands Beach and Dungaree Beach for warm swimming areas and beautiful sunset views over the bay.</p>
        
          <!-- READ MORE -->
          <button class="read-more">
            <a href="#">Read More</a>
          </button>
          </div>
        
        </article>
        
        <!-- WHERE TO EAT --> 
        <article class="articleCard">
          <!-- Content Header -->
          <div>
            <h2>Where to Eat When You're in Subic</h2>
            <figure>
              <img src="../images/hotel.jpg" 
              alt="Places to eat in Subic">
            </figure>
          </div>
          
          <div>
            <p>If you are looking for the absolute best places to eat in Subic Bay Freeport Zone, your top choices depend on what you are craving. For mouthwatering, hickory-smoked American comfort food, Texas Joe's House of Ribs is an undeniable local favorite famous for its fall-off-the-bone baby back ribs and brisket. If you prefer picking out your own raw steak cuts to be char-grilled exactly to your liking in a nostalgic American diner setting, head over to the legendary Meat Plus Cafe.</p>
          
            <!-- READ MORE -->
            <button class="read-more">
              <a href="#">Read More</a>
            </button>
          </div>
          <!-- Content Body-->
          
        
        </article>

        <!-- EVENTS IN SUBIC --> 
        <article class="articleCard">
          
          <div>
            <h2>Some Events in Subic</h2>

            <figure>
              <img src="../images/lighthouse.jpg" 
              alt="Some Events in Subic">
            </figure>
          </div>
            
          <div>
            <!-- Content Body-->
          <p>
            Subic Bay is a dynamic hub for major events, particularly renowned for its high-energy 
            sports and multi-sport competitions. Due to its wide, well-maintained roads and coastal 
            landscape, the area frequently plays host to prestigious athletic challenges such as the 
            world-renowned IRONMAN 70.3 Subic Bay and the Challenge Philippines triathlons. Fitness 
            enthusiasts and competitive athletes gather here for a variety of aquatic and land-based 
            events, ranging from the annual BPI Subic Regatta sailing races to beach volleyball 
            tournaments, competitive futsal, and major running events like the Subic Bay Half Marathon.
          </p>
        
          <!-- READ MORE -->
          <button class="read-more">
            <a href="#">Read More</a>
          </button>
          </div>
          
        
        </article>

        
        <!-- SIDEBAR -->  
        <aside class="sidebar">
          <!-- BOOKING FORM -->
          <section class="reqBooking" aria-label="Request Booking">
            <!-- FORM HEADER -->
            <h2>REQUEST BOOKING</h2>
            
            <!-- FORM BODY-->
            <form>
              <label for="name">Your Name</label>
              <input id="name" type="text">

              <label for="destination">Your Destination</label>
              <input id="destination" type="text">

              <label for="arrival">Date of Arrival</label>
              <input id="arrival" type="date">

              <label for="departure">Date of Departure</label>
              <input id="departure" type="date">
              
              <!-- Grouped Nested Form -->
              <fieldset>
                <legend>No. of Persons:</legend>
                <label for="adults" class="sr-only">Adults</label>
                <input type="number" id="adults" name="adults" placeholder="Adults" min="1">
                          
                <label for="children" class="sr-only">Children</label>
                <input type="number" id="children" name="children" placeholder="Children" min="0">
              </fieldset>
                
              <!-- Dropdown Menu/Choices -->
              <label for="prefContact">Preferred Contact</label>
              <select name="prefContact" id="prefContact">
                <option value="" disabled selected>Preferred Contact</option>
                <option value="online">Email</option>
                <option value="in-person">Phone Number</option>
              </select>
              <button class="submitBtn" type="submit"><a>Submit</a></button>
            </form>
          </section>
  
          <!-- ADS -->
          <section class="advertisements" aria-label="Advertisements">
            <div class="advert" role="banner"><img src="../images/ad1.jpg" alt="Ads #1"></div>
            <div class="advert" role="banner"><img src="../images/ad2.jpg" alt="Ads #2"></div>
            <div class="advert" role="banner"><img src="../images/ad3.jpg" alt="Ads #3"></div>
          </section>
        </aside> 
      </section>

@endsection