<?php
ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
use GuzzleHttp\Client;
require_once 'vendor/autoload.php';
$errors =array();

if (isset($_POST['reset-password'])) {

  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
 $query = "SELECT Email FROM users WHERE Email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token') ON DUPLICATE KEY UPDATE email = '$email', token ='$token' ";
    $results = mysqli_query($db, $sql);




$client = new Client();

$options = [
    'json' => [
        'task' => "مرحبا , اضغط على رابط  <a href=\"https://rondili.com/new_pass.php?token=". $token ."\">من هنا </a> لتحديث كلمة السر في موقع رونديلي",
        'due' => 'now',
        'email' => $email

    ]
];

$promise = $client-> post("https://prod-12.francecentral.logic.azure.com:443/workflows/f833a55e56a8400a9a6088a5d972dabc/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=QHPu16-ilv9l_KNP8ksEjv9nYTmh1238FNxiGnKm-Iw", $options);
    
    header("location: pending.php?email=".$email);
  }

}

if (isset($_POST['new_password'])) {
  $token = $_GET['token'];
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);
  
  // Grab to token that came from the email link
  
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table
    $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
      $sql = "UPDATE users SET Password='$new_pass' WHERE Email='$email'";
      $results = mysqli_query($db, $sql);
      header('location: my-profile.php');
    }
  }
}
?>
