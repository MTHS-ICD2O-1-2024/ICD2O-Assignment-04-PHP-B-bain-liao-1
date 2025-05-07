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
      <div class="page-content">Sizes:</div>
      <br />
      <form action="answer.php" method="GET">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="small">
          <input type="radio" id="small" class="mdl-radio__button" name="size-of-drink" value="small" checked>
          <span class="mdl-radio__label">Small</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="medium">
          <input type="radio" id="medium" class="mdl-radio__button" name="size-of-drink" value="medium">
          <span class="mdl-radio__label">Medium</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="large">
          <input type="radio" id="large" class="mdl-radio__button" name="size-of-drink" value="large">
          <span class="mdl-radio__label">Large</span>
        </label>
        <br />
        <br />
        <div class="page-content">Type Of Chocolate:</div>
        <br />
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="milk">
          <input type="radio" id="milk" class="mdl-radio__button" name="type-of-chocolate" value="milk" checked>
          <span class="mdl-radio__label">Milk</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="white">
          <input type="radio" id="white" class="mdl-radio__button" name="type-of-chocolate" value="white">
          <span class="mdl-radio__label">White ($0.50)</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dark">
          <input type="radio" id="dark" class="mdl-radio__button" name="type-of-chocolate" value="dark">
          <span class="mdl-radio__label">Dark ($0.50)</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ruby">
          <input type="radio" id="ruby" class="mdl-radio__button" name="type-of-chocolate" value="ruby">
          <span class="mdl-radio__label">Ruby ($1.00)</span>
        </label>
        <br />
        <br />
        <div class="page-content">Number of Toppings:</div>
        <br />
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="1">
          <input type="radio" id="1" class="mdl-radio__button" name="number-of-toppings" value="1" checked>
          <span class="mdl-radio__label">1</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2">
          <input type="radio" id="2" class="mdl-radio__button" name="number-of-toppings" value="2">
          <span class="mdl-radio__label">2</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="3">
          <input type="radio" id="3" class="mdl-radio__button" name="number-of-toppings" value="3">
          <span class="mdl-radio__label">3</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="4">
          <input type="radio" id="4" class="mdl-radio__button" name="number-of-toppings" value="4">
          <span class="mdl-radio__label">4</span>
        </label>
        <br />
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Order
        </button>
      </form>
  </div>
  </main>
  </div>
</body>

</html>