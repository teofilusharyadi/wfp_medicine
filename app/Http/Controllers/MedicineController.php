<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Raw query
        $listMedicines = DB::select(DB::raw('select * from medicines'));       
        //Builder query
        $listMedicines = DB::table('medicines')->get();       
        //Eloquent
        $listMedicines = Medicine::all();
        //dd($listMedicines);

        $listMedCategory = DB::select(DB::raw('select generic_name, image from medicines 
        where category_id = 4'));

        //return view('medicine.show',compact('listMedCategory'));
        return view('medicine.index',compact('listMedicines', 'listMedCategory'));             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCategory = DB::select(DB::raw('select name from categories '));

        return view('medicine.create', compact('listCategory'));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        $res = Medicine::find($medicine);
        $msg = "";
        if ($res){
            //
            $msg = $res;
        } else {
            //
            $msg = "tidak ada";
        }
        //dd($res->generic_name);
        return view('medicine.detail', compact('msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy($medicine)
    {
        $medicine = Medicine::find($medicine);
        //dd($category);
        try {
            $medicine->delete();
            return redirect()->route('obat.index')->with('status','Medicine data is deleted');
        }
        catch(\PDOException $e) {
            $msg = "Data deletion failed, make sure child data is nonexistent or not related";

            return redirect()->route('obat.index')->with('error',$msg);
        }
    }

    public function showInfo()
    {
        $result=Medicine::orderBy('harga_produk','DESC')->first();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
             Did you know? <br>The most expensive product is ". $result->nama_produk . "</div>"
        ),200);

    }

    public function front_index() {
        $medicines = Medicine::all();
        return view('frontend.product', compact('medicines'));
    }

    public function addToCart($id) {
        $m = Medicine::find($id);
        $cart = session()->get('cart');

        if (!isset($cart[$id])){
            $cart[$id] = [
                "name" => $m->generic_name,
                "quantity" => 1,
                "price" => 10000,
                "photo" => $m->image
            ];
        } else {
            $cart[$id]["quantity"]++;
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success','obat berhasil ditambahkan ke keranjang');
    }

}
