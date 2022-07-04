<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $statistics = Statistic:: all();
        return view('admin.statistic.index', [
            'statistics' => $statistics
        ]);
    }

    public function create()
    {
        return view('admin.statistic.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required','string', 'max:255'],
            'counter'=> ['required' , 'numeric'],
            'status'=>'required'

        ]);
        Statistic::create($data);
        return redirect()->route('admin.statistics.index');

    }


    public function show($statisticId)
    {
        $statistic = Statistic::findOrFail($statisticId);
        return view('admin.statistic.show',[
            'statistic'=>$statistic
        ]);
    }
    public function edit($statisticId)
    {
        $statistic = Statistic::find($statisticId);
        return view('admin.statistic.edit', [
            'statistic' => $statistic,
        ]);
    }

    public function update(Request $request,Statistic $statistic)
    {
        $request->validate([
            'title' => ['required','string', 'max:255'],
            'counter'=> ['required' , 'numeric'],
            'status'=>'required'

       ]);
        $data = $request->all();
        // dd($data);
        $statistic->update($data);

        return redirect()->route('admin.statistics.index');
    }

    public function destroy($statisticId)
    {
        $statistic = Statistic::find($statisticId);
        $statistic -> delete();
        return redirect()->route('admin.statistics.index');

    }

}