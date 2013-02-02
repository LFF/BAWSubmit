<?php include 'header.php'; ?>
<?php


require_once('database.php');
 

    
    // Get category ID
    if(!isset($productId)) {
    	
    	
    	
    	
    	$productId = $_POST['productId'];
    	
    	
    	if (!isset($productId)) {
    	
    		
    		
    		$productId = 999;
    		
    		
    		
    		
    	}
    }
    
    
    // Get name for current category
    $query = "SELECT * FROM products
              WHERE productID = $productId";
    $product = $db->query($query);
    $product = $product->fetch();
    $productName = $product['productName'];
    $productPrice = $product['listPrice'];
    
 
?>


<!-- start  main section here -->



<div id="content">

<div  class = "container1">




<aside id="leftSidebarv1" >

<p class="sCircles"  >


</aside>


<aside id="rightSidebar" class="circles"  >

<p  class="peas">
</aside>



<!-- Content Starts Here -->


<aside id = "mainContent" class="circles">

    <div class="meatpotatoesv2">

        <h1 >Thank you for your Purchase</h1>

        
              <table>
                <tr>                   
                  
                    <th>You bought:</th>
                </tr>
                
                <tr>
                    <td>Code:
                    
                    <?php echo $product['productCode']; ?></td>
                    </tr>
                    
                    <tr>
                    
                    
                    <td>Item:<?php echo $product['productName']; ?></td>
                    
                    </tr>
                    
                    <tr>
                    <td class="right">Price:<?php echo $product['listPrice']; ?></td>
                   </tr> 
              
              
         
                
            </table>
        
        
            
        <h1 >Congratulations!</h1>
        
        Enjoy your purchase.  Do not hesitate to contact us if there are any questions.

        
        
                       
                        
          
        </div>
   
       

</aside>


</div>
<!-- Content Ends Here -->

</div>


<!-- start  footer section here -->

<?php include 'footer.php'; ?>
