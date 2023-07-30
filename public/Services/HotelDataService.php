<?php
class HotelDataService implements DataServiceInterface
{

    public function extractPropertyInfo($data)
    {
        $result = [];

        foreach ($data as $hotel) {
            $hotelName = $hotel['name'];

            foreach ($hotel['rooms'] as $room) {
                $roomCode = $room['code'];
                $totalOrTotalPrice = isset($room['total']) ? $room['total'] : $room['totalPrice'];
                if(array_key_exists('name' ,$room )){
                    $roomName = $room['name'];
                }else{
                    $roomName = '';
                }
                $result[] = [
                    'hotel_name' => $hotelName,
                    'room_name' => $roomName,
                    'room_code' => $roomCode,
                    'total' => $totalOrTotalPrice,
                ];
            }
        }

        return $result;
    }

    function filterAndChooseCheapest($inputArray)
    {

        $cheapestTotals = array();

        foreach ($inputArray as $item) {
            $roomCode = $item['room_code'];
            $total = (float) $item['total'];

            if (isset($cheapestTotals[$roomCode])) {
                if ($total < $cheapestTotals[$roomCode]['total']) {
                    $cheapestTotals[$roomCode] = $item;
                }
            } else {
                $cheapestTotals[$roomCode] = $item;
            }
        }
        $filteredArray = array_values($cheapestTotals);
        usort($filteredArray, function ($item1, $item2) {
            return $item1['total'] > $item2['total'];
        });
        return $filteredArray;
    }

















}














?>