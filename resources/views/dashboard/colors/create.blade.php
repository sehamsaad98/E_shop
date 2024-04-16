@extends('dashboard.layout.Layout')
@section('body')
<div class="content-wrapper">
    <div class="col-md-11 mx-4 mt-4 center">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Color</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('dashboard.colors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- show laravel error in loop -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div class="card-body">

                <div class="form-group">
                        <label for="validationCustom01" class="col-form-label pt-0">
                            اسم اللون</label>
                        <input class="form-control" id="validationCustom01" type="text" name="color" >
                    </div>
                </div>
                    <div class="form-group">
                        <label for="validationCustom05" class="col-form-label pt-0">
                            صورة اللون</label>
                        <input class="form-control dropify" id="validationCustom05" type="file" name="image">
                    </div>


 
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection