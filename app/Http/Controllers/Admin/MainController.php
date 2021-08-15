<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Appointment;
use App\Models\Beautifier;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Service;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function dashboard()
    {

        return view('admin.dashboard',[
        'beautifiers'=>Beautifier::all(),
        'customers'=>Customer::all(),
        'appointments'=>Appointment::all()
        ]);
    }

    public function appointment()
    {

        return view('admin.appointmentList.index',[
            'beautifiers'=>Beautifier::all(),
            'customers'=>Customer::all(),
            'appointments'=>Appointment::all()
        ]);
    }
    public function customer()
    {
        return view('admin.customerList.index',[
            'customer'=>Customer::all(),
            'appointments'=>Appointment::all()
        ]);
    }

    public function beSp()
    {
        return view('admin.BeautifiersAndSpeciality.index',[
            'specialities'=>Speciality::all()

        ]);
    }
    public function invoice()
    {
        return view('admin.invoice.index',[
            'invoice'=>Invoice::all(),
            'customer'=>Customer::all(),
            'beautifiers'=>Beautifier::all(),
            'appointments'=>Appointment::all()
        ]);
    }
    public function service()
    {
        return view('admin.serviceList.index',[
            'services'=>Service::all(),
            'invoice'=>Invoice::all(),
            'customer'=>Customer::all(),
            'beautifiers'=>Beautifier::all(),
            'appointments'=>Appointment::all()
        ]);
    }

    public function profile()
    {
        return view('admin.adminProfile.index',[
            'user'=>User::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
