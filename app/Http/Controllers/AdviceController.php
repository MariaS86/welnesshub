<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advices;
use App\Models\CategoryA;
use Illuminate\Support\Facades\Gate;

class AdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $perpage = $request->perpage ?? 2;
    return view('advice', [
        'advices' => Advices::paginate($perpage)->withQueryString()
    ]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function create()
    // {
    //     return view('advice_create', [
    //         'categories_a'=> CategoryA::all()
    // ]);
    // }
    public function create()
    {
        if (Gate::denies('add-advices')) {
            return redirect('/error')->with('message', 'У вас нет разрешения добавлять советы');
        }
    
        return view('advice_create', [
            'categories_a' => CategoryA::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    if (Gate::denies('add-advices')) {
        return redirect('/error')->with('message', 'У вас нет разрешения добавлять советы');
    }

    // Ваш существующий код сохранения совета
            $validated = $request->validate([
            'name' => 'required',
            'text'=> 'required',
            'category_id' =>'integer'
        ]);
        $advice=new Advices($validated);
        $advice->save();
        return redirect('/advice');
}

    // public function store(Request $request)
    // {
    //     //
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'text'=> 'required',
    //         'category_id' =>'integer'
    //     ]);
    //     $advice=new Advices($validated);
    //     $advice->save();
    //     return redirect('/advice');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
 
    // // $categories_a = Category::all(); // Предполагая, что вы хотите получить все категории
    // // $advice = Advice::find($id); // Получение совета для редактирования

    // // return view('advice_edit', ['categories_a' => $categories_a, 'advice' => $advice]);

    //     return view('advice_edit', [
    //         'advice'=>Advices::all()->where('id',$id)->first(),
    //         'categories_a'=>CategoryA::all()
    //     ]);
    // }
    public function edit($id)
    {
        if (Gate::denies('edit-advices')) {
            return redirect('/error')->with('message', 'У вас нет разрешения редактировать советы');
        }
    
        return view('advice_edit', [
            'advice' => Advices::find($id),
            'categories_a' => CategoryA::all()
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'name'=>'required',
    //         'text'=>'required',
    //         'category_id'=>'integer'
    //     ]);
    //     $advice=Advices::all()->where('id',$id)->first();
    //     $advice->name = $validated['name'];
    //     $advice->text = $validated['text'];
    //     $advice->category_id = $validated['category_id'];
    //     $advice->save();
    //     return redirect('/advice');
    // }
    public function update(Request $request, $id)
    {
        if (Gate::denies('edit-advices')) {
            return redirect('/error')->with('message', 'У вас нет разрешения редактировать советы');
        }
    
        // Ваш существующий код обновления совета
                $validated = $request->validate([
            'name'=>'required',
            'text'=>'required',
            'category_id'=>'integer'
        ]);
        $advice=Advices::all()->where('id',$id)->first();
        $advice->name = $validated['name'];
        $advice->text = $validated['text'];
        $advice->category_id = $validated['category_id'];
        $advice->save();
        return redirect('/advice');
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
        // Advices::destroy($id);
        // return redirect('/advice');
        if (! Gate::allows('destroy-advices', Advices::all()->where('id', $id)->first())) {
            return redirect('/error')->with('message',
            'У вас нет разрешения удалять советы с 2 категории' );
        }
        Advices::destroy($id);
        return redirect('/advice');
    }
}
