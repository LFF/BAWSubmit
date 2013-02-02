
    <?php
    require_once('database.php');
    
    ?>
   
   
   <section>
  
        
        <aside id="leftSidebav1">
        
            <p>
                <img src="<?php echo $image_filename; ?>"
                    alt="<?php echo $image_alt; ?>" />
            </p>
       
        </aside>
            
                     
             
        <aside id="mainContentv4">
           
                    <?php echo $product['productName']; ?>
                    
            <p><b>List Price:</b> $<?php echo $list_price; ?></p>
            <p><b>Discount:</b> <?php echo $discount_percent; ?>%</p>
            <p><b>Your Price:</b> $<?php echo $unit_price; ?>
            
                 (You save $<?php echo $discount_amount; ?>)</p>
          
            
                    <td>
                    
                    
                    <form action="buyProduct.php" method="post"  id="buyProductproductForm">
                        <input type="hidden" name="productId"
                        
                               value="<?php echo $product_id; ?>" />
                               
                        <input   class="submitcolor"  type="submit" value="Buy" />
                        
                        
                    </form></td>        
            
           
           
        </aside>
        
    </section>
        