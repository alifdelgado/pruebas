<?php
ini_set('display_errors', 'On');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$directory = 'documents';
$inputFileName = $_FILES['file']['name'];
if(!is_dir($directory))
{
    mkdir($directory, 0777, true);
}

$resultDirectory = "{$directory}/{$inputFileName}";
move_uploaded_file($_FILES['file']['tmp_name'], $resultDirectory);
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($resultDirectory);
$worksheet = $spreadsheet->getActiveSheet();

// echo '<table>' . PHP_EOL;
// foreach ($worksheet->getRowIterator() as $row)
// {
//     echo '<tr>' . PHP_EOL;
//     $cellIterator = $row->getCellIterator();
//     $cellIterator->setIterateOnlyExistingCells(FALSE);
//     foreach ($cellIterator as $cell)
//     {
//         echo "<td>{$cell->getValue()}</td>".PHP_EOL;
//     }
//     echo '</tr>' . PHP_EOL;
// }
// echo '</table>' . PHP_EOL;

$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();
$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
echo '<table>' . PHP_EOL;
for ($row = 1; $row <= $highestRow; ++$row)
{
    echo '<tr>' . PHP_EOL;
    for ($col = 1; $col <= $highestColumnIndex; ++$col)
    {
        $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
        echo '<td>' . $value . '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;