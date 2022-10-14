<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['store', 'update', 'destroy']);
    }

    public function list()
    {
        $sliders = Slider::all();

        return view('slider.index', compact('sliders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return response()->json([
            'success' => true,
            'data' => $sliders
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
            'nama_slider' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp'
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        }

        $Slider = Slider::create($input);

        return response()->json([
            'success' => true,
            'data' => $Slider
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $Slider)
    {
        return response()->json([
            'success' => true,
            'data' => $Slider
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $Slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $Slider)
    {

        $validator = Validator::make($request->all(), [
            'nama_slider' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();

        if ($request->has('gambar')) {
            File::delete('uploads/' . $Slider->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        } else {
            unset($input['gambar']);
        }

        $Slider->update($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $Slider
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $Slider)
    {
        File::delete('uploads/' . $Slider->gambar);
        $Slider->delete();

        return response()->json([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
