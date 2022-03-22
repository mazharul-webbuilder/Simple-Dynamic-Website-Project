<?php


namespace App\classes;
class Series
{
    public $startingNumber;
    public $endingNumber;
    public $SeriesArray = [];

    public function __construct($post = null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];

    }
    public function mySeries()
    {
        for($i = $this->startingNumber; $i <= $this->endingNumber; $i++)
        {
            $this->SeriesArray[] = $i;
        }
        return $this->SeriesArray;
    }

}