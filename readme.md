# Project for generating DataURI

Just was a sample project to quickly try to write a program to return Data 
Uri's for injecting images into html.

## ToDO

- Write Tests?

## Using

After cloning or downloading the repo you will need 
[Composer](http://getcomposer.org) installed.

Then run
`Composer install`

### Example

`
<?php
require 'vendor/autoload.php';

use jnmorse\DataUri;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <img src="<?=DataUri::make('image.jpg')?>">
</body>
</html>
`