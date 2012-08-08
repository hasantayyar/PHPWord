<?php
$filename = "tabledemo.docx";
$savePath = dirname(__FILE__) . '/generated/' . $filename;
$linkToFile = '/demos/generated/' . $filename;
$section = null;
include (dirname(__FILE__) . '/common/init.php');

/*
 * Some predefined styles
 */
$cellStyle = array (
        "borderTopSize" => 1,
        "borderRightSize" => 1,
        "borderBottomSize" => 1,
        "borderLeftSize" => 1,
        "borderColor" => '000'
);

/*
 * This is where the demo starts
 */

/* @var $section PHPWord_Section */
$section->addTitle('Table Demo');

$table = $section->addTable();

// Full Width Cell, gridspan 2
$table->addRow();
$table->addCell(9028, $cellStyle, 2)->addText('Test');

// Two Cells
$table->addRow();
$table->addCell(4514, $cellStyle)->addText('Test');
$table->addCell(4514, $cellStyle)->addText('Test');

// Empty Row
$table->addRow();


include (dirname(__FILE__) . '/common/finish.php');
