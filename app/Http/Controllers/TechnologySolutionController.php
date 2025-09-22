<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechnologySolutionRequest;
use App\Http\Requests\UpdateTechnologySolutionRequest;
use App\Models\TechnologySolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnologySolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technology_solutions = TechnologySolution::orderByDesc('id')->paginate(5);
        return view('admin.technology_solutions.index', compact('technology_solutions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technology_solutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTechnologySolutionRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnail', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }
            $newDataRecord = TechnologySolution::create($validated);
        });
        return redirect()->route('admin.technology_solutions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TechnologySolution $technology_solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TechnologySolution $technology_solution)
    {
        return view('admin.technology_solutions.edit', compact('technology_solution'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechnologySolutionRequest $request, TechnologySolution $technology_solution)
    {
        DB::transaction(function () use ($request, $technology_solution) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnail', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }
            $technology_solution->update($validated);
        });
        return redirect()->route('admin.technology_solutions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechnologySolution $technology_solution)
    {
        DB::transaction(function () use ($technology_solution) {
            $technology_solution->delete();
        });
        return redirect()->route('admin.technology_solutions.index');
    }
}
