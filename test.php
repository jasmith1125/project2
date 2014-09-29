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
  <body>
    
<form action="test.php" method="POST">
      
First name:<input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  E-mail: <input type="email" name="email" autocomplete="off"><br>
   <label>Car model</label>
             <select name = "myList">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select> 
  <input type="submit">
</form>

</body>
</html>
