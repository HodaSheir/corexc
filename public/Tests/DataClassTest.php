<?php 
require_once 'public/Interfaces/DataProviderInterface.php'; 
require_once('public/Classes/DataClass.php');   

use PHPUnit\Framework\TestCase;

class DataClassTest extends TestCase {

    public function testGetData(){
        $newData = new DataClass;
        $this->assertIsArray($newData->getData('https://coresolutions.app/php_task/api/api_v1.php'));

    }



}



















?>