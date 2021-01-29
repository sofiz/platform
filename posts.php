<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
    <title></title>
  </head>

  <?php include('topbar.php'); ?>
  <body>
    <div class="container">
      <textarea name="posttextarea" class="posttextarea" placeholder="write your text here"></textarea>
      <div class="btnscontainer">
        <button type="button" name="upload" class="button" id="upload">upload</button>
        <button type="button" name="upload" class="button" id="submitpost">submit</button>

      </div>
      <div class="filterscontain">
        <div class="jobdrop">
          <select class="dropdown" name="jobs" id="jobs">

          </select>
        </div>
        <div class="wilayadrop">
          <select class="dropdown" name="wilayas" id="wilayas">

          </select>
        </div>
        <input type="radio" name="offer" value="offer" class="radio">
        <div class="filtersradiotxt">
          <p>job</p>
        </div>
        <input type="radio" name="looking" value="looking" class="radio">
        <div class="filtersradiotxt">
          <p>offer</p>
        </div>
      </div>
      <div class="post">
        <div class="imgcontain">
          <img src="imgs/default.png" alt="">
        </div>
        <div class="name">
          <p class="nametxt">username username</p>
        </div>
        <div class="posttxtdiv">
          <p class="posttxt">this is Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="commentsection">
          <div class="comimgconatin">
            <img src="imgs/default.png" alt="">
          </div>
          <div class="comname">
            <p class="comenametxt">commentor name</p>
          </div>
          <div class="comtext">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae</p>
          </div>
        </div>
        <div class="commentorsection">
          <div class="comimgconatin">
            <img src="imgs/default.png" alt="">
          </div>
          <input type="text" name="comment" value="" class="inputcom">
          <button type="submit" name="submitcomment" class="submitcom"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </body>
</html>
