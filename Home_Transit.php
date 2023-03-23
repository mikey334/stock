<?php
require_once("includes/initialize.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['UserName'];?></title>
    <link rel="stylesheet" href="css/Style_Home.css">
</head>
<body>

<!-- navbar -->
<div class="navbar"> 
    <div class="navbar_logo"><img src="img/logo.png" width="87" alt=""> </div>
    <div class="navbar_title">
        F.D.R.E Minstry of Defence Communction & <abbr title="Information Main Department"> IMD</abbr></div>
     <div class="serachbar"><input type="search" name="" placeholder=' Search ...' id=""></div>
       
     <div class="profile" titel="Profile"> <?php
            $mydb->setQuery("SELECT * FROM User_profile WHERE `UserName`='{$_SESSION['UserName']}'");
            $cur = $mydb->loadResultList("1");
            if ($mydb->affected_rows()==0){
                echo '  ';
                echo '<img src="./img/user-avatar-with-check-mark.png" class="img-thumbnail"/>';
            }
            foreach($cur as $object){
                echo '
    <img src="./uploads/'. $object->filename.'" title="'. $object->UserName.'" width="50"/>
';
            }
?> 
        </div>
            <div class="profile_Detile">
                   <div class="profile_titel">Profile<button title="Edit">✏️</button></div>

              <ul><li> Name : <?php echo $_SESSION['Full_Name'];?></li>
              <li>Position : <?php echo $_SESSION['Position'];?></li>
              <li>User_Name : <?php echo $_SESSION['UserName'];?></li>
              <li><button type="submit" id="profile_pic" onclick="profile_pic()" title="Add New profile Pictuer" id="add">+ Add profile</button></li>
               <li><a href="logout.php"> <img src="img/enter (1).png" width="25">Logout</li></a>
              </ul>
              
    </div>
    </div>
    <div id="Uplode_photo" class="uplode_Profile_picture">
        <div class="card_Header">Uplod Profile Picture  <button id="cancel" onclick="canceler()" name="upload">X</button></div><br>
        <div class="card-body"> <form action="save_profile.php" enctype="multipart/form-data" method="post">
            <input type="file" name="upload_file" id="">
            <br>
            <button type="submit" name="savelogo">Uplod</button>

        </form>
        </div>

    </div>


<div class="dashborde">
<div class="recent">
    <div class="Recent_titel">Recently Rceieved </div>


    <?php
            $mydb->setQuery("SELECT * FROM model_1 WHERE `Position`='{$_SESSION['Position']}'");
            $cur = $mydb->loadResultList();
        foreach ($cur as $Model){
echo  "<div class='Model_1'>";            

echo "<div class='ModelHeader'> Model 1 (ሞዴል አንድ) <button id='down' title='See More' onclick='down()'>↕️</button></div>";

echo "<div class='Model1_List'>
<div class='model1_List_Titel'>Goods Receiving Note 
    <br>(የዕቃ መረክቢያ ሠነድ)
</div><br><br>";
echo "<div class='Model1_List_Header_conteiner'>";
echo "<div class='model1_list_Head_Left'>
    1. Supplier : $Model->Supplier
<br>
    2. Category : $Model->Category

</div>";
echo " <div class='model1_list_Head_center'>
   3. PR.NO : $Mode1->Prnumber
   <br>
   4. Date :  $Model->Date
</div>";
echo "<div class='model1_list_Head_center_tow'>
    5. Invoice NO : $Model->InvoiceNo
    <br>
    6. Make & Model : $Model->MakerM
 </div>";
 echo "<div class='model1_list_Head_center_rigth'>
    7. PO.(Contract) No : $Model->PO
    <br>
    8. No :  $Model1->NO
<br>
    9. Posted by : $Model1->Postedby

    <label>Sing Date ፊርማና ቀን</label>
    <input type='checkbox'>
 </div>
</div>"
;     

echo "<div class='model1_List_body_Contontiner'>
<div class='Mode1_List_body_left1'>
    11. Stock (Part) No <br><br> <br> $Model->StockNo
</div>

<div class='Mode1_List_body_left2'>
    12. Description <br><br> <br> $Model->Description
</div>
<div class='Mode1_List_body_center1'>
    13. U/N     <br><br> <br> $Model->UN
</div>
<div class='Mode1_List_body_center2'>
    14. Qty       <br><br> <br> $Model->Qty
</div>
<div class='Mode1_List_body_center3'>
    15. Unit Price <br><br> <br> $Model->UnitPrice
</div>
<div class='Mode1_List_body_center4'>
    16.Amount    <br><br> <br> $Model->Amount
</div>
<div class='Mode1_List_body_rigth1'>
    17. Location  <br><br> <br> $Model->Location
</div>
<div class='Mode1_List_body_rigth2'>
    18.ReMark   <br><br> <br> $Model->Remark
</div>

</div>

<div class='model1_List_footer_Contontiner'>
    <div class='model1_List_footer_Contontiner_left'>
        19. Inspected by Name : $Model->Inspected
             <br>
             Titel :
             <br>
             Sing.Date : <input type='checkbox' > 
    </div>
    <div class='model1_List_footer_Contontiner_center'>
        20. Rec by Name :$Model->RecbyName
             <br>
             Titel :
             <br>
             Sing.Date : <input type='checkbox' > 
    </div>
   <div class='model1_List_footer_Contontiner_center'>
        21. Auth by Name:$Model->AUTHby
             <br>
             Titel :
             <br>
             Sing.Date : <input type='checkbox' > 
    </div>
</div>



</div></div><br>";
}
?>




   
    <div class="Model_19">
        <div class='ModelHeader'><div class=""> Model 19 (ሞዴል አስራዘጠኝ) </div> <div class=""><button id='down' title='See More' onclick='down19()'>↕️</button></div></div>  
<div class="model19_body">
<div class="Model19_Body_titel">
    Receiption For Articles or Property Received <br> (የዕቃ ወይም የንብረት ገቢ ደረስኝ)
</div>
<div class="Model19_body_Header">
<div class="Model19_header_left">
    <form action="save_model19.php" method="post">
    Department : <select name="Department" id="" required> 
        <option value="Stock"> Stock</option>
        <option value="Spear">Spear</option>
        <option value="Power">Power</option>
        <option value="Electronics">Electronics</option>
        <option value="VHF">VHF</option>
        <option value="HF">HF</option>
                                    </select>
</div>
<div class="Model19_header_right">
    1. Item NO. in Expenditure Rehistry : <input type="text" name="Item_NO" required> 
    <br>
    2. No.of entry in the register of incoming Goods : <input type="text" name="No_of_entry" required>
    
    <br>
    3. Classification of Stock : <input type="text" name="Classification" required>
    <br>
    4. Store No. <input type="text" name="Store_No" required>
    <br>
    5. Shelf No. <input type="text" name="Shelf_No" required>
</div>
</div>
<div class="Model19_body_Top">
    Name : <input type="text" name="Name" required>   Received the following : <input type="text" name="Received" required>

   Day <input type="date" name="Day" id="" required>  From <input type="text" name="FromG" id="" required> Rceieved
</div>
<br>
<div class="Model19_body_center">
    <div>Serial No. <br><br><input type="text" name="Serial_No" required> </div>
    <div title="Detalled Description of Articles or Property" >
 Description <br><br><input type="text" name="Description" required> </div>
    <div>Model <br><br><input type="text" name="Model" required> </div>
    <div>Series <br><br><input type="text" name="Series" required> </div>
    <div>Quantity <br><br><input type="text" name="Quantity" required> </div>
    <div>Unit Price <br><br><input type="text" name="Unit_Price" required> </div>
    <div>Totalprice <br><br><input type="text" name="Total_price" required> </div>
</div>
<br><br><br><br><br><br>
<div class="Model19_body_Footer">
    <div>Deliverer (Donor) <br> <input type="text" name="Deliverer_Donor" placeholder="Name" required> <br> <input type="checkbox" name="" id=""> Sing </div>
    <div>Deliverer (Receipient)  <br> <input type="text" name="Deliverer_Receipient" placeholder="Name" required> <br> <input type="checkbox" name="" id=""> Sing</div>
</div>
<br><br>
<button type="submit" class="btnsend">Send</button></form>
<button type="submit" onclick="re19()" class="btncal">Cancel</button>


</div>
</div>
</div>
</div>


<style>
   
</style>




<script src="js/js.js"></script>

</body>
</html>