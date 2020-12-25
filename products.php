<?php include_once "header.php"; ?> 

<hr>
<div style="margin: auto; position: relative; width: 1000px">
    <form action='products.php' method='POST' enctype="multipart/form-data">
    <input type='hidden' name='action' value="edit" placeholder='edit'>
    
    <input type='text' name='product' placeholder='პროდუქტის დასახელება'>
    <label for='product'><b> - პროდუქტის სახეობა. </b></label><br>
    
    <input type='number' name='quantity' placeholder='რაოდენობა (კგ/ცალი)'>
    <label for='quantity'><b> - პროდუქტის რაოდენობა. </b></label>
    
    <label for='submit'></label>
    <input type='submit' value='Edit Product'><br>
    
</form>
</div>


<div style="margin: auto; position: relative; width: 1000px">
    <form action='actions/product_deleting.php' method='POST' enctype="multipart/form-data">
    <input type='hidden' name='action' value="delete" placeholder='delete'>
    
    <input type='text' name='product' placeholder='პროდუქტის დასახელება'>
    <label for='product'><b> - პროდუქტის სახეობა. </b></label><br>
    
    <input type='number' name='quantity' placeholder='რაოდენობა (კგ/ცალი)'>
    <label for='quantity'><b> - პროდუქტის რაოდენობა. </b></label>
    
    <label for='submit'></label>
    <input type='submit' value='Delete Product'><br>
    
</form>
</div>

<?php
if(isset($_POST['action'])){
    if($_POST['action'] === 'edit'){?>

    <table style="width:90%; border: 3px solid black; margin: auto; text-align: center; padding: 5px;">
    <tr> 
        <th>ნომერი</th>
        <th>დასახელება</th>
        <th>რაოდენობა</th>
        <th>განზომილება</th>
        <th>ფასი</th>
    </tr>
    
    <?php
    
    
    include_once "functions.php";
    $local_conn = dbConnection();
    $local_table = 'products';
    $x = 'product';
    $local_x = $_POST['product'];

    $products = select_all_id($local_table, $x, $local_x, $conn);
    
    // მონაცემების წასაკითხი სკრიპტი
    // $stmt = $conn->prepare("SELECT * FROM products");
    // $stmt->execute();
    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    // $products = $stmt->fetchAll();
    
    foreach($products as $prd){?>



        <tr style="border: 1px solid black;">
            <td>
                <?php echo $prd['title']; ?>
            </td>
            <td>
                <?php echo $prd['product']; ?>
            </td>
            <td>
                <?php echo $prd['amount']; ?>
            </td>
            <td>
                <?php echo $prd['kg_pics']; ?>
            </td>
            <td>
                <?php echo $prd['price']; ?>
            </tr>
        </td>    
    <?php
    }
}
    
}
?>



</table>




<hr>

<table style="width:90%; border: 3px solid black; margin: auto; text-align: center; padding: 5px;">
<tr> 
    <th>ნომერი</th>
    <th>დასახელება</th>
    <th>რაოდენობა</th>
    <th>განზომილება</th>
    <th>ფასი</th>
</tr>

<?php


include_once "functions.php";
$local_conn = dbConnection();
$local_table = 'products';
$products = select_all($local_table, $conn);

// მონაცემების წასაკითხი სკრიპტი
// $stmt = $conn->prepare("SELECT * FROM products");
// $stmt->execute();
// $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

// $products = $stmt->fetchAll();

foreach($products as $prd){?>
    <tr style="border: 1px solid black;">
        <td>
            <?php echo $prd['title']; ?>
        </td>
        <td>
            <?php echo $prd['product']; ?>
        </td>
        <td>
            <?php echo $prd['amount']; ?>
        </td>
        <td>
            <?php echo $prd['kg_pics']; ?>
        </td>
        <td>
            <?php echo $prd['price']; ?>
        </tr>
    </td>    
<?php
}
?>

</table>



<hr>
<hr>

<?php include "footer.php"; ?> 