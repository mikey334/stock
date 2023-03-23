<?php
require_once("includes/initialize.php");

$Department =$_POST['Department'];
$Item_NO =$_POST['Item_NO'];
$No_of_entry =$_POST['No_of_entry'];
$Classification =$_POST['Classification'];
$Store_No =$_POST['Store_No'];
$Shelf_No =$_POST['Shelf_No'];
$Name =$_POST['Name'];
$Received =$_POST['Received'];
$Day =$_POST['Day'];
$FromG =$_POST['FromG'];
$Serial_No =$_POST['Serial_No'];
$Description =$_POST['Description'];
$Model =$_POST['Model'];
$Series =$_POST['Series'];
$Quantity =$_POST['Quantity'];
$Unit_Price =$_POST['Unit_Price'];
$Total_price =$_POST['Total_price'];
$Deliverer_Donor =$_POST['Deliverer_Donor'];
$Deliverer_Receipient =$_POST['Deliverer_Receipient'];


global $mydb;
$mydb->setQuery ( "INSERT INTO `model_19` (`Department`, `Item_NO`, `No_of_entry`, `Classification`, `Store_No`, `Shelf_No`, `Name`, `Received`, `Day`, `FromG`, `Serial_No`, `Description`, `Model`, `Series`, `Quantity`, `Unit_Price`, `Total_price`, `Deliverer_Donor`, `Deliverer_Receipient`)
VALUES  ('{$Department}','{$Item_NO}','{$No_of_entry}','{$Classification}','{$Store_No}','{$Shelf_No}','{$Name}','{$Received}','{$Day}','{$FromG}','{$Serial_No}','{$Description}','{$Model}','{$Series}','{$Quantity}','{$Unit_Price}','{$Total_price}','{$Deliverer_Donor}','{$Deliverer_Receipient}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {
        
    echo "<script type=\"text/javascript\">
    alert(\"Model 19 Send Successfuly to $Department.\");
    window.location = history.back();
</script>";
} else{

echo "<script type=\"text/javascript\">
 alert(\"fail.\");
 window.location = history.back();
</script>";
}


//?>








