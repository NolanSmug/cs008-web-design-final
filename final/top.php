<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);

$pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Music Around the World</title>
        <meta name="author" content="Nolan Cyr and Matt Swaim">
        <meta name="description" content="All about music, bands, and guitar. Learn how to play the guitar, learn about the history of the guitar, 
        and learn about famous bands that incorporate the guitar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 825px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>
    
<?php 
print '<body class="' . $pathParts['filename']. '">';


include 'connect-DB.php';
print PHP_EOL;
include 'header.php';
print PHP_EOL;
include 'nav.php';

print '<!-- ### Start of Body Element ### -->';
?>
