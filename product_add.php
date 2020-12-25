<?php include "header.php"; ?> 


<div style="margin: auto; position: relative; width: 1000px">
<form action='actions/producting.php' method='POST' enctype="multipart/form-data">

 <br>
 
 <input type='text' name='title' placeholder='title'>
 <label for='title'><b> - შტრიხ-კოდი. </b></label><br>
 
 <input type='text' name='product' placeholder='text'>
 <label for='product'><b> - პროდუქტის სახეობა. </b></label><br>
 
 <input type='number' name='amount' placeholder='amount'>
 <label for='amount'><b> - პროდუქტის რაოდენობა. </b></label><br>
 
 <input type='text' name='kg_pics' placeholder='kg_pics'>
 <label for='kg_pics'><b> - განზომილება (ცალი/კილოგრამი). </b></label><br>
 
 <input type='number' name='price' placeholder='ფასი'>
 <label for='price'><b> - პროდუქტის ფასი. </b></label><br>

    <fieldset name="cat"> <legend>აირჩიე კატეგორია:</legend>

        <input type="radio" name="cat" id="friut" value="1">
        <label for="friut"> - ხილი</label> 
        <input type="radio" name="cat" id="stationary" value="2"> 
        <label for="stationary"> - კანცელარია </label>
        <input type="radio" name="cat" id="gifts" value="3">
        <label for="gifts"> - საჩუქრები</label> 
        <input type="radio" name="cat" id="sports" value="4"> 
        <label for="sports"> - სპორტული ნივთები </label>

    </fieldset>

    <hr>
    <label> ატვირთეთ - ფოტო (600x400):</label>
    <input type="file" name="picture" value="სასურველი პროპორცია" accept="image/*" ><br>

<label for='submit'></label><br>
<input type='submit' value='Add Product'><br>

</form>
</div>
<hr>
<?php include "footer.php"; ?> 
