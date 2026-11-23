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

    <!-- HOTEL #1 -->
    <section class="main-content">
        <article>
        <section class="hotelArticle">
            <div id="hotelTitle">
            <h1>Subic Bay Venezia Hotel</h1>
            <figure>
                <img src="../images/lighthouse.jpg" alt="Subic Bay Hotel Hero Image" />
            </figure>
            </div>
            
            <div>
            <p>Subic Bay Venezia Hotel is conveniently located in the heart of the Central Business District Area of the Freeport and is near to numerous shopping malls, duty free shops, entertainment zones, recreational areas, popular tourist destinations, restaurants and beach resorts. The hotel's selling point is the way it approaches the market. By putting customers first and giving them good value for their money, Subic Bay Venezia Hotel is able to lure a sizeable clientele and some loyal followers away from other more established hotels in Subic Bay.</p>
            </div>
        </section>
        
        
        <section class="hotelArticle">
            <h2>Features and Amenities</h2>
            
            <article class="ameni">
            <h3>Palazzo, Piazza and Pazzano Function Rooms</h3>
            <p>
                Aliquam dapibus metus mi, at molestie sapien sagittis vel. Suspendisse potenti. Suspendisse convallis posuere tellus nec auctor. Etiam vitae nibh at nulla tristique fermentum ac nec velit. Donec vitae luctus leo. Aliquam venenatis fringilla mauris, in tristique libero consequat in. Donec gravida consequat massa. Etiam eu egestas tortor. Suspendisse nisl ligula, pulvinar et dolor sit amet, posuere rhoncus justo.
                Pellentesque vestibulum arcu mi, faucibus blandit lacus consequat nec. Ut vel diam non magna tempor condimentum. Nulla feugiat vestibulum magna, quis lacinia eros elementum eu. Nunc eu facilisis velit. Aliquam pellentesque posuere aliquam. In non orci nec justo mollis feugiat id a enim. Nulla luctus ut magna vel bibendum.</p>
            </article>
            
            <article class="ameni">
                <h3>New Feng Huang Restaurant</h3>
                <p>
                Aliquam dapibus metus mi, at molestie sapien sagittis vel. Suspendisse potenti. Suspendisse convallis posuere tellus nec auctor. Etiam vitae nibh at nulla tristique fermentum ac nec velit. Donec vitae luctus leo. Aliquam venenatis fringilla mauris, in tristique libero consequat in. Donec gravida consequat massa. Etiam eu egestas tortor. Suspendisse nisl ligula, pulvinar et dolor sit amet, posuere rhoncus justo. Pellentesque vestibulum arcu mi, faucibus blandit lacus consequat nec. Ut vel diam non magna tempor condimentum. Nulla feugiat vestibulum magna, quis lacinia eros elementum eu. Nunc eu facilisis velit. Aliquam pellentesque posuere aliquam. In non orci nec justo mollis feugiat id a enim. Nulla luctus ut magna vel bibendum.
            </p> 
            </article>
        </section>
        
        </article>
        
        <!-- Rooms -->
        <section class="rooms">
        <h2>Rooms</h2>
        
        <article class="room">
            <figure>
            <img
                src="../images/hotel.jpg"
                alt="Standard Room (Php 2,499)">
            </figure>
            
            <div class="roomDtl">
            <h3>Standard Room (Php 2,499)</h3>
            <h4>Good for Two Persons</h4>
            <ul>
                <li>Curabitur ipsum ipsum, volutpat quis metus vitae, consectetur pellentesque lacus. Nunc cursus sit amet neque sed vulputate.</li>
                <li>Nam malesuada nisl purus, quis lacinia purus aliquam eu. Sed eget erat in arcu laoreet suscipit a ac dolor. Proin a faucibus ante.</li>
                <li>Quisque a arcu et purus egestas rhoncus. Vestibulum metus ligula, mattis nec semper ut, congue ut tellus. Donec nec mollis sem.</li>
            </ul>
            </div>
            
        </article>
        
        <article class="room">
            <figure>
            <img
                src="../images/lighthouse2.jpg"
                alt="Superior Room (Php 5,499)">
            </figure>
            
            <div class="roomDtl">
            <h3>Superior Room (Php 5,499)</h3>
            <h4>Good for Two Persons</h4>
            <ul>
                <li>Curabitur ipsum ipsum, volutpat quis metus vitae, consectetur pellentesque lacus. Nunc cursus sit amet neque sed vulputate.</li>
                <li>Nam malesuada nisl purus, quis lacinia purus aliquam eu. Sed eget erat in arcu laoreet suscipit a ac dolor. Proin a faucibus ante.</li>
                <li>Quisque a arcu et purus egestas rhoncus. Vestibulum metus ligula, mattis nec semper ut, congue ut tellus. Donec nec mollis sem.</li>
            </ul>
            </div>
        </article>
        </section>
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
