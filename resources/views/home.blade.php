@extends('index')

@section('content')
    <section class="heroImg" aria-label="Featured Images">
        <img class="hero" src="/slides/1.jpg" alt="Featured Image" />
        <div class="ftBtns">
          <button id="backBtn" onclick="prevImg()" class="heroBtn" type="button"><img src="images/arrow_back.svg" alt="previous"/></button>
          <button id="forwardBtn" onclick="nextImg()" class="heroBtn" type="button"><img src="images/arrow_forward.svg" alt="next"/></button>
        </div>
      </section>
      
      <!-- MAIN CONTENT -->
      <section class="body-section">

        <!-- MUST-SEE PLACES -->
        <section class="main-content">
          
          <!-- Must-See Places in Subic-->
          <article class="articleCard">
            <div>
              <h2>Must-See Places in Subic</h2>
  
                <!-- CONTENT IMAGE -->
              <figure>
                <img src="images/beachPeople.jpg" alt="Must-See Places in Subic">
              </figure> 
            </div>
            
            <div>
              <p>
                 The Subic Bay Freeport Zone hosts Southeast Asia's only open-water marine park, Ocean Adventure, where visitors can watch educational dolphin and sea lion shows or swim in a natural lagoon. Nearby, Zoobic Safari covers 21 hectares of lush land where exotic animals like tigers and camels roam freely, offering guests an immersive up-close view from specially-caged jeepneys. For high-altitude thrills, Tree Top Adventure features motorized canopy tours and ziplines soaring high above the rich, protected rainforest foliage. Visitors looking for aquatic fun can head to Inflatable Island, a massive floating playground on the water, or relax by the coastlines of All Hands Beach and Dungaree Beach for warm swimming areas and beautiful sunset views over the bay.
              </p>
  
              <!-- SEE MORE BUTTON -->
              <button href="https://youtube.com" type="button" class="read-more">
                <a href="/">Read More</a>
              </button> 
            </div>
            <!-- CONTENT BODY -->
          </article>
          
          <article class="articleCard">
            <div>
              <h2>Where to Eat When You're in Subic</h2>
                <!-- CONTENT IMAGE -->
              <figure>
                <img src="images/lighthouse2.jpg" alt="Where to Eat in Subic">
              </figure> 
            </div>
            
            <div>
              <p>
                If you are looking for the absolute best places to eat in Subic Bay 
                Freeport Zone, your top choices depend on what you are craving. For mouthwatering, 
                hickory-smoked American comfort food, Texas Joe's House of Ribs is an undeniable local 
                favorite famous for its fall-off-the-bone baby back ribs and brisket. If you prefer picking out 
                your own raw steak cuts to be char-grilled exactly to your liking in a nostalgic American diner 
                setting, head over to the legendary Meat Plus Cafe.
              </p>
  
              <!-- SEE MORE BUTTON -->
              <button class="read-more">
                <a href="/">Read More</a>
              </button> 
            </div>
            <!-- CONTENT BODY -->
          </article>
      


          <!-- MORE ARTICLES -->
          <button class="read-more" aria-label="More Articles">
            <a href="/">Read More Articles...</a>
          </button>

          <!-- TESTIMONIALS -->
          <section class="testimonials" aria-label="testimonials">

              <h2 class="testimonials-heading">
                WHAT PEOPLE SAY ABOUT US
              </h2>
         
            <!-- TESTIMONIALS -->
              <article>
                
                <!-- Testimonial 1 -->
                <blockquote>
                  <p>
                    “Subic is so beautiful and Subic Getaway has been so helpful.”
                  </p>

                  <cite>Maritess Shen, 32, California</cite>
                </blockquote>
                
                <!-- Testimonial 2 -->
                <blockquote>
                  <p>
                  “Subic Getaway removed all the stress of organizing our
                  vacation so that we could focus on just enjoying ourselves.”
                  </p>
              
                  <cite>Karen Smith, 22, New York</cite>
                  </footer>
                </blockquote>
              </article>


          <!-- MORE TESTIMONIALS -->
              <button class="read-more" aria-label="More Testimonials">
                <a href="/">Read More Testimonials ...</a>
              </button>

          </section>
          </article>
        </section>
        
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
            <div class="advert" role="banner"><img src="images/ad1.jpg" alt="Ads #1"></div>
            <div class="advert" role="banner"><img src="images/ad2.jpg" alt="Ads #2"></div>
            <div class="advert" role="banner"><img src="images/ad3.jpg" alt="Ads #3"></div>
          </section>
        </aside> 
      </section>
@endsection