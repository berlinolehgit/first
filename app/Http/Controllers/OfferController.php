<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        $offers = Offer::get();
        return view('offers.index',compact('offers'));
    }

    public function add(){
        return view('offers.add');
    }

    public function submit(Request $request){
            $offers = Offer::create([
                'type_object' => $request->input('type_object'),
                'price' => $request->input('price'),
                'type_price' => $request->input('type_price'),
            ]);
        $offers->save();
        return redirect()->route('offers.index');
    }

    public function edit(Offer $offer){
        $prices  = Offer::$getprise;
        return view('offers.edit',compact('offer','prices'));
    }

    public function update(Request $request, Offer $offer){
        $offer ->update([
            'type_object' => $request->input('type_object'),
            'price' => $request->input('price'),
            'type_price' => $request->input('type_price'),
        ]);
     return   redirect()->route('offers.index');
    }

    public function delete( Offer $offer){

        $offer ->delete();
        return   redirect()->route('offers.index');
    }
}
