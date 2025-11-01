<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room_detail;
use Exception;

class RoomInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data=array(
            'pagetitle'=>'Room Preference > Dashboard',
            'room_info'=>room_detail::where('id','1')->first(),
        );
        return view('room.preference.index')->with($data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

        try {
            // Update room preference information
            $room = room_detail::find($id);
            $room->beds = $request->input('bed');
            $room->vacancies = $request->input('vacancies');
            $room->save();
            $sucessMsg = 'Your room preference information has been successfully updated!';
            return redirect('/roomInfoSection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            return redirect('/roomInfoSection')->with('error',$exception->getMessage());
        }

    }

    public function destroy($id)
    {

    }


}
