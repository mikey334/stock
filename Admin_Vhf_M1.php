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
             <li><a href="admin_Vhf.php" title="VHF"> <img src="img/antenna.png" width="45" alt=""> VHF</a></li>
            <li><a href="HF.php" title="HF"> <img src="img/wrench.png" width="45" alt=""> HF</a></li>


        </ul>
    </div>
</div>
<!-- /SidBar -->


<!-- Navbar_hor -->

<div class="Navbar_hor">
    <ul>
        <li class="active" ><a class="active" href="Admin_Vhf_M1.php">Model_1</a></li>
        <li> <a class="a" href="Admin_Vhf_M19.php"> Model 19</a></li>
        <li > <a class="a" href="Admin_Vhf_BC.php">Bin Card</a></li>
        <li> <a class="a"href="Admin_Vhf_M22.php">Model_22</a></li>
    </ul>
</div>

<div class="navbar_hor_body">
<?php
            $mydb->setQuery("SELECT * FROM model_19 WHERE Department='{$_SESSION['Position']}'");
            $cur = $mydb->loadResultList();
            if ($mydb->affected_rows() == 0){
                echo "<br><br><center><div class='alertMes' style=' text-align: center; color: red; border:1px solid red; border-radius: 4px; width: fit-content; font-size: 20px;'>Noting Recived</div></center>";
            }
        foreach ($cur as $Model9){
   
   echo " <div class='Model_19'>";
     echo "   <div class='ModelHeader'> Model 19 (ሞዴል አስራዘጠኝ) <button id='down' title='See More' onclick='down19()'>↕️</button></div> "; 
    echo" <div class='model19_body'>
 <div class='Model19_Body_titel'>
    Receiption For Articles or Property Received <br> (የዕቃ ወይም የንብረት ገቢ ደረስኝ)
</div>";
echo "<div class='Model19_body_Header'>";
echo "<div class='Model19_header_left'>
    <form action='save_model19.php' method='post'>
    Department :<u> $Model9->Department</u>
</div>";
echo "<div class='Model19_header_right'>
    1. Item NO. in Expenditure Rehistry :<u> $Model9->Item_NO</u>
    <br>
    2. No.of entry in the register of incoming Goods :<u> $Model9->No_of_entry</u>
    
    <br>
    3. Classification of Stock :<u> $Model9->Classification</u>
    <br>
    4. Store No.:<u> $Model9->Store_No</u>
    <br>
    5. Shelf No.:<u> $Model9->Shelf_No</u>
</div>
</div>";
echo "<div class='Model19_body_Top'>
    Name : <u>$Model9->Name </u> Received the following :<u> $Model9->Received</u>

   Day :<u> $Model9->Day </u> From :<u> $Model9->FromG </u> Rceieved
</div>
<br>";
echo "<div class='Model19_body_center'>
    <div>Serial No. <br><br><u>$Model9->Serial_No </u></div>
    <div title='Detalled Description of Articles or Property' >
 Description <br><br><u> $Model9->Description </u></div>
    <div>Model <br><br><u> $Model9->Model </u></div>
    <div>Series <br><br><u> $Model9->Series </u></div>
    <div>Quantity <br><br><u> $Model9->Quantity</u></div>
    <div>Unit Price <br><br><u> $Model9->Unit_Price </u></div>
    <div>Totalprice <br><br><u> $Model9->Total_price</u> </div>
</div>
<br><br><br><br><br><br>";
echo "<div class='Model19_body_Footer'>
    <div>Deliverer (Donor) <br> <u>$Model9->Deliverer_Donor</u> <br> <input type='checkbox'> Sing </div>
    <div>Deliverer (Receipient)  <br><u> $Model9->Deliverer_Receipient </u><br> <input type='checkbox' > Sing</div>
</div>

</div>
</div>
</div>
</div>";

        }?>

    </div>
</div>
</div>

</div>








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