@extends('dashboard.layout.Layout')

@section('body')
<div class="content-wrapper">
    <div class="col-md-11 mx-4 mt-4 center">

        <!-- model form start -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary m-4 ms-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <svg xmlns="http://www.w3.org/2000/svg" style="fill: white;" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
               Add Category
        </button>
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
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{route('dashboard.categories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <!-- show laravel error in loop
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif -->
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="formname" class="form-label">Category name </label>
                                    <input class="form-control" type="text" id="formname" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">main Category </label>
                                    <select class="form-control" id="exampleFormControlTextarea1" name="parent_id">
                                        <option value=""> main category</option>
                                        <option>
                                            @foreach($mainCategories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="image" class="form-label">image </label>
                                        <input class="form-control dropify" type="file" id="image" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="icon" class="form-label">icon </label>
                                        <input class="form-control dropify" type="file" id="icon" name="icon">
                                    </div>


                                    <!-- /.card-body -->
                                    <!-- 
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div> -->

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- model form start -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Projects</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects" id="editableTable">
            <thead>
                <tr>
                    <!-- <th style="width: 1%">
                        #
                    </th> -->
                    <th style="width: 20%">
                        name
                    </th>

                    <th>
                        main category
                    </th>
                    <th style="width: 30%">
                        image
                    </th>
                     
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
</div>

</div>

{{-- delete --}}
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ Route('dashboard.categories.delete') }}" method="POST">
            <div class="modal-content">

                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <p>متأكد من الحذف .. ؟؟</p>
                        @csrf
                        <input type="hidden" name="id" id="id">
                    </div>



                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">اغلاق</button>

                    <button type="submit" class="btn btn-danger">حذف </button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- delete --}}

@endsection
@push('javascripts')
<script type="text/javascript">
    $(document).ready(function() {

        console.log("data")
        $(document).ready(function() {
            $('#editableTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('dashboard.categories.getall') }}",
                "columns": [{
                        "data": "name"
                    },
                    {
                        "data": "parent"
                    },
                    {
                        "data": "image"
                    },
                    {
                        "data": "action"
                    }


                ]
            });
        });
    });
    $('#editableTable tbody').on('click', '#deleteBtn', function(argument) {
        var id = $(this).attr("data-id");
        console.log(id);
        $('#deletemodal #id').val(id);
    })


    //     $(function() {
    //         var table = $('#editableTable').DataTable({
    //             processing: true,
    //             serverSide: true,
    //             order:[
    //                 [0,"desc"]
    //             ],
    //             ajax: "{{ Route('dashboard.categories.getall') }}",
    //             columns: [

    //                 {
    //                     data: 'name',
    //                     name: 'name'
    //                 },
    //                 {
    //                     data: 'parent_id',
    //                     name: 'parent_id'
    //                 }
    //             ]
    //         });

    //     });
    //    console.log( table )
</script>
@endpush