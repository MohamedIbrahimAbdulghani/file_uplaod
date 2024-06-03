<?php

namespace App\Traits;
use Illuminate\Http\Request;

trait UploadFileTrait {
    public function UploadFile(Request $request, $folderName) {
        $uploaded_file_location = $request->file("photo");
        $file_name = $uploaded_file_location->getClientOriginalName();
        $path = $uploaded_file_location->storeAs($folderName, $file_name, "UploadFileByLaravel");
        return $path;
    }
}
