<?php
<?php

$homepage = file_get_contents('https://www.smurfhotel.nl/onlinecounter');

if ($homepage < 20) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

?>