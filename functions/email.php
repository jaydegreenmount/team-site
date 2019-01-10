<?php
// The Message
$msg = "First line of text\nSecond line of text";

// Use Wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// Send Email
mail("p458065@tafe.wa.edu.au","My subject",$msg);
?>