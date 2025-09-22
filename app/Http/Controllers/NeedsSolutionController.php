<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeedsSolutionRequest;
use App\Http\Requests\UpdateNeedsSolutionRequest;
use App\Models\NeedsSolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NeedsSolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $needs_solutions = NeedsSolution::orderByDesc('id')->paginate(10);
        return view('admin.needs_solutions.index', compact('needs_solutions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.needs_solutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNeedsSolutionRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnail', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $newDataRecord = NeedsSolution::create($validated);
        });
        return redirect()->route('admin.needs_solutions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(NeedsSolution $needsSolution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NeedsSolution $needs_solution)
    {
        return view('admin.needs_solutions.edit', compact('needs_solution'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNeedsSolutionRequest $request, NeedsSolution $needs_solution)
    {
        DB::transaction(function () use ($request, $needs_solution) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnail', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $needs_solution->update($validated);
        });
        return redirect()->route('admin.needs_solutions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NeedsSolution $needs_solution)
    {
        DB::transaction(function () use ($needs_solution) {
            $needs_solution->delete();
        });
        return redirect()->route('admin.needs_solutions.index');
    }
}
