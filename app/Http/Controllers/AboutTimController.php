<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutTimRequest;
use App\Http\Requests\UpdateAboutTimRequest;
use App\Models\AboutTim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutTimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_tims = AboutTim::orderByDesc('id')->paginate(10);
        return view('admin.about_tims.index', compact('about_tims'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about_tims.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutTimRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('poster')) {
                $posterPath = $request->file('poster')->store('poster', 'public');
                $validated['poster'] = $posterPath;
            }
            $newDataRecord = AboutTim::create($validated);
        });
        return redirect()->route('admin.about_tims.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutTim $about_tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutTim $about_tim)
    {
        return view('admin.about_tims.edit', compact('about_tim'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutTimRequest $request, AboutTim $about_tim)
    {
        DB::transaction(function () use ($request, $about_tim) {
            $validated = $request->validated();

            if ($request->hasFile('poster')) {
                $posterPath = $request->file('poster')->store('poster', 'public');
                $validated['poster'] = $posterPath;
            }
            $about_tim->update($validated);
        });

        return redirect()->route('admin.about_tims.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutTim $about_tim)
    {
        DB::transaction(function () use ($about_tim) {
            $about_tim->delete();
        });
        return redirect()->route('admin.about_tims.index');
    }
}
