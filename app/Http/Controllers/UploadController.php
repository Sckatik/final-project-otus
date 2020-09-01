<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Services\Films\FilmsService;
use App\Services\Genres\GenresService;
use View;
use Illuminate\Pagination\Paginator;
use Cache;

class UploadController extends Controller
{

    public function getFiles()
    {
        $f = Storage::disk('images');
        $files = $f->allFiles();
        
        return view('files',['files' => $files]);
    }
    
    public function delete(Request $request)
    {
        $f = Storage::disk('images');
        $f->delete($request->filename);
    
        return redirect('upload/all');
    }
}
