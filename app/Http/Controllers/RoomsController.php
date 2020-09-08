<?php

namespace App\Http\Controllers;

use App\Client;
use App\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function checkAvailableRooms($client_id, Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $client = new Client();
        $room = new Room();

        $data[] = '';
        $data['dateFrom'] = $dateFrom;
        $data['dateTo'] = $dateTo;
        $data['rooms'] = $room->getAvailablerooms($dateFrom, $dateTo);
        $data['client'] = $client->find($client_id);

        return view('rooms/checkAvailableRooms', $data);
    }
}
