<?php
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
		<div class="content-primary">
	<form>
		<ul data-role="listview">
			<li data-role="fieldcontain">
	        	<label for="name">Text Input:</label>
	        	<input type="text" name="name" id="name" value=""  />
			</li>
			<li data-role="fieldcontain">
	        	<label for="textarea">Textarea:</label>
			<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
			</li>
			<li data-role="fieldcontain">
	        	<label for="search">Search Input:</label>
	         	<input type="search" name="password" id="search" value=""  />
			</li>
			<li data-role="fieldcontain">
	        	<label for="slider2">Flip switch:</label>
				<select name="slider2" id="slider2" data-role="slider">
					<option value="off">Off</option>
					<option value="on">On</option>
				</select>
			</li>
			<li data-role="fieldcontain">
	        	<label for="slider">Slider:</label>
			 	<input type="range" name="slider" id="slider" value="0" min="0" max="100"  />
			</li>
			<li data-role="fieldcontain">
	        	<fieldset data-role="controlgroup">
					<legend>Choose as many snacks as you'd like:</legend>
					<input type="checkbox" name="checkbox-1a" id="checkbox-1a" class="custom" />
					<label for="checkbox-1a">Cheetos</label>
	
					<input type="checkbox" name="checkbox-2a" id="checkbox-2a" class="custom" />
					<label for="checkbox-2a">Doritos</label>
	
					<input type="checkbox" name="checkbox-3a" id="checkbox-3a" class="custom" />
					<label for="checkbox-3a">Fritos</label>
	
					<input type="checkbox" name="checkbox-4a" id="checkbox-4a" class="custom" />
					<label for="checkbox-4a">Sun Chips</label>
			    </fieldset>
			</li>
			
			<li data-role="fieldcontain">
				<fieldset data-role="controlgroup" data-type="horizontal">
			    	<legend>Font styling:</legend>
			    	<input type="checkbox" name="checkbox-6" id="checkbox-6" class="custom" />
					<label for="checkbox-6">b</label>
	
					<input type="checkbox" name="checkbox-7" id="checkbox-7" class="custom" />
					<label for="checkbox-7"><em>i</em></label>
	
					<input type="checkbox" name="checkbox-8" id="checkbox-8" class="custom" />
					<label for="checkbox-8">u</label>
			    </fieldset>
			</li>
			<li data-role="fieldcontain">
				 <fieldset data-role="controlgroup">
			    	<legend>Choose a pet:</legend>
			         	<input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
			         	<label for="radio-choice-1">Cat</label>

			         	<input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
			         	<label for="radio-choice-2">Dog</label>

			         	<input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
			         	<label for="radio-choice-3">Hamster</label>

			         	<input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
			         	<label for="radio-choice-4">Lizard</label>
			    </fieldset>
			</li>
			
			
			<li data-role="fieldcontain">
			    <fieldset data-role="controlgroup" data-type="horizontal">
			     	<legend>Layout view:</legend>
			         	<input type="radio" name="radio-choice-b" id="radio-choice-c" value="on" checked="checked" />
			         	<label for="radio-choice-c">List</label>
			         	<input type="radio" name="radio-choice-b" id="radio-choice-d" value="off" />
			         	<label for="radio-choice-d">Grid</label>
			         	<input type="radio" name="radio-choice-b" id="radio-choice-e" value="other" />
			         	<label for="radio-choice-e">Gallery</label>
			    </fieldset>
			</li>

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
