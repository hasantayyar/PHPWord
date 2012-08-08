<?php
// Write the file
$objWriter = PHPWord_IOFactory::createWriter($phpword, 'Word2007');

try
{
    $objWriter->save($savePath);
}
catch ( Exception $e )
{
    echo '<pre>';
    var_dump($e);
    die();
}
echo $linkToFile;