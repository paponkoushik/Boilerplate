<?php

namespace App\Helpers\App\Traits;


trait DashboardHelper
{
    public function generateRandomValuesSumHundred($number_off_value)
    {
        $sum = 100;

        $array_of_sum_hundred = [];
        $element = 0;

        while (array_sum($array_of_sum_hundred) != $sum) {

            $array_of_sum_hundred[$element] = mt_rand(0, $sum / mt_rand(1, $number_off_value));

            if (++$element == $number_off_value) {
                $element = 0;
            }
        }

        return $array_of_sum_hundred;

    }

}