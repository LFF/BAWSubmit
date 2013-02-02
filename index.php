<?php

include 'Mobile_Detect.php';

$detect = new Mobile_Detect();

if ($detect->isMobile()) {
	
		$location='mobile/index.php';
		header ('Location: '.$location);
		exit;
	
	
	}
	
//  commented out till  too many redirects is investigated.	

//  else		
//	{
		
//		$location='index.php';
//		header ('Location: '.$location);
//		exit;
				
//	}
	

//
//
//  header component of page via php.
//	
//	
	
include 'header.php'; ?>



<!--
//
//
//  end header component of page via php.
//	
//	
	


//
//  main section of index	
//	
	

//
//  ---------- container 1 div 
//
-->




<div  class = "container1">


<!-- 
//
//  ---------- circlesA div. 
//
-->

<div  class = "circlesA">

<!--
//
//  ---------- ul imagineA starts imagine area. 
//              
//
-->

<ul  id="imagineA"  class = "shcircle"   >


<li><a id="imagine" class="circles"

onmouseover="playSound('http://localhost/GuitarBuddy/media/String1E.mp3');"
 
onclick="playSound('http://localhost/GuitarBuddy/media/String1E.mp3');"
 
href="imagine.php">IMAGINE</a>

<ul>

<?php include 'imaginelis.php'; ?>

<li>
<a href="http://youtu.be/WH-wahxlmGY">More Guitar Players</a></li>

</ul>

</li>

</ul>


<!--
//
//  ----------  end ul imagineA starts imagine area. 
//              
//
-->



<!--
//
//  ----------  next sections follow similar pattern. 
//              
//
-->



 
<ul  id="tryA"  class="shcircles">

<li><a id="try"  class="circles"

 href="try.php"

   onmouseover="playSound('http://localhost/GuitarBuddy/media/String2B.mp3');"
 
  onclick="playSound('http://localhost/GuitarBuddy/media/String2B.mp3');">
 

TRY</a>

<ul>


<?php include 'trylis.php'; ?>



</ul>

</li>

</ul>


<ul  id="shopA"  class="shcircles">

<li><a id="shop" class="circles"

href="shop.php"

  onmouseover="playSound('http://localhost/GuitarBuddy/media/String3G.mp3');"
 
  onclick="playSound('http://localhost/GuitarBuddy/media/String3G.mp3');">
 

SHOP</a>

<ul>


<?php include 'shoplis.php'; ?>


</ul>

</li>

</ul>





<ul  id="learnA" class="shcircles">

<li><a id="learn" class="circles"

href="learn.php"

   onmouseover="playSound('http://localhost/GuitarBuddy/media/String4D.mp3');"
 
  onclick="playSound('http://localhost/GuitarBuddy/media/String4D.mp3');">

LEARN</a>

<ul>

<?php include 'learnlis.php'; ?>


</ul>

</li>

</ul>



<ul   id="shareA" class="shcircles" >

<li><a id="share" class="circles"

href="share.php"

  onmouseover="playSound('http://localhost/GuitarBuddy/media/String5A.mp3');"
 
  onclick="playSound('http://localhost/GuitarBuddy/media/String5A.mp3');">
 

SHARE</a>

<ul>

<?php include 'sharelis.php'; ?>

</ul>

</li>

</ul>


<ul   id="moreA" class="shcircles" >

<li><a id="more" class="circles"

href="more.php"

  onmouseover="playSound('http://localhost/GuitarBuddy/media/String6E.mp3');"
 
  onclick="playSound('http://localhost/GuitarBuddy/media/String6E.mp3');">
 
MORE</a>

<ul>


<?php include 'morelis.php'; ?>


</ul>

</li>

</ul>

</div>


<div class = "string" id = "s1" ><a 
 
    href="#"
  onmouseover="playSound('http://localhost/GuitarBuddy/media/String1E.mp3');"
  onclick="playSound('http://localhost/GuitarBuddy/media/String1E.mp3');">_______________________________________________________________________________________
  
</a>

</div>


<div class = "string" id = "s2" ><a 
 
    href="#"
  onmouseover="playSound('http://localhost/GuitarBuddy/media/String2B.mp3');"
  onclick="playSound('http://localhost/GuitarBuddy/media/String2B.mp3');">_______________________________________________________________________________________
  
</a>
</div>

<div class = "string" id = "s3" ><a 
 
    href="#"
  onmouseover="playSound('http://localhost/GuitarBuddy/media/String3G.mp3');"
  onclick="playSound('http://localhost/GuitarBuddy/media/String3G.mp3');">_______________________________________________________________________________________
  
</a>
</div>

<div class = "string"  id = "s4" ><a 
 
    href="#"
  onmouseover="playSound('http://localhost/GuitarBuddy/media/String4D.mp3');"
  onclick="playSound('http://localhost/GuitarBuddy/media/String4D.mp3');">_______________________________________________________________________________________
  
</a>
</div>

<div class = "string"  id = "s5" ><a 
 
    href="#"
  onmouseover="playSound('http://localhost/GuitarBuddy/media/String5A.mp3');"
  onclick="playSound('http://localhost/GuitarBuddy/media/String5A.mp3');">_______________________________________________________________________________________
  
</a>
</div>

<div class = "string" id = "s6" ><a 
 
    href="#"
  onmouseover="playSound('http://localhost/GuitarBuddy/media/String6E.mp3');"
  onclick="playSound('http://localhost/GuitarBuddy/media/String6E.mp3');">_______________________________________________________________________________________
  
</a>
</div>

<span id="dummy"></span>
 

<?php include 'footer.php'; ?>

</div>



