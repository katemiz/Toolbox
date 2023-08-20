<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Attachment;
use App\Models\Counter;
use App\Models\EndProduct;



class EndProductController extends Controller
{

    public function view()
    {
        $ep = EndProduct::find(request('id'));

        $attachments = Attachment::where('model_name','EndProduct')->where('model_item_id',request('id'))->get(); 


        return view('end_product.ep-view',[

            'ep' => $ep,
            'attachments' => $attachments,
            'canEdit' => true

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
        $props['remarks'] = $request->input('remarks');

        if ( isset($request->id) && !empty($request->id)) {
            // update
            EndProduct::find($request->id)->update($props);
            $id = $request->id;
            $ep = EndProduct::find($request->id);
        } else {
            // create
            $props['number'] = $this->getProductNo();

            $ep = EndProduct::create($props);
            $id = $ep->id;
        }

        return redirect('/endproducts/'.$id);
    }






    public function getProductNo() {

        $counter = Counter::find(1111);
        $new_no = $counter->product_no+1;
        $counter->update(['product_no' => $new_no]);         // Update Counter

        return $new_no;
    }

















}
