<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function show() {
        return view("upload");
    }
    public function storeUsers(Request $request) {
        $uploaded_file_location = $request->file("photo");
        $file_name = $uploaded_file_location->getClientOriginalName();

        return $file_name;
        // return back();
    }
    public function storeAdmins() {

    }
}
