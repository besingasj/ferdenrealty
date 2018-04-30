<?php

namespace App\Http\Controllers;

use App\Mail\ContactAgents;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgentController extends Controller
{
    public function __construct()
    {
        return redirect()->route('properties.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agents');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contactAgentSubmit(Request $request)
    {
        $agents = User::where('level', 'agent')->get();

        if (!is_null($agents)) {
            foreach ($agents as $agent) {
                Mail::to($agent)->send(new ContactAgents($request, $agent));
            }
        }
        $data = [
            'name' => $request->name,
            'body' => $request->message
        ];

//        Mail::send('emails.mail', $data, function($message) use ($request) {
//            $message->to('besingamk1@gmail.com', 'Mark Kevin Besinga')
//                ->subject('Ferden Realty Corporation : Contact Agents');
//            $message->from($request->email, $request->name);
//        });

        return response()->json([
            'message' => 'Sent!'
        ]);
    }
}
