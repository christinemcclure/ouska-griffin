<?php include("form-validate.php"); ?>
   
 <!doctype html>
<html class="no-js" lang="en" id="ouskagriffinpodiatrist.com">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Christine McClure, www.christinemcclure.com">  
    <meta name="keywords" content="podiatrist, podiatry, chicago, melrose park, illinois">
    <title>Dr. Florence Ouska-Griffin</title>
    <meta name="description" content="Dr. Ouska-Griffin is a Chicago native and graduate of Loyola University and Dr. William M. Scholl College of Podiatric Medicine now part of The Rosalind Franklin Medical College. She has offices in Chicago and Melrose Park, IL.">

  </head>
  
  <body>
 <div class="row">
  <div class="large-12 columns"><h1>Locations and contact</h1></div>
 </div>
  
 
  
  <div class="row">
    <div class="large-12 columns">
      <div class="contactMessage">
        <?php echo $feedback; ?>  
      </div>          
     </div>
  </div>
  
  <div id="showContactForm" class="row <?php echo $cssclass; ?>">
    <div class="large-12 columns">
    <div class="row">  
      <form method="post" action="/test/" id="contactForm">
        <div class="large-4 columns">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" required/>
        </div>
        <div class="large-4 columns">
          <label for="contactNum">Email/Phone:</label>
          <input type="text" name="contactNum" id="contactNum" required/>
        </div>
        <div class="large-4 columns">
          <label for="location">Preferred location:</label>
            <input type="radio" name="location" value="Chicago" id="location"><label for="chicago">Chicago</label>
            <input type="radio" name="location" value="Melrose Park" id="location"><label for="melrosePark">Melrose Park</label>
        </div>
    </div>  
    <div class="row">  
      <div class="large-8 columns">
      <label for="message">Message</label>
      <textarea name="message" id="message"></textarea>
      <div class="hide">
        <label for="nameBotTest">Bot test for spam. If you're a human, don't enter anything here.</label>
        <input name="nameBotTest" type="text" id="nameBotTest" />
      </div>  
      </div>
      <div class="large-4 columns">
        <input class="button" type="submit" name="submit" value="Send" id="submitButton" />
        <input type="hidden" name="submitted" value="TRUE" />
      </div>
    </div>  
  </form>
  </div>    
  </div>



  </body>
</html>  