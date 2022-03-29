<?php
//include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <script type="text/javascript" src="js.js"></script>
</head>

<body>
  <div class="wrapper">
    <form class="form" method="post" action="send.php" enctype="multipart/form-data">
      <div class="pageTitle title">Send Email </div>
      <div class="secondaryTitle title">Please fill this form to send Email.</div>
      <input type="text" class="email formEntry" placeholder="Name:" name="sender_name"  />
      <input type="text" class="email formEntry" placeholder="From Email:" name="from_email"/>
      <input type="text" class="email formEntry" placeholder="To Email:" name="to_email">
      <input type="text" class="email formEntry" placeholder="Subject:" name="subject">
      <textarea class="message formEntry" placeholder="Message" name="message"></textarea>
      <input type="submit"  class="submit formEntry"  name="submit" value="Send">
    </form>
  </div>
 </body>

</html>