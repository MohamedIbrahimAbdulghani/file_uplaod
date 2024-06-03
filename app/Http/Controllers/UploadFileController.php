<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Traits\UploadFileTrait;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    use UploadFileTrait;
    public function show() {
        return view("upload");
    }

    public function storeUsers(Request $request) {
        $path = $this->UploadFile($request, "Users");
        File::create([
            'path'=>$path,
        ]);
        return back();
    }

    public function storeAdmins(Request $request) {
        $path = $this->UploadFile($request, "Admins");
    }
}
