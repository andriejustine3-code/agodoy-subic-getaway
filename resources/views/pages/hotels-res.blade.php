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

    <!-- HOTELS & RESTAURANTS -->
    <section class="main-content">
        <!-- CONTENT HEADER -->
        <h1 id="page-title">Hotels and Restaurants in Subic</h1>
    
        <!-- HOTEL #1 -->
        <article class="articleCard">
            
        <!-- Thumbnail Area -->
        <div class="media-column">
            <img src="../images/hotel.jpg" alt="View of Hotel #1 in Subic" class="hotelres-thumb">
            <button class="read-more" class="btn">
                <a href="{{ url('/hotel-page') }}">Read More</a>
            </button>
        </div>
        
        <!-- Text Area -->
        <div class="content-column">
            <h2>Subic Bay Venezia Hotel</h2>
            <p>
                Subic Bay Venezia Hotel is conveniently located 
                in the heart of the Central Business District Area 
                of the Freeport and is near to numerous shopping malls, 
                duty free shops, entertainment zones, recreational areas, 
                popular tourist destinations, restaurants and beach resorts. 
                The hotel's selling point is the way it approaches the market. 
                By putting customers first and giving them good value for their money, 
                Subic Bay Venezia Hotel is able to lure a sizeable clientele and 
                some loyal followers away from other more established hotels in Subic Bay.
            </p>
            <ul>
                <li><span class="hgh">Type:</span> 3-star leisure and event hotel</li>
                <li>
                <span class="hgh">Location:</span> Waterfront Road, putting you steps away from the beach path, local restaurants, and seaside bars
                </li>
                <li><span class="hgh">Policies:</span> Standard check-in at 2:00 PM and check-out at 12:00 PM</li>  
            </ul>
        </div>

        </article>
        
        <!-- HOTEL #2 -->
        <article class="articleCard">
            
        <!-- Thumbnail Area -->
        <div class="media-column">
            <img src="../images/building.jpg" 
            alt="View of Hotel #2 in Subic" class="hotelres-thumb">
            <button class="read-more" class="btn" href="">
                <a href="../pages/hotel-page.html" class="btn-read-more">Read More</a>
            </button>
        </div>
        
        <!-- Text Area -->
        <div class="content-column">
            <h2>Subic Bay Peninsular Hotel</h2>
            <p>

                The Subic Bay Peninsular Hotel is a cozy 3-star property located at Bldg. 489, 490, 
                491 Canal Road, 
                Subic Bay Freeport Zone, near the entrance of the free zone and Olongapo City.
            </p>

            <ul>
                <li><span class="hgh">Type:</span> 3-star smoke-free accommodation.</li>
                <li>
                <span class="hgh">Rooms:</span> 34 spacious, air-conditioned non-smoking rooms (approx. 36 m²) 
                    including Double-Queen, Deluxe King, Deluxe Twin, and Deluxe Quad 
                    configurations
                </li>
                <li><span class="hgh">Policies:</span>  Check-in at 2:00 PM, check-out at 12:00 PM; children under 9 stay free using existing beds</li>  
            </ul>
        </div>

        </article>
        
        <!-- ATTRACTION #1 -->
        <article class="articleCard">
            
        <!-- Thumbnail Area -->
        <div class="media-column">
            <img src="../images/beachPeople.jpg" 
            alt="View of Attraction #1 in Subic" class="hotelres-thumb">
            <button class="read-more" class="btn" href="">
                <a href="#" class="btn-read-more">Read More</a>
            </button>
        </div>
        
        <!-- Text Area -->
        <div class="content-column">
            <h2>Camayan Beach Resort</h2>
            <p>
                Unlike the city-based layouts of the Peninsular or Seorabeol, 
                the Camayan Beach Resort shifts you completely into a tropical getaway. 
                It is a relaxed, 4-star destination nestled inside the protected West Ilanin 
                Forest Area. Surrounded by lush rainforest and a clean marine sanctuary, 
                it is highly favored by families and nature lovers who want a true beach vacation 
                rather than just a city stay.
            </p>

            <ul>
                <li><span class="hgh">Type:</span> 4-star beachfront nature resort</li>
                <li>
                <span class="hgh">Location:</span> Camayan Wharf Road. It sits right at the edge of the free zone, directly adjacent to Ocean Adventure Park.
                </li>
                <li><span class="hgh">Policies:</span> Check-in starts at 3:00 PM; check-out is at 12:00 PM. Outside food and drinks are strictly prohibited.</li>  
            </ul>
        </div>

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
        <div class="advert" role="banner"><img src="../images/ad1.jpg" alt="Ads #1"></div>
        <div class="advert" role="banner"><img src="../images/ad2.jpg" alt="Ads #2"></div>
        <div class="advert" role="banner"><img src="../images/ad3.jpg" alt="Ads #3"></div>
        </section>
    </aside> 
    </section>
@endsection