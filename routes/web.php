<?php

use App\Exports\ReimbursementsExport;
use App\Imports\ReimbursementsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;

Route::get('/reimbursements/export', function () {
    return Excel::download(new ReimbursementsExport, 'reimbursements.xlsx');
});

Route::post('/reimbursements/import', function (\Illuminate\Http\Request $request) {
    Excel::import(new ReimbursementsImport, $request->file('file'));

    return redirect()->back()->with('success', 'Reimbursements imported successfully!');
});

// Route::get('/', function () {
    // return view('welcome');
// });
