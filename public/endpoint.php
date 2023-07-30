<?php 
require_once '../vendor/autoload.php';
require_once 'Interfaces/DataProviderInterface.php';
require_once 'Interfaces/DataServiceInterface.php';
require_once 'Classes/DataClass.php';
require_once 'Services/HotelDataService.php';

$newData = new DataClass;
$firstApiData  = $newData->getData('https://coresolutions.app/php_task/api/api_v1.php');
$secondApiData  = $newData->getData('https://coresolutions.app/php_task/api/api_v2.php');
$thirdApiData  = $newData->getData('https://coresolutions.app/php_task/api/api_v3.php');

$data = array_merge(
    $firstApiData , $secondApiData , $thirdApiData
);


$dataSer = new HotelDataService;
//extract data 
$data  = $dataSer->extractPropertyInfo($data);
//sort data 
$data = $dataSer->filterAndChooseCheapest($data);







?>