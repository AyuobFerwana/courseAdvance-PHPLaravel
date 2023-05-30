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
        if (request('trashed') == 'yes') {

            $test = Test::withTrashed()->get();
        } else {
            $test = Test::get();
        }
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
        $data =  $request->validate([
            'name' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|in:enable,disable',
            'show' => 'required|in:1,0',
        ], [
            'name' => 'Title',
            'content' => 'Content Data',
            'status' => 'Status data',
            'show' => 'Show Data',
        ]);
        Test::create($data);
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
        // $request->only($this->columns)
        $data =  $request->validate([
            'name' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|in:enable,disable',
            'show' => 'required|in:1,0',
        ], [
            'name' => 'Title',
            'content' => 'Content Data',
            'status' => 'Status data',
            'show' => 'Show Data',
        ]);
        Test::where('id', $id)->update($data);
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

    public function restore(string $id)
    {
        $test = Test::where('id', $id)->restore();
        return redirect('res');
    }
}
