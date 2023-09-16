<?php include "includes/header.php";?>

<!-- START LEFT COL -->
<section>
  <h2 class="pageID"><?=$PageID?></h2>
  <p>Contact Eydrus with any concerns or questions you may have! </p>
  <p>eydarusosman@yahoo.com</p>
  <a href="tel:012064308225">(206) 430-8225</a>
</section>

<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<p>You can email or call me or just fill out the form below.</p><br>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "eydarusosman@yahoo.com";  //place your/your client's email address here
        $toName = "Eydrus Ahmed"; //place your client's name here
        $website = "Osman's Decor";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</aside>
<!-- END RIGHT COL -->

<?php include "includes/footer.php";?>
