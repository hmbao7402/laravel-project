@extends('admin.layout.layout');

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        {{-- ROW --}}
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Add New Type</h3>
                    </div>
                </div>
            </div>
        </div>
        {{-- ROW --}}
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Type</h4>
                        <form class="forms-sample" action="{{url('admin/type/create-type')}}" action="post">
                            <div class="form-group">
                                <label for="type-title">Type Title</label>
                                <input type="text" name="type-title" required>
                            </div>
                            <div class="form-group">
                                <label for="type-desc">Type Description</label>
                                <input type="text" name="type-desc" required>
                            </div>
                            <div class="form-group">
                                <label for="type-desc">Type Slug</label>
                                <input type="text" name="type-slug" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection