<?php include 'header.php'; 

echo $action2;
echo $feedback;


    // Get category ID
    if(!isset($feedback)) {
    	
    	
    	echo $feedback;
    	
        $feedback = $_POST['feedback'];
    
        if (!isset($feedback)) {
        	
            $feedback = "";
            
        }
        
    }
    
    
    
    
    // Get category ID
    if(!isset($action2)) {
    	
    	echo $action2;
    	
    	 
    $action2 = $_POST['action2'];
    
   
    
    if (  $action2 == "Reset" ) {
    
    	$feedback = "";
    
    }
    
    }
    
        
?>


<div id="content">


    <form action="feedback.php" method="post" >
   
   
   
    <fieldset  class="framecolor"
       >
        <legend>User Feedback</legend>
     
     
       <?php 
      
       if ($feedback  == "") {
      	
       	?>
     
        <p>
            <label>Comments:</label>
            
                   <textarea class="peas1" 
                   
                      rows="10"
                      
                      cols= "80"
                      
                      name ="feedback" 
                      
                    id = "feedbackid"  ><?php echo $feedback?>
                    
                    </textarea>
                   
                   
           </p>     
                  
                       
                       
                       
    </fieldset>
    <fieldset  class="framecolor"  >
    
            <label>&nbsp;</label>
                <input class="submitcolor" type="submit" name="action1" value="Submit"/>
                <input class="submitcolor" type="submit" name="action2" value="Reset" /><br />
                
    </fieldset>
    </form>
    
    
    <?php 
    }
    
    else 
    {
    
    	
    	?><h1>Thank You</h1>
    	
    	<?php echo $feedback ?>
    	
    	
    	        	  <p>Your feedback is important to us.</p><?php 
    	        	
    	                   }
    	        ?>
    	     
    
    
            
                    <p class="font12"  >Do you know you can get our mobile app? Available for Apple® and Android™ phones. 
                                     
                    <a href="appInfo.php">Get it now.</a>
                                       
                    </p>
        
    
    
    
</div>
<?php include 'footer.php'; ?>

