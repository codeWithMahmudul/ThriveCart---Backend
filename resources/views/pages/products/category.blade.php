@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Add Product</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" class="m-t-40" method="post">
                                <div class="form-group">
                                    <label class="control-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                    <div class="form-control-feedback"><small>Add <code>required</code> attribute to field
                                            for required validation.</small></div>
                                </div>

                                @csrf
                            </form>
                        </div>
                        <div class="text-xs-right pl-4 pb-5">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="reset" class="btn btn-inverse">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Emplyee list</h4>
                            <h6 class="card-subtitle"></h6>
                            <div class="table-responsive">
                                <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>genelia@gmail.com</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                    data-toggle="tooltip" data-original-title="Delete"><i class="ti-close"
                                                        aria-hidden="true"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                    data-toggle="tooltip" data-original-title="Delete"><i class="ti-pencil"
                                                        aria-hidden="true"></i></button>
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
        <footer class="footer">
            © 2019 Admin Press Admin by themedesigner.in
        </footer>
    </div>
@endsection

@section('js')
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('assets/plugins/html5-editor/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('assets/plugins/html5-editor/bootstrap-wysihtml5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.textarea_editor').wysihtml5();
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css') }}" />
@endsection
