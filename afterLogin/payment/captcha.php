<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Captcha in JavaScript</title>
  <link rel="stylesheet" href="css/captcha.css">
  <!-- Font Awesome CDN Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapperRecaptcha" id="mainDivHideing">
    <h3 style="text-align: center;">Verify That You Are Not Roobot</h3>
    <div class="captcha-area">
      <div class="captcha-img">
        <img src="bankImages/captcha-bg.png" alt="Captch Background">
        <span class="captcha"></span>
      </div>
      <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
    </div>
    <form action="#" class="input-area">
      <input type="text" placeholder="Enter captcha" maxlength="5" spellcheck="false" required>
      <button class="check-btn">Check</button>
    </form>
    <div class="status-text"></div>
  </div>

  <script src="js/captcha.js"></script>
</body>
</html>
