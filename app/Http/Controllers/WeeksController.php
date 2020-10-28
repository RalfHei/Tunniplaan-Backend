<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeeksController extends Controller
{
    public const URI = "https://tahvel.edu.ee/hois_back/timetables/timetableStudyYearWeeks/432";
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
            return $item['weekNr'];
        });
        $keyed->all();
        return $keyed->pull($id);
    }
}
