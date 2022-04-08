<!--
Author: Jacob Jonas
Date: 4/7/22
Class: Sdev 328
Project: PHP & GitHub practise Cupcake Form
Page: process.php
-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<?php
$flavor = $_POST['flavor'];
$name = $_POST['name'];

if($name == ""){//If name is entered [success]
    ?>
    <br>
<h1 class="btn btn-warning"> Name not entered!</h1>
<!--  Prints an friendly error Message -->
    <?php
}
if($name != ""){//If name is not entered [fail]
    echo "<p>Thank you, $name, for your order!</p>";
}

if($flavor == ""){//If flavor is not selected [fail]
    ?>
    <br>
    <h1 class="btn btn-warning"> Flavor not entered!</h1>
<br>
    <h1 class="btn btn-danger"> Order Not placed</h1>
    <!--  Prints an friendly error Message -->
    <?php
}
$cost = count($flavor);

if($flavor != ""){//If flavor is selected [success]
    echo"<p>Order summary:</p>";
    $flavor = implode("<br>", $_POST['flavor']);//Breaks up output into more digestible format
    echo $flavor;
    $cost = $cost * 3.5;//Each cupcake is $3.50 (price of each * count of array)

    echo "<br><p>Order Total: $$cost </p>";
}



