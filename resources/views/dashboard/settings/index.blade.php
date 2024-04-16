@extends('dashboard.layout.Layout')
@section('body')
<div class="content-wrapper">
    <div class="col-md-11 mx-4 mt-4 center">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('dashboard.settings.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('put')
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
                    <!-- <div class="form-group">
                        <label for="exampleInputFile">website logo </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input "  id="logo" name="logo">
                                <label class="custom-file-label" for="logo">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label for="logo" class="form-label">website logo </label>
                        <input class="form-control dropify" type="file" id="logo" name="logo" data-default-file="{{asset('assets/img/'.$setting->logo)}}">
                    </div>

                    <!-- <div class="form-group">
                        <label for="exampleInputFile">small image </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="faicion" name="favicon">
                                <label class="custom-file-label" for="faicion">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="formname" class="form-label">favicon </label>
                        <input class="form-control dropify" type="file" id="formname" name="favicon" data-default-file="{{asset('assets/img/'.$setting->favicon)}}">
                    </div>
                    <div class="form-group">
                        <label for="formname" class="form-label">website name </label>
                        <input class="form-control" type="text" id="formname" name="name" value="{{$setting->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" value="{{$setting->desc}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email </label>
                        <input class="form-control" type="email" id="email" name="email" value="{{$setting->email}}">
                    </div>
                    <div class="form-group">
                        <label for="Phone" class="form-label">Phone </label>
                        <input class="form-control" type="text" id="Phone" name="address" value="{{$setting->address}}">
                    </div>
                    <div class="form-group">
                        <label for="Address" class="form-label">Address </label>
                        <input class="form-control" type="text" id="Address" name="address" value="{{$setting->address}}">
                    </div>
                    <div class="form-group">
                        <label for="Whatsapp" class="form-label">Whatsapp </label>
                        <input class="form-control" type="text" id="Whatsapp" name="whatsapp" value="{{$setting->whatsapp}}">
                    </div>
                    <div class="form-group">
                        <label for="Facebook" class="form-label">Facebook </label>
                        <input class="form-control" type="text" id="Facebook" name="facebook" value="{{$setting->facebook}}">
                    </div>

                    <div class="form-group">
                        <label for="Twitter" class="form-label">Twitter </label>
                        <input class="form-control" type="text" id="Twitter" name="twitter" value="{{$setting->twitter}}">
                    </div>


                    <div class="form-group">
                        <label for="Instgram" class="form-label">Instgram </label>
                        <input class="form-control" type="text" id="Instgram" name="instgram" value="{{$setting->instgram}}">
                    </div>

                    <div class="form-group">
                        <label for="Youtube" class="form-label">Youtube </label>
                        <input class="form-control" type="text" id="Youtube" name="youtube" value="{{$setting->youtube}}">
                    </div>
                    <div class="form-group">
                        <label for="Tick_Tock " class="form-label">Tick Tock </label>
                        <input class="form-control" type="text" id="Tick_Tock" name="tiktok" value="{{$setting->tiktok}}">
                    </div>
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