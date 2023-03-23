<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/style_for_Singup.css">
</head>
<body><center>

    <div class="singup_card">
     <div class="singup_titel">Sing Up</div>

<form action="Singup.inc.php" method="post">

<input type="text" name="UserName" id="" class="form_handel" pattern="@+[A-Za-z]{5,}" title="UserName's Start With @ and Should Be More than 5 Character's" required placeholder="@UserName...">
 <br>
<input type="text" name="Full_Name" id="" class="form_handel"   required placeholder="Full Name...">
<br>
<input type="tel" name="Phone" id="" class="form_handel"  required placeholder="Phone">
<br>
<input id='Pass'  type="password" class="form_handel"  title="password Must Be More than 8 Characters" required placeholder="Password" name="Password">
<br>


<select required name="Position" id="">
  <option value="">Position</option>
  <option value="Admin">Admin</option>
  <option value="Transit">Transit</option>
  <option value="Stock"> Stock</option>
  <option value="Spear">Spear</option>
  <option value="Power">Power</option>
  <option value="Electronics">Electronics</option>
  <option value="VHF">VHF</option>
  <option value="HF">HF</option>
</select>
<br>


<button type="submit" name="submit"   class="Btn_SingUp">Sing Up</button>
 
</form>



</div>

