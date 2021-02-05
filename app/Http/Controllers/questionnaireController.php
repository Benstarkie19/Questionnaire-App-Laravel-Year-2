<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionnaire;

class questionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $questionnaire = Questionnaire::all()->toArray();
      return view('questionnaire.index', compact('questionnaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questionnaire.create');
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
      $questionnaire = new Questionnaire([
          'answer1'    =>  $request->get('answer1'),
          'answer2'    =>  $request->get('answer2'),
          'answer3'    =>  $request->get('answer3'),
          'answer4'    =>  $request->get('answer4'),
          'number'    =>  $request->get('number'),
      ]);
      $questionnaire->save();
      return redirect()->route('questionnaire.create')->with('success', 'Data Added');
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
      $questionnaire = Questionnaire::find($id);
      return view('questionnaire.edit', compact('questionnaire', 'id'));
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
        'answer2'    =>  'required',
        'answer3'    =>  'required',
        'answer4'    =>  'required',
        'number'    =>  'required',
    ]);
    $questionnaire = Questionnaire::find($id);
    $questionnaire->answer1 = $request->get('answer1');
    $questionnaire->answer2 = $request->get('answer2');
    $questionnaire->answer3 = $request->get('answer3');
    $questionnaire->answer4 = $request->get('answer4');
    $questionnaire->number = $request->get('number');
    $questionnaire->save();
    return redirect()->route('questionnaire.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $questionnaire = Questionnaire::find($id);
     $questionnaire->delete();
     return redirect()->route('questionnaire.index')->with('success', 'Data Deleted');
    }
}
