@extends('admin.layout.master')
@section('content')


    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Appointment List</h3>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Beautifier name</th>
                                        <th>Appointment time</th>
                                        <th>customer Name</th>
                                        <th>Total Amount</th>
                                        <th>Amount paid </th>
                                        <th>Discount </th>


                                        <th>Created Date</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="invoice.html"></a> ss </td>
                                        <td>11 Nov 2019 <span class="text-primary d-block">12.00 PM - 12.15 PM</span></td>                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
                                                <a href="profile.html">name </a>
                                            </h2>
                                        </td>
                                        <td>$100.00</td>
                                        <td>$10.00</td>
                                        <td> 1 %</td>


                                        <td>9 Sep 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">
                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="edit_invoice_report" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Invoice Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Invoice Number</label>
                                    <input type="text" class="form-control" value="#INV-0001">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Patient ID</label>
                                    <input type="text" class="form-control" value="	#PT002">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Patient Name</label>
                                    <input type="text" class="form-control" value="R Amer">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Patient Image</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Total Amount</label>
                                    <input type="text" class="form-control" value="$200.00">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Created Date</label>
                                    <input type="text" class="form-control" value="29th Oct 2019">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="form-content p-2">
                        <h4 class="modal-title">Delete</h4>
                        <p class="mb-4">Are you sure want to delete?</p>
                        <button type="button" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
