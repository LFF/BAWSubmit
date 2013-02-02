<?php 

require_once('../database.php');


// Get category ID
if(!isset($category_id)) {
	$category_id = $_GET['category_id'];
	if (!isset($category_id)) {
		$category_id = 2;
	}
}

// Get category ID
if(!isset($sort_id)) {
	$sort_id = $_GET['sort_id'];
	if (!isset($sort_id)) {
		$sort_id = price;
	}
}

// Get category ID
if($sort_id == price ) {	 
	 
	// Get products for selected category
	$query = "SELECT * FROM products
	WHERE categoryID = $category_id
	ORDER BY listPrice";

}

// Get category ID
if($sort_id == name ) {
 
}

// Get category ID
if($sort_id == code ) {
 
// Get products for selected category
$query = "SELECT * FROM products
WHERE categoryID = $category_id
ORDER BY productCode";

}

$products = $db->query($query);?>
<?php include 'header.php'  ?>

<!-- BODY -->

<body> 

	<div data-role="content">     
	
	
	<?php 
	
	// Get all categories
	$query = 'SELECT * FROM categories
	ORDER BY categoryID';
	$categorie = $db->query($query);
	
	
	            foreach ($categorie as $categoryA) :
	                        
            ?>
            
	        <div data-role="collapsible">
                        
            <h3><a href="?category_id=<?php echo $categoryA['categoryID'];?>
           
            
            "></a><?php   echo $categoryA['categoryName']; ?> </h3>
                           
            <?php 
            
            $category_ID = $categoryA['categoryID'];
                        
              
            // Get products for selected category
            $query = "SELECT * FROM products
            WHERE categoryID = $category_ID
            ORDER BY productName";
            $products = $db->query($query);
          
            
            foreach ($products as $productZ) :
           
            ?><h1><?php           
                      echo $productZ['productName'];
            ?></h1><?php 
                                        
                 endforeach; 
                
        ?>
        
        </div>
  
        <?php 
        
        endforeach;
         ?>
        
    	</div>
      
	</body>


<?php include 'footer.php' ?>		