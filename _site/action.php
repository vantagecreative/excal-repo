<!doctype html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Excalibur Moving Group</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="robots" content="noindex" />
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600|Nunito:400,600,800" rel="stylesheet">
  <link rel="stylesheet" href="/css/hover.css" media="screen">
  <link rel="stylesheet" href="/css/style.css" media="screen">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://parsleyjs.org/dist/parsley.js"></script>
  <?php
    $to = "van@vanriss.com";
    $subject = "You have a new lead!";
    $headers = "From: van@vanriss.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $zipto = $_POST['zipto'];
    $zipfrom = $_POST['zipfrom'];
    $rooms = $_POST['rooms'];
    $date = $_POST['date'];
    $txt = "Date: " . $date . " | Name: " . $name . " | Phone: " . $phone . " | Rooms: " . $rooms . " | Location: " . $zipfrom . " - " . $zipto;
    mail($to,$subject,$txt,$headers);
    if (mail ($to, $subject, $txt, $from)) { 
       $success = "Request successfully sent.";
    } else {
        $success = "Request Failed, try again.";
    }
  ?>
</head>
<body class="home" style="background:#cccccc;">
    <header role="banner">
    <a href="/index.html">
      <img src="/images/logo.png" class="logo">
    </a>
      <nav>
        <ul>
          <li>
            <a class="hvr-backward phone" style="color:#232323" href="tel:(888) 204-0718">
              <span class="flaticon-phone-outline"></span> <tel class="mobile-hide">(888) 204-0718</tel>
            </a>
          </li>
        </ul>
      </nav>
  </header>
    <div class="success">
				<h1><?php if(isset($success)){ echo $success; } ?></h1>
				<a href="http://excaliburmovinggroup.com">Visit the Official Website</a>
		</div>