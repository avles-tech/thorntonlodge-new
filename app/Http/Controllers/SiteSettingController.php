<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Exception;

class SiteSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = array(
            'pagetitle' => 'Dashboard :: Site Settings',
            'settings' => SiteSetting::orderBy('label')->get(),
        );
        return view('settings.index')->with($data);
    }

    public function updateMenuPdf(Request $request)
    {
        $this->validate($request, [
            'menu_pdf' => 'required|mimes:pdf|max:10240', // 10MB max
        ]);

        try {
            $file = $request->file('menu_pdf');
            $filename = 'MenuOfTheYear.pdf'; // Keep same filename for consistency

            // Create directory if it doesn't exist
            $uploadPath = public_path('Uploads/menu_of_the_year');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Move the uploaded file
            $file->move($uploadPath, $filename);

            // Update the setting
            $path = '/Uploads/menu_of_the_year/' . $filename;
            SiteSetting::set('menu_pdf_path', $path);

            $successMsg = 'Menu PDF has been successfully uploaded!';
            return redirect('/site-settings')->with('success', $successMsg);
        } catch (Exception $exception) {
            $errormsg = "Error! " . $exception->getMessage();
            return redirect('/site-settings')->with('error', $errormsg);
        }
    }
}
