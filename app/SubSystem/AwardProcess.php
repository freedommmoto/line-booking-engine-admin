<?php

namespace App\SubSystem;

use App\Award;

/**
 * Class Agent
 * @package App\SubSystem\Agent
 */
class AwardProcess
{
    public function makeAward()
    {
        $awardDeatils = $this->getAwardDeatils();
        Award::truncate();

        foreach ($awardDeatils as $details) {
            $award = new Award();
            $award->number = rand(100000, 999999);
            $award->details = $details;
            $award->save();
        }
    }

    public function checkAward($checkNumber): array
    {
        return Award::where('number', $checkNumber)->get()->toArray();
    }

    public static function getAward()
    {
        return Award::get();
    }

    private function getAwardDeatils()
    {
        return [
            'รางวัลที่ 1',
            'รางวัลที่ 2',
            'รางวัลที่ 3',
            'รางวัลที่ 4',
            'รางวัลที่ 5',
            'รางวัลเลขท้าย 3 ตัว',
            'รางวัลเลขท้าย 2 ตัว'
        ];
    }
}
