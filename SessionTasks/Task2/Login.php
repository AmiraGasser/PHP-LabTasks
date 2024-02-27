<?php
if($_POST["Email"] == $_COOKIE["Email"] && $_POST["Password"] == $_COOKIE["Password"])
echo "Welcom , " . $_COOKIE["Fname"]. $_COOKIE["Lname"];
else
include "Login.html";