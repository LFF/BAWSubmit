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

        
            <p>Guitar Buddy is a demo web site</p>
            
            <p>Its use is only for educational purposes</p>
            
            <p>Enjoy!</p>
            
            <p></p>
            
           
                    
            
                    
          
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
