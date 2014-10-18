<?php include("form-validate.php"); ?>
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
  
  <div class="row">
    <div class="large-12 columns">
      <div class="contactMessage">
        <?php echo $feedback; ?>  
      </div>          
     </div>
  </div>
  
  <div id="showContactForm" class="row large-12 columns <?php echo $cssclass; ?>">

  <form method="post" action="/locations-and-contact/" id="contactForm">
      <input type="text" name="name" id="name" placeholder="Name"/>
      <input type="email" name="email" id="email" placeholder="E-mail address" required/>
      <textarea name="message" id="message"  placeholder="Your message here" required></textarea>
      <input name="nameBotTest" type="text" id="nameBotTest" placeholder="Bot test: if you're a human, don't enter anything here" class="h-pot" />
      <input class="button" type="submit" name="submit" value="Send" id="submitButton" />
      <input type="hidden" name="submitted" value="TRUE" />
  </form>

  
  </div>


<?php include("../includes/html-bottom.html"); ?>  