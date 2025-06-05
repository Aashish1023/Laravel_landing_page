<?php
use App\Models\Service;

function getServices(){
    Service::orderBy('name','ASC')->where('status',1)->get();
    return $services;
}
?>