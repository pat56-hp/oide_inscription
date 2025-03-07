<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InscritsExport;

class ExportController extends Controller
{
    public function exportInscrits()
    {
        return Excel::download(new InscritsExport, 'inscrits.xlsx');
    }
}
