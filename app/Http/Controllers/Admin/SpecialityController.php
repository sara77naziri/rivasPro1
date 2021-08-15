<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function index()
    {
        return view('admin.BeautifiersAndSpeciality.index',[
            'specialities'=>Speciality::all()

        ]);
    }
}
