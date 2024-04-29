<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AllDataController extends Controller
{
    public function index()
    {
        // Get all table names in the database
        $tables = DB::select('SHOW TABLES');

        // Fetch data from each table
        $data = [];
        foreach ($tables as $table) {
            $tableName = reset($table);
            $data[$tableName] = DB::table($tableName)->get();
        }

        // Pass the data to the view
        return view('all-data.index', compact('data'));


    }
}
