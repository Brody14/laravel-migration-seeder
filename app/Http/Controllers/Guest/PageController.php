<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $trains = Train::whereDate('departure_date', '>=', date('Y-m-d'))->get();

        $data = [
            'trains' => $trains
        ];
        return view('welcome', $data);
    }
}
