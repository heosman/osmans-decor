<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div> <br>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div> <br>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        Describe your business and services.<br /><textarea name="Details" cols="60" rows="4" placeholder="Type here..." tabindex="60"></textarea>
    </label>
</div>	<br>
<div>	
<div>	
    <label>
        Who is your target audience?<br /><textarea name="Details" cols="60" rows="2" placeholder="Type here..." tabindex="60"></textarea>
    </label>
</div>	<br>
<div>	
    <fieldset>
        <legend>Do you want a new website built or are you redesigning an existing website?</legend>
        <input type="radio" name="New_website_or_redesign?" value="New website" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> New website <br />
        <input type="radio" name="New_website_or_redesign?" value="Redesign of an existing site" /> Redesign of an existing site <br />
    </fieldset>
</div><br>
<div>	
    <label>
        What is the goal of your website?<br /><textarea name="Details" cols="60" rows="2" placeholder="Type here..." tabindex="60"></textarea>
    </label>
</div>	<br>
<div>
    <label>
        What are the requirements/needs for your website?<br /><textarea name="Issues" cols="60" rows="4" placeholder="Type here..." tabindex="60"></textarea>
    </label>
</div>	<br>

<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div><br>

<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->
