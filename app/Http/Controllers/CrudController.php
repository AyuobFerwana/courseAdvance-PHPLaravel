<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrudController extends Controller
{
    private $columns = ['name', 'content'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Test::withTrashed()->get();
        return response()->view('index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Test::create($request->only($this->columns));
        return redirect('res');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $test = Test::find($id);
        return response()->view('show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd(Test::find($id));
        $test = Test::find($id);
        return response()->view('update', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  dd($request->only($this->columns));
        Test::where('id', $id)->update($request->only($this->columns));
        return redirect('res');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $test = Test::find($id);
        $test->delete();
        return redirect('res');
    }

    public function force(string $id)
    {
        $test = Test::withTrashed()->findOrFail($id);
        $test->forceDelete();
        return redirect('res');
    }
}
