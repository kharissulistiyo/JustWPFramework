<?php

/*
* HTML input form elements
* Created September 01, 2013
* ======================= */

?>

<h3>Text</h3>

<input value="Type some text here." size="30" type="text"> A text input field.
<br /><br />

<input value="88888888" size="10" type="password"> A password input field.
<br /><br />

<input value="Secret Stuff to send to CGI" type="hidden">There's hidden input here. Use <em>View / Page Source</em> to see the HTML source code.<p></p> to see it.
<br /><br />



<h3>Radio Button</h3>

<input name="radio" type="radio">Try clicking this button
<br /><br />

<input name="radio" type="radio">and this button,
<br /><br />

<input name="radio" type="radio">and this button, all at once.
<br /><br />




<h3>Check Boxes</h3>



<input name="czech" value="1" type="checkbox">Czech Republic
<br /><br />

<input name="czech" value="2" type="checkbox">Czech In
<br /><br />

<input name="czech" value="3" type="checkbox">Czech Out
<br /><br />

<input name="czech" value="4" type="checkbox">Czech Both Ways
<br /><br />




<h3>Buttons</h3>



A <input value="Button" type="button"> that does nothing.
<br /><br />

A <input value="Submit" type="submit"> button (ACTION specifies reloading this page).
<br /><br />

A <input value="Reset" type="reset"> button (resets all of the above elements to default values).
<br /><br />




<h3>Selection Input Forms</h3>



<select size="3">

	<option>ONE</option>
	<option>TWO</option>
	<option>THREE</option>

</select>



<h3>Text Area</h3>


<textarea rows="3" cols="40">A textarea input field,
with 3 rows and 40 columns.
</textarea>


<hr />



<h3>Forms With Label:</h3>





<p>
	<label for="user">User Name:</label>
	<input id="user" value="Type your user namehere." size="30" type="text" />
</p>


<p>
	<label for="message">Message:</label>
	<textarea name="message" id="message" cols="30" rows="10">A textarea input field,
with 3 rows and 40 columns.</textarea>
</p>



<hr />



<h3>Form with Fieldset:</h3>


<fieldset><legend><b>Step One: Personal Information</b></legend>
<p>Name: <input size="20" type="text"></p>
<p>Email: <input size="20" type="text"></p>
</fieldset>


<fieldset><legend><b>Step Two: Favorites</b></legend>
<p>Favorite Color:</p>
<p>Red: <input type="radio"></p>
<p>Blue: <input type="radio"></p>
<p>Green: <input type="radio"></p>

<p>Favorite Toothpaste:</p>
<p>Crest: <input type="checkbox"></p>
<p>Close-Up: <input type="checkbox"></p>
<p>Gleem: <input type="checkbox"></p>
</fieldset>



<fieldset><legend><b>Step Two: Favorites</b></legend>
<p>Favorite Color:
Red: <input type="radio">
Blue: <input type="radio">
Green: <input type="radio"></p>

<p>Favorite Toothpaste:
Crest: <input type="checkbox">
Close-Up: <input type="checkbox">
Gleem: <input type="checkbox"></p>
</fieldset>

