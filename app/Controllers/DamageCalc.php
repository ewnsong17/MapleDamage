<?php

namespace App\Controllers;

class DamageCalc extends BaseController
{
    public function index()
    {
        return view('damage_calc');
    }

    public function calc($jobIndex = 0)
    {
        $result = [
            'result' => false,
            'index' => $jobIndex,
        ];
        return $this->response->setJSON($result);
    }
}
