<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QrScanLocation extends Model
{
    public function scans() {
        return $this->hasMany('App\QrScan');
    }
}
