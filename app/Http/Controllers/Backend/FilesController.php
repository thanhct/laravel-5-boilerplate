<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class DashboardController.
 */
class FilesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $allFile = Storage::allFiles('files');
        $files = [];
        foreach ($allFile as $file) {
            array_push($files, Storage::url($file));
        }
        return view('backend.files', ['files'=>$files]);
    }

    public function fileUpload(Request $request) {
        foreach ($request->uploadFiles as $uploadFile) {
            $fileName = $uploadFile->getClientOriginalName();
            Storage::putFileAs('files', $uploadFile, $fileName, 'public');
        }
        return redirect()->route('admin.files');
    }
}
