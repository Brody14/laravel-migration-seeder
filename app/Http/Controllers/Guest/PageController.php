<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $trains = Train::where('departure_time', '>=', now())->get();

        $data = [
            'trains' => $trains
        ];
        return view('welcome', $data);
    }
}
