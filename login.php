<?php include 'header.php'; ?>


<?php
 
    require_once('database2.php');
    
    
    
    // Get category ID
    if(!isset($firstN)) {
    	
        $firstN = $_POST['firstN'];
        
        if (!isset($firstN)) {
        	
            $firstN = 99;
            
            
        }
        
        
        
        
    }
  
    
   
    // Get name for current category
    $query = "SELECT * FROM addresses
    WHERE addressID = $firstN ";
    
    
    $test = $db->query($query);
    
  
    
    $test = $test->fetch();
    
    
    
    $phone = $test['phone'];
    
   
    

?>

 <script type="text/javascript" src="js/login.js">

 </script>


 
 <body onload="showLabels(a)" >
 

<!-- start  main section here -->


<div class="content">

<div  class = "container1">


<aside id="leftSidebar" >

<p class="peas1" id="spImagine" > 

</aside>




<!-- Content Starts Here -->



<aside   id = "mainContent" class = "circles">

    <div class="meatpotatoesv2">

        
        <?php 
        
        if   ($firstN == 99 )
        
        
        {
        	?><h1>Log In to Your Account</h1>
        	
        
                    <form action="login.php" method="post"  id="loginForm">
                    
            
                        <input  name="firstN"
                        
                                   placeholder="User Id"
                        
                              value="" />
                   
                               
                                      
                              <input  name="password"
                        
                                         type="password" 
                        
                                         placeholder="Password"
                        
                               value="" />
                                 
                                      
                               
                        <input class="submitcolor"    type="submit" value="Login" />
                    </form>
                    
        	
        	
        	
        	<?php 
        }
      
        else
        	
        {  
  
     
        	?><h1>Welcome</h1>
        	  <p>Our records indicate your tel no. is:<?php echo $phone?></p><?php 
        	
                   }
        ?>
                        
  
                    
                    <p class="font12"  >Do you know you can get our mobile app? Available for Apple® and Android™ phones. 
                                     
                    <a href="appInfo.php">Get it now.</a>
                                       
                    </p>
                    
          
        </div>
   
        

</aside>



<aside id="rightSidebar" class="circles" >


</aside>





</div>



<!-- Content Ends Here -->
</div>


<!-- start  footer section here -->
<?php include 'footer.php'; ?>
</div>
