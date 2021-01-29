<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="referral.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
    <title>برنامج الاحالة - rondili</title>
  </head>
  <body>
    <?php include 'topbar.php'; ?>
    <div class="container">
      <p>للمشاركة في برنامج الاحالة يمكنك نسخ الرابط الخاص بك و مشاركته مع أصدقائك ستحصل على نقاط لكل شخص يقوم بالتسجيل عن طريق رابطك.</p>
      <p>: رابطك هو</p>
      <input type="text" name="" value="rondili.com/ss" id="reflink" ReadOnly>
      <button type="button" onclick="copy()" name="copy" id="copybtn"><i class="fa fa-clipboard" aria-hidden="true" style="font-size:16px;color: #0082bc;"></i></button>
      <p id="nikatok">: نقاطك </p>
      <p id="score">0</p>
      <button type="button" name="button" id="withdraw">تحويل النقاط إلى مال</button>
    </div>

  </body>
  <script type="text/javascript">
  function copy() {
/* Get the text field */
var copyText = document.getElementById("reflink");

/* Select the text field */
copyText.select();
copyText.setSelectionRange(0, 99999); /* For mobile devices */

/* Copy the text inside the text field */
document.execCommand("copy");
  alert("Copied the text: " + copyText.value);

}
  </script>
</html>
