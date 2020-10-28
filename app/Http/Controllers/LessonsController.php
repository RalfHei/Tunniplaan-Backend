<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class LessonsController extends Controller
{
    public function rooms($id, $wk)
    {
        $request = Request::create("/api/weeks/{$wk}", 'GET');
        $response = app()->handle($request);
        $collection = collect($response->getOriginalContent());

        $start = $collection->get('start');
        $end = $collection->get('end');

        $result = http::get("https://tahvel.edu.ee/hois_back/timetableevents/timetableByRoom/38?from={$start}&room={$id}&thru={$end}")
            ->json();
        return $result;
    }
    public function teachers($id, $wk)
    {
        $request = Request::create("/api/weeks/{$wk}", 'GET');
        $response = app()->handle($request);
        $collection = collect($response->getOriginalContent());

        $start = $collection->get('start');
        $end = $collection->get('end');

        $result = http::get("https://tahvel.edu.ee/hois_back/timetableevents/timetableByTeacher/38?from={$start}&teachers={$id}&thru={$end}")
            ->json();
        return $result;
    }
    public function groups($id, $wk)
    {
        $request = Request::create("/api/weeks/{$wk}", 'GET');
        $response = app()->handle($request);
        $collection = collect($response->getOriginalContent());

        $start = $collection->get('start');
        $end = $collection->get('end');

        $result = http::get("https://tahvel.edu.ee/hois_back/timetableevents/timetableByGroup/38?from={$start}&studentGroups={$id}&thru={$end}")
            ->json();
        return $result;
    }
}

//