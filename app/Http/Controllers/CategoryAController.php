<?php

namespace App\Http\Controllers;
use App\Models\CategoryA;
use Illuminate\Http\Request;
use App\Models\Advices;
class CategoryAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('categories_a', [
            'categories_a' => CategoryA::all()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // return view('category', [
        //     'category'=> CategoryA::all()->where('id', $id)->first()
        // ]);
        return view('category', [
            'category'=> Advices::all()
        ]);
        // return view('categories_a', [
        //     'categories_a' => CategoryA::all()
        // ]);
    }
 

    // public function show($id)
    // {
    //     $category = CategoryA::with('advices')->find($id);
    
    //     if ($category) {
    //         return view('category_a', ['category' => $category]);
    //     } else {
    //         // Handle case when category is not found
    //     }
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
