<?php 

?>


<!DOCTYPE html> 
<html> 
<head> 
	<title>Guitar Buddy Mobile</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	    <link rel="stylesheet" href="../css/strings.css" />
			
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		
		<link rel="stylesheet" href="../css/main.css" />
					
		<link rel="stylesheet" href="../css/guitarbuddy1.min.css" />
			
	
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div  data-role="page"  data-title="Page Foo"   >

	<div     data-role="header">
	
	<?php 

?>

	
	
		<h1  ><?php echo 'header'; ?></h1>
	</div><!-- /header -->

	<div data-role="content">	
		
		
	<ul data-role="listview" data-inset="true" data-filter="false">
	<li><a   id="s1"  
	data-direction="reverse"
	
	data-ajax="false"
	
	data-transition="slidedown"  href="../mobile/imagine">Imagine</a></li>
	
	<li><a id="s2" 
	
	data-direction="reverse"
	
	data-ajax="false"
	
	 data-transition="pop"
	 
	 
data-direction="reverse"

	 
	 
	 
	  data-rel="diaglog"  href="../mobile/try">Try</a></li>
	
	
	<li><a  id="s3"
	data-ajax="false"
	
	  href="../mobile/shop.html">Shop</a></li>
	  
	  
	<li><a id="s4"
	data-ajax="false"
	
	
	
	>Learn</a></li>
	<li><a id="s5"
	data-ajax="false"
	
	
	>Share</a></li>
	
	

</ul>

	</div><!-- /content -->


<?php 

?>



<div data-role="footer"  id="footer1"  >

<div data-role="navbar" >

<ul  class="font12"   >

<li><a id="s6" 
	data-ajax="false"
	
	class="ui-btn-active ui-state-persist"
	
	  data-rel="diaglog"   href="../mobile/more.html">More</a></li>
	  

	<li><a id="s6" 
	data-ajax="false"
	
	class="ui-btn-active ui-state-persist"
	
	  data-rel="diaglog"   href="../mobile/contact.html">Contact</a></li>
	  
	  
	  
	<li><a id="s5"  
	data-ajax="false"
	
	class="ui-btn-active ui-state-persist"
	
	data-rel="diaglog" href="../mobile/feedbac.html">Feedback</a></li>
	
	
	<li><a id="s4"
	
	data-ajax="false"
	
	class="ui-btn-active ui-state-persist"
	
	 data-rel="diaglog"  href="../mobile/login.html">Login</a></li>
	
</ul>
	
</div><!-- /navbar -->


<div data-role="navbar" >

<ul class="font12">

<li><a 

href="#" |&copy;2013 Guitar Buddy</a>
</li>

<li><a 

class="ui-btn-active ui-state-persist"

href="../multi_column.php">| terms of use</a>
<li><a 

class="ui-btn-active ui-state-persist"

href="../site_map.php">| site map</a>
<li><a 

class="ui-btn-active ui-state-persist"

href="../index.php" data-ajax="false">| full site</a>
</ul>



</div> <!--  /navbar -->

</div> <!--  /footer  -->
	
</div><!-- /page -->

</body>
</html>
