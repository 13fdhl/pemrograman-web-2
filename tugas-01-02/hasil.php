<?php
$txtFound = isset($_POST["txtFound"]) ? $_POST[ "txtFound"] : "";
$cmdFound = isset($_POST["cmdFound"]) ? $_POST[ "cmdFound"] : "";
if ($cmdFound == "Found" AND $txtFound != "")
    {
        echo "Keyword = ".$txtFound;
    }
else 
    {
        header("Location: cari.html");
    }
?>