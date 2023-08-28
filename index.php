<?php 

class DataItem {
    public int $id;
    public string $name;
    public int $firstNumber;
    public int $secondNumber;
    public int $thirdNumber;
    public string $calculation;
    public string $joke;
    public string $createdAt;
}

// Načtení JSON dat ze zadané adresy
$jsonData = file_get_contents('https://www.digilabs.cz/hiring/data.php');


$dataArray = json_decode($jsonData);

$processedData = [];

foreach ($dataArray as $item) {
    $dataItem = new DataItem();
    $dataItem->id = $item->id;
    $dataItem->name = $item->name;
    $dataItem->firstNumber = $item->firstNumber;
    $dataItem->secondNumber = $item->secondNumber;
    $dataItem->thirdNumber = $item->thirdNumber;
    $dataItem->calculation = $item->calculation;
    $dataItem->joke = $item->joke;
    $dataItem->createdAt = $item->createdAt;
    
    $processedData[] = $dataItem;
}

// Zde máte zpracovaná data ve formě objektů
print_r($processedData);

?>