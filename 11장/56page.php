<!DOCTYPE html>
<html>
<body>

<table border=1 cellpadding=2>
<tr><th>Row number</th><th>Name1</th>
	<th>Name2</th><th>Name3</th></tr>

<?php
$family = array(
	"Griffin" => array("Peter", "Lois", "Megan"),
    "Quagmire" => array("Glenn"),
    "Brown" => array("Cleveland", "Leretta", "Junior")
);

for ($row = 0; $row < 3; $row++) {
	{
    echo "<tr><td>$row</td>";
    echo "<td>".$family["Griffin"][$row]. "</td>";
    echo "<td>".$family["Quagmire"][$row]. "</td>";
    echo "<td>".$family["Brown"][$row]. "</td>";
	}
    echo "</tr>";
}



?> 

</body>
</html>
