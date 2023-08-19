<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Counter;
use App\Models\EndProduct;



class EndProductController extends Controller
{

    public function view()
    {
        $ep = EndProduct::find(request('id'));

        return view('end_product.ep-view',[

            'ep' => $ep

        ]);


    }




    public function form()
    {

        $ep = false;

        if (request('id')) {
            $ep = EndProduct::find(request('id'));
        } 

        return view('end_product.ep-form',[
            'ep' => $ep
        ]);


    }





    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|min:10',
        ]);

        //$props['user_id'] = Auth::id();
        $props['description'] = $validated['description'];
        // $props['remarks'] = $request->input('remarks');

        if ( isset($request->id) && !empty($request->id)) {
            // update
            EndProduct::find($request->id)->update($props);
            $id = $request->id;
            $ep = EndProduct::find($request->id);
        } else {
            // create
            $props['product_no'] = $this->getProductNo();
            $props['version'] = 0;

            $ep = EndProduct::create($props);
            $id = $ep->id;
        }

        return redirect('/endproducts/'.$id);
    }



    public function getProductNo() {

        $counter = Counter::find(1111);

        return $counter->product_no+1;
    }

















}
