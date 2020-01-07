<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubSystem\AwardProcess;

class AwardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function award(Request $request)
    {
        $number = $request->input('number');
        $checkData = [];

        if (!empty($request->input('new_ward'))) {
            $process = new AwardProcess();
            $process->makeAward();
        }

        if (!empty($number)) {
            $process = new AwardProcess();
            $checkData = $process->checkAward($number);
        }

        $award = AwardProcess::getAward();

        return view('welcome', ['number' => $number, 'award' => $award , 'checkData' => $checkData]);
    }

}
