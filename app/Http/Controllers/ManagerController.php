<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Manager[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Manager::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manager = new Manager();
        $manager->name = $request->name;
        $manager->save();
        $saved = "True";
        return view('managers.create',compact('saved'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return Manager
     */
    public function show(Manager $manager)
    {
        return $manager;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        return view('managers.create',compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        $manager->name = $request->name;
        $manager->save();
        $updated = "True";
        return view('manager.create',compact('updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $amount
     */
}
