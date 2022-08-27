<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blackbox;
use Illuminate\Http\Request;

use Carbon\Carbon;
use DateTime;

class BlackboxController extends Controller
{
    public function index() {
        $items = User::all();
        return response()->json($items, 200);
        
    }

    public function store(Request $request)
    {
        // $this->authorize('create', Product::class);
        
        // validate the request
        $this->validate($request, [
            'company_name' => 'required',
            'time'         => 'required'
        ]);

        // create the database record for the blackbox
        $data = Blackbox::create([
            'id'            => $request->id,
            'userId'        => $request->userId,
            'auth_key'      => $request->auth_key,
            'company_name'  => $request->company_name,
            'time'          => $request->time,
            'latitude'      => $request->latitude,
            'longitude'     => $request->longitude,
            'altitude'      => $request->altitude,
            'speed'         => $request->speed,
            'accx'          => $request->accx,
            'accy'          => $request->accy,
            'accz'          => $request->accz,
            'gyrox'         => $request->gyrox,
            'gyroy'         => $request->gyroy,
            'gyroz'         => $request->gyroz,
            'roll'          => $request->roll,
            'pitch'         => $request->pitch,
            'yaw'           => $request->yaw,
            'engine'        => $request->engine,
            'ac'            => $request->ac,
            'break'         => $request->break,
            'sonar1'        => $request->sonar1 ,
            'sonar2'        => $request->sonar2,
            'sonar3'        => $request->sonar3,
            'sonar4'        => $request->sonar4,
            'battery'       => $request->battery
        ]);

        
        return response()->json($data, 200);
        // return new ProductResource($data);

    }

    public function show($id) {
        $user = User::where('userId', $id)->get();

        return response()->json($user, 200);
    }

    public function filter(Request $request) {
        $this->validate($request, [
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
        ]);

        // return "test";
        
        $start_at = Carbon::createFromFormat('Y-m-d', $request->start_date);
        $end_at = Carbon::createFromFormat('Y-m-d', $request->end_date);

        // return $request->start_date." ".$request->end_date;

        $start_date = $start_at->format('Y-m-d') . ' 00:00:00';
        $end_date = $end_at->format('Y-m-d') . ' 23:59:59';

        $blackboxs = Blackbox::where('created_at', 'between', [$request->start_date, $request->end_date])
        ->get();
        

        return response()->json($blackboxs, 200);
    }
}