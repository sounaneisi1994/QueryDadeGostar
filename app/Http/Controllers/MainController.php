<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        //number of ticket
        $topic = new Topic();

        return response()->json([
            'number of tickets'=> $topic->allNumberTickets(), //query1
            'number of tickets and its chlidren'=> $topic->allNumberTicketAndChildren(), //query2
        ]);
    }
}
