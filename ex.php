<!doctype>
<html>
<head>
<a href = "logout.php">Sign Out</a>
</head>
<body>
<?php
require_once "Classes/PHPExcel.php";
include("session.php");

$tmpfname="index1.xlsx";
$excelReader=PHPExcel_IOFactory::createReaderForFile($tmpfname);
$excelObj=$excelReader->load($tmpfname);
$worksheet=$excelObj->getActiveSheet();
$lastRow=$worksheet->getHighestRow();
echo "<table>";
for($row=1;$row<=$lastRow;$row++)
{
	echo "<table><tr><td>";
	echo $worksheet->getCell('A'.$row)->getValue();
	echo "</td><td>";
	echo $worksheet->getCell('B'.$row)->getValue();
	echo "</td><td>";
	echo $worksheet->getCell('C'.$row)->getValue();
	echo "</td><td>";
	echo $worksheet->getCell('D'.$row)->getValue();
	echo "</td><td>";
	echo $worksheet->getCell('E'.$row)->getValue();
	echo "</td></tr>";
}
echo "</table>";
?>
</body>
</html>