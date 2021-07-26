<?php

namespace App\Http\Controllers;

use App\Models\Generator;
use Illuminate\Http\Request;

class MyGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function retrieve($id)
    {
        $number =  Generator::select('id as unique_id',
                                    'random_number',
                                    'created_at as date_created')
                                ->where('id',$id)
                                ->first();
        if($number){
            return json_encode($number);
        }else{
            return json_encode(array('message'=>'No value assigned that id'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate ()
    {
        $random_number = rand(1,150);
        $number = new Generator ();
        $number->random_number = $random_number;
        $number->save();

        $response = array('unique_id' => $number->id,'Random value generated' =>$random_number);

        return json_encode($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }



}
