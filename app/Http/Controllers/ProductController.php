<?php

namespace App\Http\Controllers;

use App\Imports\ProductsImport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function index()
    {
        // the view for all of the products on the front end

        $viewData = json_decode('../../../zzMisc/dummyproducts.json');
        return $viewData;
    }

    public function import(Request $request): RedirectResponse
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        //        Save the uploaded file to the storage / ap directory
        $path = $request->file('file')->store('uploads');

        // Import the excel file from storage

        Excel::import(new ProductsImport, Storage::path($path));

        return redirect()->back()->with('success', 'Products imported successfully!');
    }
}
