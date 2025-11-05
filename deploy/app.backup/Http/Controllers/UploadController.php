<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if($request->hasFile('pdfFile')) {
            File::delete('Uploads/menu_of_the_year/MenuOfTheYear.pdf');
            $request->file('pdfFile')->move(public_path('/Uploads/menu_of_the_year'),'MenuOfTheYear.pdf');
            return redirect()->back()->with('success', 'File uploaded successfully!');
        }
        else {
            return redirect()->back()->with('error', 'No file uploaded!');
        }
        
        
    }
}

