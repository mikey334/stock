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
    <link rel="stylesheet" href="css/style_home.css">
</head>
<body>

<!-- navbar -->
<div class="navbar"> <div class="Menutoggler"><img src="img/settings.png" width="35" alt="">
</div>
    <div class="navbar_logo"><img src="img/logo.png" width="87" alt=""> </div>
    <div class="navbar_title">
        F.D.R.E Minstry of Defence Communction & <abbr title="Information Main Department"> IMD</abbr></div>
     <div class="serachbar"><input type="search" name="" placeholder=' Search ...' id=""></div>
       
     <div class="profile" titel="Profile"> <?php
            $mydb->setQuery("SELECT * FROM User_profile WHERE `UserName`='{$_SESSION['UserName']}'");
            $cur = $mydb->loadResultList("1");
            if ($mydb->affected_rows()==0){
                echo '  ';
                echo '<img src="./img/user-avatar-with-check-mark.png" title="'. $object->UserName.'" class="img-thumbnail"/>';
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
        <div class="card_Header">Uplod Profile Picture  <button class="btncan" id="cancel" onclick="canceler()" name="upload">X</button></div><br>
        <div class="card-body"> <form action="save_profile.php" enctype="multipart/form-data" method="post">
            <input type="file" name="upload_file" id="">
            <br>
            <button type="submit" class="btnuplod" name="savelogo">Uplod</button>

        </form>
        </div>

    </div>



<!-- Side_Bar -->

<div class="sidebar active">

    <div class="sidebar_list">
        <ul>
            <li><a href="Transit.php" title="Transit"> <img src="img/job-transition.png" width="45" alt="">  Transit</a></li>
            <li><a href="Stock.php" title="Stock"> <img src="img/warehouse.png" width="45" alt=""> Stock</a></li>
            <li> <a href="Spear.php" title="Spaer Part"> <img src="img/spare-parts.png" width="45" alt="">  Spaer</a></li>
            <li><a href="Power.php" title="Power"> <img src="img/power-plant.png" width="45" alt=""> Power</a></li>
            <li><a href="Electronics.php" title="Electronics"><img src="img/plug.png" width="45" alt="">  Electro</a></li>
             <li><a href="admin_Vhf_M1.php" title="VHF"> <img src="img/antenna.png" width="45" alt=""> VHF</a></li>
            <li><a href="HF.php" title="HF"> <img src="img/wrench.png" width="45" alt=""> HF</a></li>


        </ul>
    </div>
</div>
<!-- /SidBar -->


<div class="dashborde">
<div class="recent" style="width: auto; height: auto;">
    <div class="Recent_titel">Recently rcieved </div>
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
        </div>

  
</div>
</div>

<button class="contactt" title="Team Member"><img src="img/contact.png" width="47" alt=""></button>
<div class="contact">
<div class="contact_Titel">Team Leader's</div>
<div class="contact_profile">
<?php global $mydb;
$mydb->setQuery("SELECT * FROM `User_info` WHERE UserName !='{$_SESSION['UserName']}'");
$cur = $mydb->loadResultList();
foreach ($cur as $Name){

$mydb->setQuery("SELECT * FROM User_profile WHERE `UserName`='$Name->UserName'");

$cur = $mydb->loadResultList("1");

if ($mydb->affected_rows()==0){

 echo '<a href="#"><img src="./uploads/user.png" width="45" class="img-thumbnail"/>';
    }
    foreach($cur as $object){

        echo '<a href="#"><img src="./uploads/'. $object->filename.'" width="45" class="img-thumbnail"/>';

    } 
   echo "$Name->Full_Name</a><div class='hr'>.</div><br> ";


}
?> </div>  
<script>
    let Btncontact =document.querySelector('.contactt')
    let contact =document.querySelector('.contact');

Btncontact.addEventListener('click',()=>{
    contact.classList.toggle('active')
})


</script>






















<script src="js/js.js"></script>



</div>   














</body>
</html>