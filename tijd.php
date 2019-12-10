<?php
if (strpos($argv[1], 's')){
    $tijd = (int)$argv[1];
    echo "$tijd seconden" . PHP_EOL;

}
else {
    echo "je stinkt, dat is niet tijd" . PHP_EOL;
}