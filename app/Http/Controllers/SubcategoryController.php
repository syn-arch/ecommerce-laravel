<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['store', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::with('category')->get();

        return response()->json([
            'data' => $subcategories
        ]);
    }

    public function list()
    {
        $categories = Category::all();

        return view('subkategori.index', compact('categories'));
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
            'id_kategori' => 'required',
            'nama_subkategori' => 'required',
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

        $Subcategory = Subcategory::create($input);

        return response()->json([
            'success' => true,
            'data' => $Subcategory
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $Subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $Subcategory)
    {
        return response()->json([
            'data' => $Subcategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $Subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $Subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $Subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $Subcategory)
    {

        $validator = Validator::make($request->all(), [
            'id_kategori' => 'required',
            'nama_subkategori' => 'required',
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
            File::delete('uploads/' . $Subcategory->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        } else {
            unset($input['gambar']);
        }

        $Subcategory->update($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $Subcategory
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $Subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $Subcategory)
    {
        File::delete('uploads/' . $Subcategory->gambar);
        $Subcategory->delete();

        return response()->json([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
