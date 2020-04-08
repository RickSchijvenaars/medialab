<?php

namespace App\Http\Controllers;

use App\QrScan;
use App\QrScanLocation;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function location($location) 
    {
        if($location = QrScanLocation::whereName($location)->first()) {
            $scan = QrScan::create(['qr_scan_location_id' => $location->id]);
        }
    }

    public function index()
    {
        $locations = QrScanLocation::with('scans')->get();

        return view('location_index', ['locations' => $locations]);
    }
}