<?php

namespace App\Http\Controllers;

use App\Traits\UploadFileTrait;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    use UploadFileTrait;
    public function show() {
        return view("upload");
    }

    public function storeUsers(Request $request) {
        return $this->UploadFile($request, "Users");
    }

    public function storeAdmins(Request $request) {
        return $this->UploadFile($request, "Admins");
    }
}
