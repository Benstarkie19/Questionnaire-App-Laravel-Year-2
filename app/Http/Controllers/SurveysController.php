<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surveys;

class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Survey = Surveys::all()->toArray();
      return view('Surveys.index', compact('Surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Surveys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'answer1'    =>  'required',
            'answer2'     =>  'required',
            'answer3'    =>  'required',
            'answer4'     =>  'required',
            'number'    =>  'required',
        ]);
        $Surveys = new Surveys([
            'answer1'    =>  $request->get('answer1'),
            'answer2'    =>  $request->get('answer2'),
            'answer3'    =>  $request->get('answer3'),
            'answer4'    =>  $request->get('answer4'),
            'number'    =>  $request->get('number'),
        ]);
        $Surveys->save();
        return redirect()->route('Surveys.create')->with('success', 'Data Added');
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
      $Surveys = Surveys::find($id);
      return view('Surveys.edit', compact('Surveys', 'id'));
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
      $this->validate($request, [
         'answer1'    =>  'required',
         'answer2'     =>  'required',
         'answer3'     =>  'required',
         'answer4'     =>  'required',
         'number'     =>  'required',
     ]);
     $Surveys = Surveys::find($id);
     $Surveys->answer1 = $request->get('answer1');
     $Surveys->answer1 = $request->get('answer2');
     $Surveys->fanswer1 = $request->get('answer3');
     $Surveys->answer1 = $request->get('answer4');
     $Surveys->number = $request->get('number');
     $Surveys->save();
     return redirect()->route('Surveys.index')->with('success', 'Data Updated');
    }
    /**
     * Update the specified resource in s
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
