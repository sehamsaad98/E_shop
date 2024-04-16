@extends('dashboard.layout.Layout')

@section('body')
<div class="content-wrapper">
  <div class="col-md-11 mx-4 mt-4 center">
    <div class="text-center fw-bold">
      <h2>
        Edit Category
      </h2>
    </div>
    <form action="{{route('dashboard.categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
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

        <div class="form-group">
          <label for="formname" class="form-label">Category name </label>
          <input class="form-control" type="text" id="formname" name="name" value="{{$category->name}}">
        </div>

        <div class="form-group">
          <label for="image" class="form-label">image </label>
          <input class="form-control dropify" type="file" id="image" name="image" data-default-file="{{asset('assets/img/categories/'.$category->image)}}">
        </div>
        <div class="form-group">
          <label for="icon" class="form-label">image </label>
          <input class="form-control dropify" type="file" id="icon" name="icon" data-default-file="{{ asset('assets/img/categories/icons/' . $category->icon) }}">
        </div>
        @if($category->child_count < 1 ) <div class="form-group">
          <label for="exampleFormControlTextarea1" class="form-label">main Category </label>
          <select class="form-control" id="exampleFormControlTextarea1" name="parent_id">
            <option value="" @if($category->parent_id==null) selected @endif > main category</option>
            <option>
              @foreach($mainCategories as $item)
              @if($item->id != $category->id)
            <option value="{{$item->id}}" @if($item->id == $category->parent_id) selected @endif>
              {{$item->name}}
            </option>
            @endif
            @endforeach
            </option>
          </select>
      </div>
      @endif
      <div class="form-group">

        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
  </div>
</div>
@endsection