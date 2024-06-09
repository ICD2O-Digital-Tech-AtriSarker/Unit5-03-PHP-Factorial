
<!-- CSS -->
<link rel="stylesheet" href="./css/style.css">

<b id="outputResult">
  <?php

  if (isset($_POST['userNum'])) {

    // Get userNum, limit of 172 as any factorial past that will evaluate to Infinity
    $userNum = min(intval($_POST['userNum']), 172);

    /// Initalize Factorial Product
    $product = 1;

    // Initialize counter
    $counter = 1;

    // Do While Loop to calculate factorial
    do {

      // Amplify/Multiply product by counter
      $product *= $counter;

      // Increment Counter
      $counter += 1;

    } while ($counter <= $userNum);

    // Display Result
    echo "$product";

  }

  ?>
</b> 
