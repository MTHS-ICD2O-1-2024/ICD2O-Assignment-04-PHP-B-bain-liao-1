<!DOCTYPE html>
<!-- ICS2O-Assignment-04-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Hot Chocolate Café, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Bain Liao" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Hot Chocolate Café, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Hot Chocolate Café, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/hot_chocolate.png" alt="Hot Chocolate" />
      </div>
      <br />
      <?php
      $TAX_RATE = 0.13;

      // Constants for size prices
      $SMALL_PRICE = 2.5;
      $MEDIUM_PRICE = 3.0;
      $LARGE_PRICE = 5.0;

      // Constants for chocolate prices
      $MILK_CHOCOLATE_PRICE = 0;
      $WHITE_CHOCOLATE_PRICE = 0.5;
      $DARK_CHOCOLATE_PRICE = 0.5;
      $RUBY_CHOCOLATE_PRICE = 1;

      $sizeOfDrink = $_GET['size-of-drink'];
      $typeOfChocolate = $_GET['type-of-chocolate'];
      $numberOfToppings = (int)$_GET['number-of-toppings'];

      $costOfSize = 0;
      $costOfChocolate = 0;
      $costOfToppings = $numberOfToppings * 0.5;

      // Processes
      if ($sizeOfDrink === "small") {
        $costOfSize = $SMALL_PRICE;
      } else if ($sizeOfDrink === "medium") {
        $costOfSize = $MEDIUM_PRICE;
      } else {
        $costOfSize = $LARGE_PRICE;
      }

      if ($typeOfChocolate === "milk") {
        $costOfChocolate = $MILK_CHOCOLATE_PRICE;
      } else if ($typeOfChocolate === "white") {
        $costOfChocolate = $WHITE_CHOCOLATE_PRICE;
      } else if ($typeOfChocolate === "dark") {
        $costOfChocolate = $DARK_CHOCOLATE_PRICE;
      } else {
        $costOfChocolate = $RUBY_CHOCOLATE_PRICE;
      }

      // Calculate the total cost
      $subtotalCost = $costOfSize + $costOfChocolate + $costOfToppings;
      $amountTaxed = $subtotalCost * $TAX_RATE;
      $totalCost = $subtotalCost + $amountTaxed;

      // Display the results
      echo "A " . $sizeOfDrink . " " . $typeOfChocolate . " hot chocolate with " . $numberOfToppings . " toppings. <br>";
      echo "Total: $" . number_format($totalCost, 2) . "<br>";
      echo "Tax: $" . number_format($amountTaxed, 2) . "<br>";
      echo "Subtotal: $" . number_format($subtotalCost, 2) . "<br>";
      ?>
  </div>
  </main>
</body>

</html>