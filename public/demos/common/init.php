<?php
include (dirname(__FILE__) . '/../../../library/PHPWord.php');

$phpword = new PHPWord();

/**
 * Document Properties
 */
$properties = $phpword->getProperties();
$properties->setCreator('PHPWord Demo');
$properties->setCompany('PHPWord Demo');
$properties->setTitle('PHPWord Demo');
$properties->setDescription('PHPWord Demo');
$properties->setCategory('PHPWord Demo');
$properties->setLastModifiedBy('PHPWord Demo');
$properties->setCreated(time());
$properties->setModified(time());
$properties->setSubject('PHPWord Demo');
$properties->setKeywords('PHPWord Demo');

$section = $phpword->createSection();