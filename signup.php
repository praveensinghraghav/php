<?php
include'sign.php';
?>
<!doctype html>

<html>
<head>
  <title>love-e-connect</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
  <script src="../../webcomponentsjs/webcomponents-lite.js"></script>
  <link rel="import" href="bower_components/iron-icons/iron-icons.html">
  <link rel="import" href="bower_components/paper-toolbar/paper-toolbar.html">
  <link rel="import" href="bower_components/font-roboto/roboto.html"> 
  <link rel="import" href="bower_components/paper-button/paper-button.html">
  <link rel="import" href="bower_components/paper-checkbox/paper-checkbox.html">
  <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
  <link rel="import" href="bower_components/paper-fab/paper-fab.html">
  <link rel="import" href="bower_components/paper-tabs/paper-tabs.html">
  <link rel="import" href="bower_components/paper-toast/paper-toast.html">
  <link rel="import" href="bower_components/paper-shadow/paper-shadow.html">
  <link rel="import" href="bower_components/paper-styles/color.html">
  <link rel="import" href="bower_components/paper-input/paper-input.html">
  <link rel="import" href="bower_components/paper-card/paper-card.html">
  <link rel="import" href="bower_components/paper-toggle-button/paper-toggle-button.html">
  <link rel="import" href="bower_components/paper-header-panel/paper-header-panel.html">
  <link rel="import" href="bower_components/paper-ripple/paper-ripple.html">
  <link rel="import" href="bower_components/paper-menu-button/paper-menu-button.html">
  <link rel="import" href="bower_components/paper-menu/paper-menu.html">
  <link rel="import" href="bower_components/paper-item/paper-item.html">
  <link rel="import" href="bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
  <link rel="import" href="bower_components/paper-progress/paper-progress.html">
  <link rel="import" href="bower_components/paper-listbox/paper-listbox.html">
  <link rel="import" href="bower_components/iron-form/iron-form.html">
   <link rel="import" href="bower_components/paper-radio-button/paper-radio-button.html">
  <link rel="import" href="simple-element.html">
  <link rel="stylesheet" href="styles.css">
</head>
<body unresolved>
 <!--Header Image-->
      <paper-progress></paper-progress>

   <div id="img_header_location">
  <a href="#"><img src="images/a5.png" id="img_size"></a>
   </div>
   <!------------------------------------------------------------------------->
   
   <!--Tab Menu-->
<!--   <paper-tabs selected="0">-->
<!--  <paper-tab>Home</paper-tab>-->
<!--  <paper-tab>Developer</paper-tab>-->
<!--  <paper-tab>Books</paper-tab>-->
<!--  <paper-tab>About Us</paper-tab>-->
<!--  <paper-tab href="signup.html">Sign Out</paper-tab>-->
<!--</paper-tabs>-->


<paper-tabs selected="0">
  <paper-tab link>
    <iron-icon icon="home"></iron-icon>
    <a href="index.php" class="horizontal center-center layout">Home</a>
  </paper-tab>
  <paper-tab link>
    <iron-icon icon="face"></iron-icon>
    <a href="team.php" class="horizontal center-center layout">About Us</a>
  </paper-tab>
  <paper-tab link>
  <iron-icon icon="account-circle"></iron-icon>
    <a href="signup.php" class="horizontal center-center layout">Sign Up</a>
  </paper-tab>
  
</paper-tabs>
   <!------------------------------------------------------------------------->
   
   <!--Tab Menu-->

<!--------------------------------------------------------------------------->
 
 <!--Header Image Part
 <paper-material id="header"  elevation=5>


 
 <!------------------------------------------------------------------------>
 <!--Content-->
   
<!--Login Card Panel-->
<paper-card  id="login_sign" image="images/a1.png" elevation=5>
  <paper-fab icon="account-circle" id="float_icon" elevation=5></paper-fab>
  <div class="card-content">
    <form method="post" action="sign.php">
    <paper-input label="Username" required auto-validate error-message="Invalid input!" name="username" type="text"></paper-input>
    <br><paper-input label="Email ID" required auto-validate error-message="Invalid input!" name="email" type="email"></paper-input>
    <br><paper-input label="Password"  required auto-validate name="password" error-message="Invalid input!" type="password"></paper-input>
    <br><paper-input label="Gender" required auto-validate name="gender" error-message="Invalid input!" type="text"></paper-input>
    <br><paper-input label="Date Of Birth (DD/MM/YYYY)" required auto-validate error-message="Invalid input!" name="dob" type="text"></paper-input>
    <br><paper-input label="State" required name="state" type="text"></paper-input>
<br><paper-input label="City" required name="city" type="text"></paper-input>
    <br><paper-checkbox checked>Agree Terms & Conditions</paper-checkbox>
    <paper-input type="submit" ></paper-input>
  </div> </form>
 <!-- <div class="card-actions">
    <paper-button raised
              onclick="submitHandler(event)">Submit</paper-button>
          <paper-button raised
              onclick="resetHandler(event)">Reset</paper-button>
   
  </div>-->

  
</paper-card> 
</paper-material>

 <paper-material id="cont" elevation="5">
  <p>LOVE E CONNECT&copy;2015</p>
</paper-material>

 
<!-------------------------------------------------------------------------->
<script>
  var progress = document.querySelector('paper-progress');
    var button = document.querySelector('paper-button');

    var repeat, maxRepeat = 5, animating = false;

    function nextProgress() {
      animating = true;
      if (progress.value < progress.max) {
        progress.value += (progress.step || 1);
      } else {
        if (++repeat >= maxRepeat) {
          animating = false;
          button.disabled = false;
          return;
        }
        progress.value = progress.min;
      }

      requestAnimationFrame(nextProgress);
    }

    function startProgress() {
      repeat = 0;
      progress.value = progress.min;
      button.disabled = true;
      if (!animating) {
        nextProgress();
      }
    }

    window.addEventListener('WebComponentsReady', function() {
      startProgress();
    });
    
    
</script>
<script>
    document.getElementById('formGet').addEventListener('iron-form-submit', display);
    document.getElementById('formPost').addEventListener('iron-form-submit', display);

    function display(event) {
      var output = document.getElementById('output');
      output.innerHTML = JSON.stringify(event.detail);
    }

    function submitHandler(event) {
      Polymer.dom(event).localTarget.parentElement.submit();
    }
    function resetHandler(event) {
      Polymer.dom(event).localTarget.parentElement.reset();
    }
</script>
  <script src="main.js"></script>

</body>
</html>

