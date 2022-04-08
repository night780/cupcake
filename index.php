<!--
Author: Jacob Jonas
Date: 4/7/22
Class: Sdev 328
Project: PHP & GitHub practise Cupcake Form
Page: index.php
-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<html>
<body>

<h3>Cupcake Fundraiser</h3>

<form action="process.php" method="post">

<!--Enter Name-->
<p>Your name:</p>
    <input type="text" name="name" placeholder="Please enter your name."><br><br>

<!--Cupcake flavor selection-->
    <h4>Cupcake flavors:</h4>
    <input type="checkbox" name="flavor[]" value = "The Grasshopper">The Grasshopper<br>
    <input type="checkbox" name="flavor[]" value = "Whisky Maple Bacon">Whisky Maple Bacon<br>
    <input type="checkbox" name="flavor[]" value = "Carrot Walnut">Carrot Walnut<br>
    <input type="checkbox" name="flavor[]" value = "Salted Carmel Cupcake">Salted Carmel Cupcake<br>
    <input type="checkbox" name="flavor[]" value = "Red Velvet">Red Velvet<br>
    <input type="checkbox" name="flavor[]" value = "Lemon Drop">Lemon Drop<br>
    <input type="checkbox" name="flavor[]" value = "Tiramisu">Tiramisu<br><br>

<!--Place Order Button-->
    <button type="submit" class="btn btn-success">Order</button>
</form>

</body>
</html>
