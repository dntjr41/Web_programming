<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
	array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Toyota", 5, 2),
    array("Hyundai", 17, 15)
);

echo $car[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2]."<br>";
echo $car[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br>";
echo $car[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br>";
echo $car[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br>";

?> 

</body>
</html>
