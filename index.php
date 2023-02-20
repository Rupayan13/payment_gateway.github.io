<?php
require('config.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

</head>
<body>



    <section class="box">
         <h1>Web Development and Designing Internship</h1>
         <div class="box1">
            <img src="images/logo1.png" alt="No-Pic">
            <h2> <span style="color:red">The </span><span style="color: blue;">Sparks</span><span style="color: green;"> Foundation</span></h2>
         </div>
         <form action="submit.php" method="post">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $publishableKey  ?>"
            data-amount="500"
            data-name="The Sparks Foundation"
            data-description="Web Development Internship"
            data-image="images/logo1.png"
            data-currency="inr"

            
            ></script>
         </form>
    </section>
</body>
</html>