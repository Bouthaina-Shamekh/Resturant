<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::all();
        return view('dashboard.tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $num = $request->num;

        // إنشاء الطاولات المطلوبة أو التأكد من وجودها
        for ($i = 0; $i < $num; $i++) {
            $table = Table::where('number', $i + 1)->first();
            if (!$table) {
                Table::create([
                    'number' => $i + 1,
                    'status' => 0
                ]);
            }
        }

        // حذف الطاولات التي يكون رقمها أكبر من العدد المطلوب
        Table::where('number', '>', $num)->delete();

        return redirect()->back()->with('success', 'تم تعيين الطاولات بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        $table->status = 0;
        $table->save();
        if($request->ajax()){
            return response()->json(['success' => true]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        //
    }
}
