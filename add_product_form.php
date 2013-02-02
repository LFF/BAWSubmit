<?php include 'header.php'; ?>

<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$categories = $db->query($query);

?>


<!-- start  main section here -->

<div class="content">

<div  class ="container1">

   
<aside id="mainContentv3" class="circles"  >

<div class="meatpotatoesv3"  >
        
   
            <h1>Add Product</h1>
            <form action="add_product.php" method="post"
                  id="add_product_form">

                <label>Category:</label>
                <select name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
                <br />

                <label>Code:</label>
                <input type="input" name="code" />
                <br />

                <label>Name:</label>
                <input type="input" name="name" />
                <br />

                <label>List Price:</label>
                <input type="input" name="price" />
                <br />

                <label>&nbsp;</label>
                <input type="submit" value="Add Product" />
                <br />
            </form>
            <p><a href="index.php">View Product List</a></p>
        </div><!-- end main -->


<!-- start  footer section here -->
<?php include 'footer.php'; ?>
</div>
        
        
    </div>
        
     