<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoomsController extends Controller
{
    public const URI = "https://tahvel.edu.ee/hois_back/timetables/room/38/432";
    public function index()
    {
        $result = http::get(self::URI)
            ->json();
        return $result;
    }

    public function show($id)
    {
        $result = http::get(self::URI)
            ->json();
        $keyed = collect($result)->keyBy(function ($item) {
            return $item['roomId'];
        });
        $keyed->all();
        return $keyed->pull(strtoupper($id));
    }
}

//"https://tahvel.edu.ee/hois_back/timetableevents/timetableByRoom/38?from=2020-11-02T00:00:00Z&room={{$id}}&thru=2020-11-08T00:00:00Z"