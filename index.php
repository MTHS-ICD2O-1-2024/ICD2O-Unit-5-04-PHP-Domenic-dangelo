<!DOCTYPE html>
<!-- ICS2O-Unit5-04-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Student pricing, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Student pricing, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Student pricing, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/student_discount.jpg" alt="museum discount" />
      </div>
      <p>Enter your age.</p>
      <br />
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="userAge" name="userAge" />
          <label class="mdl-textfield__label" for="userAge">Age ...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <div>Select the date you are going.</div>
        <br />
        <div class="radio-group" style="display: flex; flex-wrap: wrap; gap: 20px; align-items: center;">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-sunday">
            <input type="radio" id="option-sunday" class="mdl-radio__button" name="day" value="sunday" checked>
            <span class="mdl-radio__label">Sunday</span>
          </label>

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-monday">
            <input type="radio" id="option-monday" class="mdl-radio__button" name="day" value="monday">
            <span class="mdl-radio__label">Monday</span>
          </label>

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-tuesday">
            <input type="radio" id="option-tuesday" class="mdl-radio__button" name="day" value="tuesday">
            <span class="mdl-radio__label">Tuesday</span>
          </label>

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-wednesday">
            <input type="radio" id="option-wednesday" class="mdl-radio__button" name="day" value="wednesday">
            <span class="mdl-radio__label">Wednesday</span>
          </label>

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-thursday">
            <input type="radio" id="option-thursday" class="mdl-radio__button" name="day" value="thursday">
            <span class="mdl-radio__label">Thursday</span>
          </label>

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-friday">
            <input type="radio" id="option-friday" class="mdl-radio__button" name="day" value="friday">
            <span class="mdl-radio__label">Friday</span>
          </label>

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-saturday">
            <input type="radio" id="option-saturday" class="mdl-radio__button" name="day" value="saturday">
            <span class="mdl-radio__label">Saturday</span>
          </label>
        </div>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Show results
        </button>
      </form>
    </main>
  </div>
</body>

</html>