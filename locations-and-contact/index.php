<?php include("../includes/html-head.html"); ?>
  
<body>

<?php include("../includes/header-and-nav.html"); ?>    
 
 <div class="row">
  <div class="large-12 columns"><h1>Locations and contact</h1></div>
 </div>
  
<div class="row">
  <div class=" location large-6 columns">
    <h2>Chicago Office</h2>
    <p>111 N. Wabash Ave., Ste. 1314</p>
    <p>Chicago, IL 60602</p>
    <p><a href="tel:3122633338" alt="Office phone number">(312)263-3338</a></p>
    <a alt="Chicago office map location" href="https://maps.google.com/maps?q=Ouska+Florence+T+DPM,+North+Wabash+Avenue,+Chicago,+IL&hl=en&ll=41.883876,-87.62588&spn=0.009266,0.023754&sll=41.972047,-87.703062&sspn=0.037011,0.095015&oq=ouska&t=m&z=16&iwloc=A"><img src="../images/location-chicago.png" alt="Image of Google map location of the Chicago office."></a>
  </div>    
  <div class=" location large-6 columns">
    <h2>Melrose Park Office</h2>
    <p>1111 Superior St., Ste. 401</p>
    <p>Melrose Park, IL 60160</p>
    <p><a href="tel:3122633338" alt="Office phone number">(312)263-3338</a></p>
    <a alt="Melrose Park office map location" href="https://maps.google.com/maps?q=T+Ouska-Griffin,+DPM,+Superior+Street+%23401,+Melrose+Park,+IL&hl=en&ll=41.893141,-87.847795&spn=0.009264,0.023754&sll=41.895888,-87.74128&sspn=0.148222,0.380058&oq=T+Ouska-Griffin,+DPM+melrose+park,+il&t=m&z=16&iwloc=A"><img src="../images/location-melrose.png" alt="Image of Google map location of the Melrose Park office."></a>
  </div>   
</div>    
  
  <div class="row">
    <div class="large-12 columns"><h2>Contact us</h2></div>
  </div>  
  
  <form>
  <div class="row">
    <div class="large-4 columns">
         <label>Name:
          <input type="text" id="name"/>
        </label>
    </div>
      <div class="large-4 columns">
         <label>Phone/email:
          <input type="text" id="contactNum"/>
        </label>
      </div>
    
      <div class="large-4 columns">  
        <label>Preferred location:</label>
        <input type="radio" name="location" value="Chicago" id="chicago"><label for="chicago">Chicago</label>
        <input type="radio" name="location" value="Melrose Park" id="melrosePark"><label for="melrosePark">Melrose Park</label>
      </div>    
  </div>  
  <div class="row">  
    <div class="large-8 columns">
      <label>Message
        <textarea id="message"></textarea>
      </label>
    </div>  
      <div class="large-4 columns">
        <div class="small-4 columns send-btn">
          <input class="button" type="submit" name="submit" value="Send" id="submitButton" />
          </div>
           <div class="small-8 columns">
             <div class="h-pot">
              <label>This is a test for spam. If you are a human, do not fill out this field. 
              <input type="text" id="nameBotTest"/>
              </label>
             </div>  
          </div>
      </div>
    </div>  
    <div class="row">
      <div class="large-12 columns contactMessage">
        <?php echo $feedback; ?>  
      </div>
    </div>
  </div>  
</form>  
<?php include("../includes/html-bottom.html"); ?>  