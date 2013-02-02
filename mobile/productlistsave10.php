<?php


    require_once('../database.php');
    
    
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
    
   
    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);

    
    
    echo $sort_id;
    
        // Get category ID
    if($sort_id == price ) {
    	
    	echo $sort_id;
    	
    	
   	
    	// Get products for selected category
    	$query = "SELECT * FROM products
    	WHERE categoryID = $category_id
    	ORDER BY listPrice";
    
    }
    
    // Get category ID
    if($sort_id == name ) {
    
    	echo $sort_id;
    	
    	
    	
    	// Get products for selected category
    	$query = "SELECT * FROM products
    	WHERE categoryID = $category_id
    	ORDER BY productName";
    
    }
        
    // Get category ID
    if($sort_id == code ) {
    	
    	echo $sort_id;
    	
    	
    	
    
    	// Get products for selected category
    	$query = "SELECT * FROM products
    	WHERE categoryID = $category_id
    	ORDER BY productCode";
    
    }
    
    $products = $db->query($query);
?>

<!-- start  main section here -->
<html> 
<head> 
	<title>Guitar Buddy Mobile  Imagine</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	
	 <link rel="stylesheet" href="../css/strings.css" />
		<link rel="stylesheet" href="../css/guitarbuddy1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page"  data-title="index"    >

	<div data-role="header" class="mheader"  >
		<h1>Guitar Buddy Mobile</h1>
	
		
	<div data-role="navbar" >	
	<ul>
	<li><a   id="s1"  
	data-direction="reverse"
	
	data-ajax="false"
	
	data-transition="slidedown"  href="../mobile/imagine.php">Imagine</a></li>
	
	<li><a id="s2" 
	
	data-direction="reverse"
	
	data-ajax="false"
	
	 data-transition="pop"
	 
	 
data-direction="reverse"

	 
	  data-rel="diaglog"  href="../mobile/try.php">Try</a></li>
	
	
	<li><a  id="s3"
	data-ajax="false"
	
	  href="../mobile/shop.php">Shop</a></li>
	  
	  
	<li><a id="s4"
	data-ajax="false"
	
href="../mobile/learn.php"
	
	>Learn</a></li>
	<li><a id="s5"
	data-ajax="false"
	
		
href="../mobile/share.php"
	
	>Share</a></li>

</ul>
		
	</div><!-- /navbar -->


	</div><!--  /header -->
	
		<div class="content-primary">	
	
	
		<ul data-role="listview">
		
            <?php foreach ($categories as $category) : ?>
            
                <li  data-inset="true"   >
                
                <a href="?category_id=<?php echo $category['categoryID']; ?>">
                
                    <?php echo $category['categoryName']; ?>
                    
                    <span class="ui-li-count ui-btn-up-c ui-btn-corner-all">12</span>
                    
                </a>
                
                <ul   data-role="listview">
                
                
                
                <li   data-inset="true"   >
                
                    <?php foreach ($products as $product) : ?>
                        
                        
                     
                    <?php echo $product['productCode']; ?>
                    
                    <?php echo $product['productName']; ?>
                    
                    
                   
           <span><?php echo $product['listPrice']; ?>
                    
         
                    <form action="buyProduct.php" method="post"
                    
                              id="buyProductproductForm">
                              
                              
                        <input type="hidden" name="productId"
                        
                        value="<?php echo $product['productID']; ?>" />
                               
                               
                        <input type="submit" value="Buy" />
                        
                        
                    </form>
                    
                    </span>
                    
                    
                 <?php endforeach; ?>
                
                
                </li>
                
                </ul> 
                
             
                   
                 <?php endforeach; ?>
                
                
                </li>
                
                </ul>
                
                               
		</div><!--/content-primary -->	
	
	
<!-- Content Ends Here -->

<!-- start  footer section here -->

<div data-role="footer"
data-position="fixed"
>

<div  data-role="navbar"  >
           
           <ul>


<li><a id="s6" 
	data-ajax="false"
	
	  data-rel="diaglog"   href="../mobile/more.php">More</a></li>
	  



	<li><a id="s6" 
	data-ajax="false"
	
	  data-rel="diaglog"   href="../mobile/contact.php">Contact</a></li>
	<li><a id="s5"  
	data-ajax="false"
	
	data-rel="diaglog" href="../mobile/feedback.php">Feedback</a></li>
	<li><a id="s4"
	
	data-ajax="false"
	
	
	class="ui-btn-active ui-state-persist"
	
	
	 data-rel="diaglog"  href="../mobile/login.php">Login</a></li>
	
   </ul>
   </div>

</div>
	   
        </div>
	
	