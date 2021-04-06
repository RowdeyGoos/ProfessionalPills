<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class ApiMaterialController extends Controller
{
    public function index()
    {
        return Material::all();
    }
}
