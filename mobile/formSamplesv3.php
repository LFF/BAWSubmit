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




<!DOCTYPE html> 
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>jQuery Mobile Docs - Lists with Forms</title> 
	<link rel="stylesheet"  href="//code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />  
	<link rel="stylesheet" href="../_assets/css/jqm-docs.css"/>

	<script src="//code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="../../docs/_assets/js/jqm-docs.js"></script>
	<script src="//code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>

</head> 
<body> 

	<div data-role="page" class="type-interior">

		<div data-role="header" data-theme="f">
		<h1>Lists with Forms</h1>
		<a href="../../" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>
	</div><!-- /header -->
	
	
	
	
	
	<div data-role="content">     
	
	<?php 
	
	// Get all categories
	$query = 'SELECT * FROM categories
	ORDER BY categoryID';
	$categorie = $db->query($query);
//	$categorie = $categorie->fetch();
//	$category_name = $categorie['categoryName'];
	echo $category_name;
	
	
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
    
    
              
		<div >
		
		
	<form>
		
			
			<li data-role="fieldcontain">
				<label for="select-choice-1" class="select">Choose shipping method:</label>
				<select name="select-choice-1" id="select-choice-1">
					<option value="standard">Standard: 7 day</option>
					<option value="rush">Rush: 3 days</option>
					<option value="express">Express: next day</option>
					<option value="overnight">Overnight</option>
				</select>
			</li>

			<li data-role="fieldcontain">
				<label for="select-choice-3" class="select">Your state:</label>
				<select name="select-choice-3" id="select-choice-3">
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
			</li>

			<li data-role="fieldcontain">
				<label for="select-choice-a" class="select">Choose shipping method:</label>
				<select name="select-choice-a" id="select-choice-a" data-native-menu="false">
					<option>Custom menu example</option>
					<option value="standard">Standard: 7 day</option>
					<option value="rush">Rush: 3 days</option>
					<option value="express">Express: next day</option>
					<option value="overnight">Overnight</option>
				</select>
			</li>

			<li class="ui-body ui-body-b">
				<fieldset class="ui-grid-a">
						<div class="ui-block-a"><button type="submit" data-theme="d">Cancel</button></div>
						<div class="ui-block-b"><button type="submit" data-theme="a">Submit</button></div>
			    </fieldset>
			</li>
			
		</ul>
		
		</form>
		
		</div><!--/content-primary -->		
