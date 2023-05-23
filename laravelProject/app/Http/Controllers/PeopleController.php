<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\People;
use Illuminate\View\View;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $people = People::all();
        return view ('people.index')->with('people', $people);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        People::create($input);
        return redirect('czyszek/50213/people')->with('flash_message', 'Added new record!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $people = People::find($id);
        return view('people.show')->with('people', $people);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $people = People::find($id);
        return view('people.edit')->with('people', $people);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $people = People::find($id);
        $input = $request->all();
        $people->update($input);
        return redirect('czyszek/50213/people')->with('flash_message', 'record updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        People::destroy($id);
        return redirect('czyszek/50213/people')->with('flash_message', 'record deleted!');
    }
}
