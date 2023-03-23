<?php
require_once('includes/initialize.php');

$Stock_Num=$_POST['Stock_Num'];
$Description=$_POST['Description'];
$Location=$_POST['Location'];
$Interchangeability=$_POST['Interchangeability'];
$Model=$_POST['Model'];
$Qty_per_box=$_POST['Qty_per_box'];
$Catagory=$_POST['Catagory'];
$Condition=$_POST['Condition'];
$U_M=$_POST['U_M'];
$Light_Box_per_Stack=$_POST['Light_Box_per_Stack'];
$Date=$_POST['Date'];
$Vouch_No=$_POST['Vouch_No'];
$Recived_from=$_POST['Recived_from'];
$Lot_No=$_POST['Lot_No'];
$Qty_Issued=$_POST['Qty_Issued']; 
$Balance=$_Post['Balance'];
$Mo_of_Box=$_POST['Mo_of_Box'];
$Posted_by=$_POST['Posted_by'];
$Department=$_SESSION['Position'];
$created =  strftime("%Y-%m-%d %H:%M:%S", time());


global $mydb;
$mydb->setQuery ( "INSERT INTO `bincard` ( `Stock_Num`, `Description`, `Location`, `Interchangeability`, `Model`, `Qty_per_box`, `Catagory`, `Condition`, `U/M`, `Light_Box_per_Stack`, `Date`, `Vouch_No`, `Recived_from`, `Lot_No`, `Qty_Issued`, `Balance`, `Mo_of_Box`, `Posted_by`, `Department`, `Created`) 
VALUES  ('{$Stock_Num}','{$Description}','{$Location}','{$Interchangeability}','{$Model}','{$Qty_per_box}','{$Catagory}','{$Condition}','{$U_M}','{$Light_Box_per_Stack}','{$Date}','{$Vouch_No}','{$Recived_from}','{$Lot_No}','{$Qty_Issued}','{$Balance}','{$Mo_of_Box}','{$Posted_by}','{$Department}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {
        
    echo "<script type=\"text/javascript\">
    alert(\"Bin Card Saved Successfuly to $Department.\");
    window.location = history.back();
</script>";
} else{

echo "<script type=\"text/javascript\">
 alert(\"fail.\");
 window.location = history.back();
</script>";
}


//?>
