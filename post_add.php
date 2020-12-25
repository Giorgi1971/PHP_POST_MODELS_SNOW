<?php include "header.php"; ?> 

<div style="margin: auto; position: relative; width: 1000px">
<form action='actions/posting.php' name="post" method='POST' enctype="multipart/form-data">

<!-- <label for='category_id'> category_id - 1 - 2 - 3 - 4: </label><br>
<input type='number' name='category_id' placeholder='category_id'><br>
 -->
 <br>
 
 <input type='text' name='title' placeholder='title'>
 <label for='title'><b> - title. </b></label><br>
 
 <input type='text' name='text' placeholder='text'>
 <label for='text'><b> - text. </b></label><br>
 
 <input type='text' name='link' placeholder='link'>
 <label for='psw'><b> - link. </b></label><br>
 
 <input type='text' name='author' placeholder='Enter author'>
 <label for='author'><b> - author. </b></label><br>

    <fieldset name="category"> <legend>აირჩიე კატეგორია:</legend>

        <input type="radio" name="category" id="main" value="5">
        <label for="main">MAIN</label><br/>

        <input type="radio" name="category" id="sport" value="1">
        <label for="sport">sport</label> 
        <input type="radio" name="category" id="technology" value="2"> 
        <label for="technology">technology </label>
        <input type="radio" name="category" id="business" value="3">
        <label for="business">business</label> 
        <input type="radio" name="category" id="entertainment" value="4"> 
        <label for="entertainment">entertainment </label>

    </fieldset>

    <hr>
    <label> ატვირთეთ - ფოტო (600x400):</label>
    <input type="file" name="picture" value="სასურველი პროპორცია" accept="image/*" ><br>

<label for='post'></label><br>
<input type='submit' value='POST'><br>

</form>
</div>
<hr>



<br>
<hr>

<?php include "footer.php"; ?> 