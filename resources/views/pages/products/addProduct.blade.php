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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('upload') }}" class="m-t-40" method="post" enctype='multipart/form-data'
                                id="productForm">
                                <div class="form-group">
                                    <label class="control-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control">
                                    <div class="form-control-feedback"><small>Add <code>required</code> attribute to field
                                            for required validation.</small></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Selling Price</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="Amount">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Offer Price</label>
                                            <input type="text" id="lastName" class="form-control form-control-danger"
                                                placeholder="Amount">
                                            {{-- <small class="form-control-feedback"> This field has error. </small> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Discount in %</label>
                                            <input type="text" id="lastName" class="form-control"
                                                placeholder="Discount">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">SKU</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="SKU">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Stock</label>
                                            <input type="text" id="lastName" class="form-control" placeholder="Stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Add Product Description <span
                                            class="text-danger">*</span></label>
                                    <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Select Category <span class="text-danger">*</span></label>
                                    <div class="controls">
                                        <select name="select" id="select" class="form-control">
                                            <option value="">Select Your Category</option>
                                            <option value="1">India</option>
                                            <option value="2">USA</option>
                                            <option value="3">UK</option>
                                            <option value="4">Canada</option>
                                            <option value="5">Dubai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Add Brands Name</label>
                                    <input type="text" name="brands" class="form-control">
                                    <div class="form-control-feedback"><small>Add brands name by comma separated
                                            value.</small></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label">Add Colors <span class="text-danger">*</span></label>
                                    <input type="text" name="color" class="form-control">
                                    <div class="form-control-feedback"><small>Add colors name by comma separated value Ex:
                                            blue, pink, red</small></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Add Sizes <span class="text-danger">*</span></label>
                                    <input type="text" name="size" class="form-control">
                                    <div class="form-control-feedback"><small>Add sizes name by comma separated value Ex:
                                            l, xl, xxl</small></div>
                                </div>
                                <div class="form-group">
                                    <h5>File Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="files[]" multiple accept="image/*">
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-inverse">Cancel</button>
                                </div>
                                @csrf
                            </form>
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
