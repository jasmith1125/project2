<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscrutable*U Password Generator</title>
    <link rel="stylesheet" href="css/foundation.css" />
     <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script%7cOpen+Sans:400,300,600%7cOpen+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/app.css" />
    <script src="js/vendor/modernizr.js"></script>
     <?php require('logic.php'); ?>
  </head>
  <body id="container">
    
    <div class="row full-width">
      <div class="large-12 large-centered small-12 small-centered columns">
        <h1 class="white">Inscrutable*U</h1>
      </div>
    </div>
      <div class="row main-content">
        <div class="row space-above"> 
          <div class="large-6 large-centered medium-8 medium-centered small-9 small-centered columns">
          <h2>Keep your online biz private and secure&mdash;<br />build a better password!</h2>
          </div>
        </div>
<form action="generator.php" method="POST">
      <div class="row space-top-bottom">
  <div class="large-2 large-centered medium-3 medium-centered small-3 small-centered columns">
<label for="count">Number of words</label>
  <select name="count">
    <option value="2">2</option>
    <option SELECTED value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select>


  </div>
</div>
<div class="row">
  <div class="large-3 large-offset-1 small-3 small-offset-1 columns">
 <label for="number">Include a number? 
      <input type="checkbox" name="number" value="checkbox" /></label>
      </div>
  <div class="large-3 small-3 columns">
 <label for="symbol">Include a symbol?
      <input type="checkbox" name="symbol" value="checkbox" /></label>
  </div>
   <div class="large-4 small-4 columns end">
   <label for="uppercase">Make first letter of first word upper case?
      <input type="checkbox" name="uppercase" value="checkbox" /></label>
    </div>
</div>
  
   <div class="row generate">
      <div class="large-6 large-centered medium-6 medium-centered small-9 small-centered columns">
    
      <input class="button expand" type="submit" id="submit" value="Make a New Password" />
    </div>
  </div>
  <div class="row small-space-above">
    <div class="large-6 large-centered small-9 small-centered columns">
      <h4>Your new password:</h4>
      <p class="pass">string-of-words-here</p>
    </div>
  </div>
  
  </form>
  <div class="row bottom">
    <div class="large-6 large-centered small-9 small-centered columns">
      <h3><a href="index.php">Learn more about xkcd passwords</a></h3>
    </div>
  </div>
  
 
          
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </div> <!--closes main-content-->             
</body>
</html>
