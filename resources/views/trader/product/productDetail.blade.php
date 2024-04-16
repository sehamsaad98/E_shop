@extends('trader.layout.Layout')
@section('body')
<div class="content-wrapper">

    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3> اضافة تفاصيل المنتج
                            </h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row product-adding">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>اضافة منتج</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-12">

                                        @if ($errors->any())
                                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                                        @endif

                                        <div class="form-group">
                                            <label for="validationCustomtitle" class="col-form-label pt-0">القسم</label>
                                            <select name="category_id" id="" class="form-control" >
                                                <option value="">اختر القسم</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @foreach ($category->child as $child)
                                                <option value="{{ $child->id }}">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;{{ $child->name }}</option>
                                                @endforeach
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="validationCustom05" class="col-form-label pt-0">
                                                الصورة الرئيسية للمنتج</label>
                                            <input class="form-control dropify" id="validationCustom05" type="file" name="image">
                                        </div>


                                        <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label pt-0">
                                                اسم المنتج</label>
                                            <input class="form-control" id="validationCustom01" type="text" name="name" >
                                        </div>


                                        <div class="form-group">
                                            <label class="col-form-label">وصف المنتج</label>
                                            <textarea rows="5" cols="12" name="desc">{{ $setting->twitter }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom02" class="col-form-label">
                                                السعر الأساسي للمنتج </label>
                                            <input class="form-control" id="validationCustom02" type="text" name="price">
                                        </div>

                                        <div class="form-group">
                                            <label for="validationCustom02" class="col-form-label">
                                                
                                                التخفيض الأساسي للمنتج </label>
                                            <input class="form-control" id="validationCustom02" type="text" name="discount_price">
                                        </div>

   
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">حفظ</button>
                                            </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<div class="form-group">
    <label for="sizes">Select Size(s) for each Color:</label>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Color</th>
                <th>Sizes</th>
            </tr>
        </thead>
        <!-- <tbody>
                                                  
    </table>
</div>


</div>
</div>

<!-- Dropdown list of colors -->
<div class="form-group">
    <label for="colorSelect" class="col-form-label">اختر الألوان:</label>
    <select name="colors[]" id="colorSelect" class="form-control" multiple>
        @foreach ($colors as $color)
        <option value="{{ $color->id }}">{{ $color->name }}</option>
        @endforeach
    </select>
</div>

<div id="selectedColorsAndSizes"></div>



@endsection

@push('javascripts')
<script src="path/to/script.js"></script>


<script>
    $(document).ready(function() {
        $('#colorSelect').change(function() {
            var selectedColors = $(this).val();
            var selectedColorsAndSizes = $('#selectedColorsAndSizes');
            selectedColorsAndSizes.empty();
            selectedColors.forEach(function(colorId) {
                $.ajax({
                    url: '{{ route("dashboard.colors.get", ":color_id") }}'.replace(':color_id', colorId),
                    method: 'GET',
                    success: function(response) {
                        if (response) {
                            var color = response;
                            var colorContainer = $('<div></div>').text(color.name);
                            var sizeSelect = $('<select name="sizes[' + colorId + '][]" class="form-control" multiple></select>');
                            color.sizes.forEach(function(size) {
                                sizeSelect.append('<option value="' + size.id + '">' + size.size + '</option>');
                            });
                            colorContainer.append(sizeSelect);
                            selectedColorsAndSizes.append(colorContainer);
                        } else {
                            alert('Failed to fetch sizes for color.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    });
    // Call the function with your specific URL and data
    var url = 'https://example.com/api/endpoint';
    var requestData = {
        key: 'value'
    };
    sendAjaxRequest(url, requestData);
</script>


@endpush