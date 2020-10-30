<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AccountsController extends Controller
{
    //activates the account
    public function activate(/*Request $request, $id*/)
    {
        
       // dd('working');
       return view('activate');
    }

    public function confirmActivation(Request $request)
        {

            $validatedData = $request->validate([
                'name' => 'required|email',
                
            ]);

            //dd($validatedData['name']);

            $referee = \App\User::where('email', $validatedData['name'])->first();

            if($referee){
                //accept payments here... 
                //send http requests to firebase for mpesa payments
                dd($referee);
            }
            
            return redirect('accountActivation')->with('status', 'referee doesnt exist in our system!');;
          // return view('activate');
        }
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
}
