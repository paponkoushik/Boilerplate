<?php

namespace App\Http\Controllers\App\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function view(){
        return view('all-notifications.index');
    }
}
