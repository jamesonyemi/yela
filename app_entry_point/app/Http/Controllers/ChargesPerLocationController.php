<?php

namespace App\Http\Controllers;

use App\Models\ChargesPerLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ChargesPerLocationController extends Controller
{

    protected $rules = [

        'unit_price'     => 'required|int|Min:1|',
        'origin'         => 'required|numeric|',
        'destination'    => 'required|numeric|',

    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('livewire.settings.charges-per-location.show-charges', [

            'chargesPerLocation' => ChargesPerLocation::where('country_of_receiver', 'like', '%'.$this->search.'%')
                ->orWhere('country_of_sender', 'like', '%'.$this->search.'%')
                ->orWhere('unit_price', 'like', '%'.$this->search.'%')->latest()->paginate(),

         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('livewire.settings.charges-per-location.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $this->validate();
        ChargesPerLocation::create( $this->data() );
        session()->flash('message', 'New Charges added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChargesPerLocation  $chargesPerLocation
     * @return \Illuminate\Http\Response
     */
    public function show(ChargesPerLocation $chargesPerLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChargesPerLocation  $chargesPerLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(ChargesPerLocation $chargesPerLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChargesPerLocation  $chargesPerLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChargesPerLocation $chargesPerLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChargesPerLocation  $chargesPerLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChargesPerLocation $chargesPerLocation)
    {
        //
    }
}
