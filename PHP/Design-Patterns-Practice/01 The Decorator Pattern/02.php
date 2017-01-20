<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 10:29
 */

class BasicInspection {
    public function getCost()
    {
        return 25;
    }
}

class BasicInspectionAndOilChange {
    public function getCost()
    {
        return 25 + 19;
    }
}

class BasicInspectionAndOilChangeAndTireRotation {
    public function getCost() {
        return 25 + 19 + 10;
    }
}

echo (new BasicInspectionAndOilChangeAndTireRotation())->getCost();

