<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $service = new Service;
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->body = $request->body;
        $service->status = $request->status ? 1 : 0;
        $service->save();
        return redirect(route('admin.services.index'))->with('success','Service created Successfully');
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
        $item = Service::find($id);
        return view('admin.service.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->body = $request->body;
        $service->status = $request->status ? 1 : 0;
        $service->save();
        return redirect(route('admin.services.index'))->with('success','Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Service::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.services.index')->with('success', 'Services deleted successfully');
    }
}
