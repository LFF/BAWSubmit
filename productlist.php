<?php include 'header.php'; ?>
<?php

    require_once('database.php');
    
    
    // Get category ID
    if(!isset($category_id)) {
    	
    	    	
        $category_id = $_GET['category_id'];
        
        
        if (!isset($category_id)) {
            $category_id = 1;
        }
    }
    
    // Get category ID
    if(!isset($sort_id)) {
    	$sort_id = $_GET['sort_id'];
    	if (!isset($sort_id)) {
    		$sort_id = name;

    		
    		
    		
    	}
    }
    

    // Get name for current category
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);

    
        // Get category ID
    if($sort_id == price ) {
    	// Get products for selected category
    	$query = "SELECT * FROM products
    	WHERE categoryID = $category_id
    	ORDER BY listPrice";
    
    }
    
    // Get category ID
    if($sort_id == name ) {
        	
    	// Get products for selected category
    	$query = "SELECT * FROM products
    	WHERE categoryID = $category_id
    	ORDER BY productName";
    
    }
        
    // Get category ID
    if($sort_id == code ) {
    	
    
    	// Get products for selected category
    	$query = "SELECT * FROM products
    	WHERE categoryID = $category_id
    	ORDER BY productCode";
    
    }
    
    
    $products = $db->query($query);
?>



<!-- start  main section here -->

<div class="content">

<div  class ="container1">



<aside id="leftSidebarv1" >

<p class="sRectangle"  >

    <!-- display a list of categories -->
       
          <div   class="bringtofront"    >              
            <ul   >
            				
            <?php foreach ($categories as $category) : ?>
                <li>
                <a href="?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
                </li>
            <?php endforeach; ?>
            
               </ul>
              </div>

<!-- Content Starts Here -->


<aside id="mainContentv3" class="circles"  >


<div class="meatpotatoesv3"  >


        <h1 >Product List </h1>

            <!-- display a table of products -->
            <h2><?php echo $category_name; ?></h2>
            
             <table>
                <tr>
                   <th> 
                    
              <a href="?sort_id=<?php echo code;?>&category_id=<?php echo $category_id;?>">Code </a>
                  
                  </th>
                  
                    <th><a href="?sort_id=<?php echo name;?>&category_id=<?php echo $category_id;?>">Name</a></th>
                    <th class="right">
                       <a href="?sort_id=<?php echo price; ?>&category_id=<?php echo $category_id;?>">Price</a>
                    </th>
                    <th>&nbsp;</th>
                </tr>
            
            
            
            <?php   

            
            
    // Get name for current category
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
//    $category = $category->fetch();
                ?>
          	
                
                <?php foreach ($products as $productx) :

                                ?>
                <tr>
                    <td><?php echo $productx['productCode']; ?></td>
                    
                    <td><?php echo $productx['productName']; ?></td>
                    
                    <td class="right"><?php echo $productx['listPrice']; ?></td>
                    
                    
                    <td>
                    
                    
                    <form action="buyProduct.php" method="post"  id="buyProductproductForm">
                        <input type="hidden" name="productId"
                        
                               value="<?php echo $productx['productID']; ?>" />
                               
                        <input   class="submitcolor"  type="submit" value="Buy" />
                        
                        
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
          
            <br>
               
                </tr>
                

            </table>
          
        </div>


</aside>



<aside id="rightSidebar" class="circles"  >

<p  class="peas">
</aside>


<!-- Content Ends Here -->
</div>



<!-- start  footer section here -->
<?php include 'footer.php'; ?>
</div>
