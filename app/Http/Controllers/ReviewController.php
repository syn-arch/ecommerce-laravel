<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['store', 'update', 'destroy']);
    }

    public function list()
    {
        return view('review.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();

        return response()->json([
            'success' => true,
            'data' => $reviews
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_member' => 'required',
            'id_produk' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();
        $Review = Review::create($input);

        return response()->json([
            'success' => true,
            'data' => $Review
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $Review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $Review)
    {
        return response()->json([
            'success' => true,
            'data' => $Review
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $Review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $Review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $Review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $Review)
    {

        $validator = Validator::make($request->all(), [
            'id_member' => 'required',
            'id_produk' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();

        $Review->update($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $Review
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $Review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $Review)
    {
        $Review->delete();

        return response()->json([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
