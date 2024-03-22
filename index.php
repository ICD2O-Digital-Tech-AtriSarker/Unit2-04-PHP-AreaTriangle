<!-- USE DEV URL TO RUN -->
<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Calculator for Area of Triangle, Using PHP">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Title -->
  <title>Area of a Triangle in PHP</title>
</head>

<body>

  <!-- Header -->
  <h1>Area of a Triangle in PHP</h1>

  <!-- Image that displays the formula -->
  <img class="formulaImg" src="./images/AreaOfTriangle.png" alt="Area of Triangle Formula">
  <br>
  
  <!-- Input Form  -->
  <form method="post">
    <label for="base">Base (m):</label>
    <input id="baseInput" type="number" name="base" min="0" />
    <br>
    <label for="height">Height (m):</label>
    <input id="heightInput" type="number" name="height" min="0" />
    <br>
    <!-- Calculate Button -->
    <input type = "submit" name = "submit" value="Calculate!">
  </form>

  <!-- Result -->
  <p>
    <?php
    // Script
    if(isset($_POST['submit']))  
      {   
        // Inputs
        $baseInput = floatval($_POST['base']) or 0;
        $heightInput = floatval($_POST['height']) or 0; 
        
        // Display Message
        echo "The Area of a Triangle with base $baseInput"."m and height $heightInput"."m is ";
      } else {
        // Default Initial Value
        echo "The Area is ";
      } 
    ?>
    <b id="AreaResult"> 
      <?php
      // Script
      if(isset($_POST['submit']))  
        {   
          // Inputs
          $baseInput = floatval($_POST['base']) or 0;
          $heightInput = floatval($_POST['height']) or 0; 
          // Calculate Area
          $area = 0.5 * $baseInput * $heightInput;
          // Display Area
          echo "$area"."m<sup>2</sup>";
        } else {
          // Default Initial Value
          echo "?";
        } 
      ?>
    </b> 
  </p>

</body>

</html>