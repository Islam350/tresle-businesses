<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $result=Business::latest()->paginate();
        return Response::json(['success'=>true,'data'=>$result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate request parameters
        $attributes=$request->validate([
            'name'          =>  ['required', 'min:10', 'max:50'],
            'price'         =>  ['required', 'numeric', 'digits_between:4,7'],
            'city_id'       =>  ['required','exists:cities,id'],
        ]);
        // Insert new database record
        $business=Business::create($attributes);

        // Return success response
        return Response::json(['success'=>true,'data'=>$business],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Business $business)
    {
        // Return success response
        return Response::json(['success'=>true,'data'=>$business]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Business $business)
    {
        // Validate request parameters
        $attributes=$request->validate([
            'name'          =>  ['min:10', 'max:50'],
            'price'         =>  ['numeric', 'digits_between:4,7'],
            'city_id'       =>  ['exists:cities,id'],
        ]);
        // Update database record
        $business->update($attributes);

        // Return success response
        return Response::json(['success'=>true,'data'=>$business]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Business $business)
    {
        // Delete record
        $result=$business->delete();

        // Return success/fail response
        return $result ? Response::json(['success'=>true]) : Response::json(['success'=>false],500);
    }
}
