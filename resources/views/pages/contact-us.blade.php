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

    <!--CONTACT US FORM-->
    <section class="main-content">
        <section class="contact_us" aria-label="Contact Us Form">
        
        <!-- Content Header-->
        <header>
        <h1>Contact Us</h1>
        <p>Planning on that perfect getaway? Allow us to help you with it and save yourself a lot of time and effort usually spent associated with planning a trip. Just fill in the form below.</p>
        </header>
        
        <!-- Content Form -->
        <form class="contactForm" action="POST" method="post" accept-charset="utf-8">
            
            <div>
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" placeholder="Your Name" required/>
            <label for="currLocation">Your Location</label>
            <input type="text" name="currLocation" id="currLocation" placeholder="Your Location" required/>
                
            <label for="desLocation">Desired Destination</label>
            <input type="text" name="desLocation" id="desLocation" placeholder="Desired Destination"required/>
            
            <label for="arrival">Date of Arrival</label>
            <input type="date" name="arrivalDate" id="arrival" required/>
                
            <label for="departure">Date of Return</label>
            <input type="date" name="returnDate" id="departure" required/>
            <fieldset class="noOfPersons" aria-label="Number of Persons">
                <legend>Number of Persons:</legend>
                
                <label for="adults" class="sr-only">Adults</label>
                <input required type="number" id="adults" name="adults" placeholder="Adults" min="1">
                        
                <label for="children" class="sr-only">Children</label>
                
                <input type="number" id="children" name="children" placeholder="Children" min="0">
            </fieldset>
            </div>
            
            
            <div>
            
            <fieldset class="prefAct">
                <legend>Preferred Activities</legend>
                
                <div class="acts" aria-label="Preferred Activity Checkbox">
                <label class="act" for="swimming">
                    <input id="swimming" type="checkbox" name="swimming" value="Swimming" />
                    <span>Swimming</span>
                </label>
                <label class="act" for="surfing">
                    <input id="surfing" type="checkbox" name="surfing" value="Surfing" />
                    <span>Surfing</span>
                </label>
                <label class="act" for="kayaking">
                    <input id="kayaking" type="checkbox" name="kayaking" value="kayaking" />
                    <span>Kayaking</span>
                </label>
                <label class="act" for="diving">
                    <input id="diving" type="checkbox" name="diving" value="Diving" />
                    <span>Diving</span>
                </label>
                </div>
                
                <div class="otherActivities" aria-label="Manually type your desired activity">
                <label for="otherAct">Other</label>
                <input type="text" name="otherAct" id="otherAct"/>
                </div>
                
            </fieldset>
            
            <label for="phoneNo">Telephone</label>
            <input type="number" name="phoneNo" id="phoneNo" placeholder="Telephone"/>
            
            <label for="email">Email Address</label>
            <input required type="email" name="email" id="email" placeholder="Email Address"/> 
            
            <label for="prefContact">Preferred Form of Contact</label>
            
            <select required name="prefContact" id="prefContact">
                <option value="Email Address" selected>Email Address</option>
                <option value="Telephone">Telephone</option>
            </select>
            
            <label for="notes">Additional Notes:</label>
            <input type="text" name="notes" id="notes" placeholder="Additional notes, instructions or requests (optional)"/>  
            </div>
        
            
            <button class="submitBtn" type="submit">Submit</button>
        </form>
        </section>
    </section>

    <aside class="sidebar">
        <!-- ADS -->
        <section class="advertisements" aria-label="Advertisements">
        <div class="advert" role="banner"><img src="../images/ad1.jpg" alt="Ads #1"></div>
        <div class="advert" role="banner"><img src="../images/ad2.jpg" alt="Ads #2"></div>
        <div class="advert" role="banner"><img src="../images/ad3.jpg" alt="Ads #3"></div>
        </section>
    </aside>
    </section>
@endsection