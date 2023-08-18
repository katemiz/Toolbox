<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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



}
