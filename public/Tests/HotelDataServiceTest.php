<?php
require_once 'public/Interfaces/DataServiceInterface.php';
require_once('public/Services/HotelDataService.php');
use PHPUnit\Framework\TestCase;

class HotelDataServiceTest extends TestCase
{

    public $exampleData = array(
        0 =>
        array(
            'name' => 'Hotel B',
            'stars' => 5,
            'rooms' =>
            array(
                0 =>
                array(
                    'code' => 'DBL-RM',
                    'net_price' => '150.00',
                    'taxes' =>
                    array(
                        'amount' => '15.00',
                        'currency' => 'EUR',
                        'type' => 'TAXESANDFEES',
                    ),
                    'total' => '165.00',
                ),
                1 =>
                array(
                    'code' => 'HF-BOD',
                    'net_price' => '130.00',
                    'taxes' =>
                    array(
                        'amount' => '13.00',
                        'currency' => 'EUR',
                        'type' => 'TAXESANDFEES',
                    ),
                    'total' => '143.00',
                ),
                2 =>
                array(
                    'code' => 'QUN-ROM',
                    'net_price' => '143.00',
                    'taxes' =>
                    array(
                        'amount' => '11.50',
                        'currency' => 'EUR',
                        'type' => 'TAXESANDFEES',
                    ),
                    'total' => '154.50',
                ),
            ),
        ),
        1 =>
        array(
            'name' => 'Hotel D',
            'stars' => 5,
            'rooms' =>
            array(
                0 =>
                array(
                    'code' => 'SNGRM',
                    'net_price' => '100.00',
                    'taxes' =>
                    array(
                        'amount' => '15.00',
                        'currency' => 'EUR',
                        'type' => 'TAXESANDFEES',
                    ),
                    'total' => '115.00',
                ),
                1 =>
                array(
                    'code' => 'FU-BOD',
                    'net_price' => '160.00',
                    'taxes' =>
                    array(
                        'amount' => '16.00',
                        'currency' => 'EUR',
                        'type' => 'TAXESANDFEES',
                    ),
                    'total' => '176.00',
                ),
                2 =>
                array(
                    'code' => 'POAROM',
                    'net_price' => '155.00',
                    'taxes' =>
                    array(
                        'amount' => '14.00',
                        'currency' => 'EUR',
                        'type' => 'TAXESANDFEES',
                    ),
                    'total' => '169.00',
                ),
            ),
        ),
    );
    public function testExtractPropertyInfo()
    {
        $newHotelData = new HotelDataService;
        $this->assertIsArray($newHotelData->extractPropertyInfo($this->exampleData));
    }






}





?>