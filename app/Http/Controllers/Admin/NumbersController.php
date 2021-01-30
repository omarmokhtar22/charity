<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NumberRequest;
use Illuminate\Http\Request;
use App\Models\Number;

class NumbersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Number $number)
    {
        $this->authorize('viewAny',  $number);
        $number = Number::findorfail(1);
        return view('admin.number.index',compact('number'));
    }

    public function store(NumberRequest $request)
    {
        $number = Number::findorfail(1);
        $number->Update([
            'field_1' => $request->field_1,
            'value_1' => $request->value_1,
            'field_2' => $request->field_2,
            'value_2' => $request->value_2,
            'field_3' => $request->field_3,
            'value_3' => $request->value_3,
            'field_4' => $request->field_4,
            'value_4' => $request->value_4,
        ]);
        return redirect()->back();
    }
}
