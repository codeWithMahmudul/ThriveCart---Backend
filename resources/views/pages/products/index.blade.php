@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Table footable</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">pages</li>
                    <li class="breadcrumb-item active">Table footable</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Emplyee list</h4>
                            <h6 class="card-subtitle"></h6>
                            <div class="table-responsive">
                                <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list"
                                    data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Age</th>
                                            <th>Joining date</th>
                                            <th>Salery</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg"
                                                        alt="user" width="40" class="img-circle" /> Genelia
                                                    Deshmukh</a>
                                            </td>
                                            <td>genelia@gmail.com</td>
                                            <td>+123 456 789</td>
                                            <td><span class="label label-danger">Designer</span> </td>
                                            <td>23</td>
                                            <td>12-10-2014</td>
                                            <td>$1200</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                    data-toggle="tooltip" data-original-title="Delete"><i class="ti-close"
                                                        aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="text-right">
                                                    <ul class="pagination"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer">
            © 2019 Admin Press Admin by themedesigner.in
        </footer>
    </div>
@endsection

@section('css')
    <!-- Footable CSS -->
    <link href="{{ asset('assets/plugins/footable/css/footable.core.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection

@section('js')
    <!-- Footable -->
    <script src="{{ asset('assets/plugins/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{ asset('assets/js/footable-init.js') }}"></script>
@endsection
