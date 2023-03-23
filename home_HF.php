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
               <li> <div class='last' onclick="bincard()"><button title="Edit">Last Bincard's</button></li>
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


<div class="bincard">
    <div class="bincard_head">
        <div class="bin_card_Titel">  Bin Card (ቢን ካርድ) </div>
   <div class="bin_card_titel_img" ><img src="img/expand_more_FILL0_wght400_GRAD0_opsz48.png" width="80" alt=""></div>
    </div>
   <br><br>
   <div class="bincard_Detiel">
    <div class="bin_card_Head1"><form action="save_bincard.php" method="post">
        Stock Number : <input type="text" name="Stock_Num"  id="">
        Description : <input type="text" name="Description" id="">
        Location : <input type="text" name="Location" id="">
    </div><br><br>
    <div class="bin_card_Head2">
        Interchangebilty : <input type="text" name="Interchangeability" id="">
        Model : <input type="text" name="Model" id="">
        QTY PER BOX : <input type="text" name="Qty_per_box" id="">
    </div><br><br>
    <div class="bin_card_Head3">
        Catagory : <input type="text" name="Catagory" id="">
        Condition : <input type="text" name="Condition">
        U/M : <input type="text" name="U_M" id="">
        Ligth Box PER STACK : <input type="text" name="Light_Box_per_Stack" id=""></div>
        <br><br><br>
        <div class="bin_card_body">
           <div class="bin_card_Body_Titel">
            <div class="intab">Date <hr><br><input type="date" name="Date" id=""></div>
            <div class="intab">Vouch No <hr><br><input type="text" name="Vouch_No" id=""></div>
            <div class="intab" title="Issued to">Received From <hr><br><input type="text" name="Recived_from" id=""></div>  
            <div class="intab">Lot No <hr><br><input type="text" name="Lot_No" id=""></div>
            <div class="intab">Qty received <hr><br><input type="text" name="Qty_Issued" id=""></div>
            <div class="intab">Qty Issued <hr><br><input type="text" name="" id=""></div>
            <div class="intab">Balance <hr><br><input type="text" name="Balance" id=""></div>
            <div class="intab">No. of Box <hr><br><input type="text" name="Mo_of_Box" id=""></div>
            <div class="intab">Posted by <hr><br><input type="text" name="Posted_by" id=""></div>
           </div><br><br><br><br><br>
           <div class="bin_card_footer">
            <button type="submit" class="btnsend">Send</button></form>
<button type="submit" onclick="re19()" class="btncal">Cancel</button></form>
           </div>
        </div>
        </div>
          
</div>


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



<div class="last_bincardall">
<div class="last_Bincard "> 
    <center>
        <?php
       
        $num='2';
        $mydb->setQuery("SELECT * FROM bincard WHERE Department='{$_SESSION['Position']}' ORDER BY `Created` ASC");
        $cur = $mydb->loadResultList();
        if ($mydb->affected_rows() == 0){
            echo "<br><br><center><div class='alertMes' style=' text-align: center; color: red; border:1px solid red; border-radius: 4px; width: fit-content; font-size: 20px;'>Noting Recived</div></center>";
        }
    foreach ($cur as $bincard){
       echo " <div class='bincard_all'>
            <div class='bincard_head'>
                <div class='bin_card_Titel'>  Bin Card (ቢን ካርድ) </div>
           <div class='bin_card_titel_img'>Date: $bincard->Created </div>
           <div class='bin_card_titel_img'><button class='expand'><img src='img/expand_more_FILL0_wght400_GRAD0_opsz48.png' width='40'></button></div>
            </div>
           <br><br>
           <div class='bincard_Detiell'>
            <div class='bin_card_Head1'>
                <div class='vr'> Stock Number : <u>$bincard->Stock_Num</u></div>
                    <div class='vr'>  Description :<u>$bincard->Description</u></div>
                        <div class='vr'>  Location : <u>$bincard->Location</u></div>
            </div><br><br>
            <div class='bin_card_Head2'>
                <div class='vr'>   Interchangebilty :<u>$bincard->Interchangeability</u></div>
                    <div class='vr'>  Model :<u>$bincard->Model</u></div>
                        <div class='vr'>   QTY PER BOX : <u>$bincard->Qty_per_box</u></div>
            </div><br><br>
            <div class='bin_card_Head3' style='display: flex;justify-content: space-around;'>
                <div class='vr'>  Catagory : <u>$bincard->Catagory</u></div>
                    <div class='vr'>  Condition : <u>$bincard->Condition</u></div>
                        <div class='vr'>   U/M :<u>$bincard->U_M</u></div>
                            <div class='vr'>  Ligth Box Per Stack :<u>$bincard->Light_Box_per_Stack</u></div>
            </div>
                <br><br><br>
                <div class='bin_card_body'>
                   <div class=bin_card_Body_Titel'>
                   <table border='0'><tr>
                    <th>Date</th><th>Vouch No</th><th>Received From</th><th>Lot No</th><th>Qty received</th><th>Qty Issued</th>
                    <th>Balance</th><th>No. of Box</th><th>Posted by</th>
                         </tr>
                         <td>$bincard->Date</td> <td>$bincard->Vouch_No</td> <td>$bincard->Recived_from</td> <td>$bincard->Lot_No</td> <td>$bincard->Qty_Issued</td>
                          <td>$bincard->Balance</td> <td>$bincard->Mo_of_Box</td> <td>$bincard->Posted_by</td><td></td>
                   </table>
                </div>
                </div><br><br><br>
                
                <br><br></div></div>
                <br><br>
        ";}?>
</div></div></center>




<script src="js/js.js"></script>
<script>
  
    let bincard_Detiell =document.querySelector('.bincard_Detiell')
    let bincard_Detiel =document.querySelector('.bincard_Detiel')
    let bin_card_titel_img =document.querySelector('.bin_card_titel_img')
    let last_Bincard=document.querySelector('.last_Bincard')
    let expand =document.querySelector('.expand')

  
    bin_card_titel_img.addEventListener('click',function(){
        bincard_Detiel.classList.toggle('active')
    })
     function bincard(){
        last_Bincard.classList.toggle('active')
     }
     expand.addEventListener('click',()=>{
    bincard_Detiell.classList.toggle('active')
   })



    </script>

</body>
</html>