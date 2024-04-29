<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticTableController extends Controller
{
    public function generateStaticTable()
{
    /* I have defined data in static-table.blade file as here it is not working--------- */

    $tableData = [
        ['id' => 1, 'name' => 'John', 'email' => 'john@example.com'],
        ['id' => 2, 'name' => 'Henry', 'email' => 'henry@example.com'],
        // Add more data as needed
    ];
   

    return view('static-table', compact('tableData'));
}

}

