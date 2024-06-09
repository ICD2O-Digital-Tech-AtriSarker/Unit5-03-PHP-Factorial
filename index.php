<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Factorial Calculator, Using PHP">
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

  <!-- MDL -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Title -->
  <title>Factorial Calculator in PHP</title>
</head>

<body>

  <!-- Header -->
  <h1>Factorial Calculator in PHP</h1>

  <!-- INPUT FORM [used for form validation] -->
  <form id="inputForm" method="post" action="results.php" target="resultFrame">
    <!-- Table For Layout -->
    <table>
      <tr>
        <td>
          <!--  userNum Input -->
          <label for="userNumInput">Enter a Non-Negative Integer:</label>
          <input id="userNumInput" type="number" name="userNum" value="" step="1" min="0" max="" />
          <br>
        </td>
        <td>
          <!-- Image of PHP LOGO -->
          <img class="contentImg" src="./images/phpLogo.svg" alt="PHP Logo!">
          <br>
        </td>
      </tr>
    </table>

    <!-- Results Button -->
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit"
      value="submit" id="resultBtn">Get Result!</button>
  </form>

  <br>

  <!-- Result -->
  <iframe name="resultFrame" src="./results.php">
  </iframe>

</body>

</html>
