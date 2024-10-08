<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Type;
use Illuminate\Http\Request;
use Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolio.list', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::latest()->get();
        return view('admin.portfolio.create', compact('types'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->type = $request->type;
        $portfolio->site_link = $request->site_link;
        $portfolio->git_link = $request->git_link;
        $portfolio->delivery = $request->delivery;
        if ($request->hasFile('image')) {
            if ($portfolio->image && Storage::exists($portfolio->image)) {
                Storage::delete($portfolio->image);
            }
            $portfolio->image = $request->file('image')->store('uploads', 'public');
        }
        $portfolio->save();
        return redirect(route('admin.portfolios.index'))->with('success', 'Portfolio added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Portfolio::find($id);
        $types = Type::latest()->get();
        return view('admin.portfolio.edit', compact('types', 'item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->type = $request->type;
        $portfolio->site_link = $request->site_link;
        $portfolio->git_link = $request->git_link;
        $portfolio->delivery = $request->delivery;
        if ($request->hasFile('image')) {
            if ($portfolio->image && Storage::exists($portfolio->image)) {
                Storage::delete($portfolio->image);
            }
            $portfolio->image = $request->file('image')->store('uploads', 'public');
        }
        $portfolio->save();
        return redirect(route('admin.portfolios.index'))->with('success', 'Portfolio updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $portfolio = Portfolio::findOrFail($id);
    if ($portfolio->image && Storage::exists($portfolio->image)) {
        Storage::delete($portfolio->image);
    }
    $portfolio->delete();
    return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio deleted successfully');
}
}
