<?php

interface DataServiceInterface
{
    public function extractPropertyInfo($data);
    public function filterAndChooseCheapest($data);
}


?>