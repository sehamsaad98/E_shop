
@extends('dashboard.layout.Layout')

@section('body')
<div class="content-wrapper">
<h1> all colors </h1>
<div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3> الالوان
                            </h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <form class="form-inline search-form search-box">

                            </form>

                            <a class="btn btn-primary mt-md-0 mt-2" href="{{route('dashboard.colors.create')}}">إضافة لون جديد</a>
                           

                        </div>

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="table-responsive table-desi">
                                <table class="table all-package table-category " id="editableTable">
                                    <thead>
                                        <tr>
                                            <th>الإسم</th>
                                            <th>الصورة</th>
                                            <th></th>


                                        </tr>
                                    </thead>

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 232px; overflow-y: auto;">
<ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
<li class="disabled"><a role="option" class="dropdown-item pl-0 colorFilter all disabled" id="bs-select-1-0" aria-disabled="true" tabindex="-1">
    <span class="text"><span class="content">اختر أقرب لون للقطعة</span></span></a></li>
    <li><a role="option" class="dropdown-item colorFilter colorize1" id="bs-select-1-1" tabindex="0" aria-setsize="26" aria-posinset="1"><span class="text"><span class="content " id="eyJpZCI6Ilx1MDYyN1x1MDYzM1x1MDY0OFx1MDYyZiIsInB0biI6IiIsImhleCI6IiMwMDAwMDAifQ=="><div style="background-color: #000000;display:inline;width:60px;height:32px;"></div>اسود</span></span></a></li>
    <li><a role="option" class="dropdown-item pl-0 colorFilter colorize2" id="bs-select-1-2" tabindex="0" aria-setsize="26" aria-posinset="2"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyN1x1MDYyOFx1MDY0YVx1MDYzNiBcLyBcdTA2MjdcdTA2NDhcdTA2NDEgXHUwNjQ4XHUwNjI3XHUwNjRhXHUwNjJhIiwicHRuIjoicGF0dGVybnNcLzE2Mjk0MDM1ODlpbWctNjExZWI5YzU3N2YzMy5wbmciLCJoZXgiOiIjRjVGNUY1In0="><img src="https://stylorita.com/admin/patterns/1629403589img-611eb9c577f33.png" class="pattern-img">ابيض / اوف وايت</span></span></a></li>
        <li><a role="option" class="dropdown-item pl-0 colorFilter colorize3" id="bs-select-1-3" tabindex="0" aria-setsize="26" aria-posinset="3"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYzMVx1MDY0NVx1MDYyN1x1MDYyZlx1MDY0YSIsInB0biI6InBhdHRlcm5zXC8xNjI5NDAzNjA1aW1nLTYxMWViOWQ1NjBlYjUucG5nIiwiaGV4IjoiI2MwYzBjMCJ9"><img src="https://stylorita.com/admin/patterns/1629403605img-611eb9d560eb5.png" class="pattern-img">رمادي</span></span></a></li>
            <li><a role="option" class="dropdown-item pl-0 colorFilter colorize24" id="bs-select-1-4" tabindex="0" aria-setsize="26" aria-posinset="4"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyM1x1MDYyOFx1MDY0YVx1MDYzNiBcdTAwZDcgXHUwNjIzXHUwNjMzXHUwNjQ4XHUwNjJmIChcdTA2MmNcdTA2NDVcdTA2NGFcdTA2MzkgXHUwNjI3XHUwNjQ0XHUwNjQ2XHUwNjQyXHUwNjM0XHUwNjI3XHUwNjJhKSIsInB0biI6InBhdHRlcm5zXC8xNjI5NDAxNTIwaW1nLTYxMWViMWIwMDc0ZmQucG5nIiwiaGV4IjoiI2ZmZmZmZiJ9"><img src="https://stylorita.com/admin/patterns/1629401520img-611eb1b0074fd.png" class="pattern-img">أبيض × أسود (جميع النقشات)</span></span></a></li>
                <li><a role="option" class="dropdown-item pl-0 colorFilter colorize4" id="bs-select-1-5" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyY1x1MDY0YVx1MDY0Nlx1MDYzMiIsInB0biI6InBhdHRlcm5zXC8xNTY3NTUwMzU2aW1nLTVkNmVlYjk0OWM3N2IuanBnIiwiaGV4IjoiIzE1NjBiZCJ9"><img src="https://stylorita.com/admin/patterns/1567550356img-5d6eeb949c77b.jpg" class="pattern-img">جينز</span></span></a></li>
                    <li><a role="option" class="dropdown-item pl-0 colorFilter colorize5" id="bs-select-1-6" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDY0M1x1MDYyZFx1MDY0NFx1MDY0YSIsInB0biI6InBhdHRlcm5zXC8xNjI5NDAzNjI2aW1nLTYxMWViOWVhMzg2MGQucG5nIiwiaGV4IjoiIzAwMDA4MCJ9"><img src="https://stylorita.com/admin/patterns/1629403626img-611eb9ea3860d.png" class="pattern-img">كحلي</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize6" id="bs-select-1-7" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyN1x1MDYzMlx1MDYzMVx1MDY0MiIsInB0biI6InBhdHRlcm5zXC8xNjI5NDAzNjQyaW1nLTYxMWViOWZhNjNjNjIucG5nIiwiaGV4IjoiIzAwMDBmZiJ9"><img src="https://stylorita.com/admin/patterns/1629403642img-611eb9fa63c62.png" class="pattern-img">ازرق</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize7" id="bs-select-1-8" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyY1x1MDY0Nlx1MDYzMlx1MDYyN1x1MDYzMVx1MDY0YSIsInB0biI6InBhdHRlcm5zXC8xNjI5NDAzNjYyaW1nLTYxMWViYTBlYWJmNTIucG5nIiwiaGV4IjoiIzAwODA4MCJ9"><img src="https://stylorita.com/admin/patterns/1629403662img-611eba0eabf52.png" class="pattern-img">جنزاري</span></span></a></li>
                        <li><a role="option" class="dropdown-item pl-0 colorFilter colorize8" id="bs-select-1-9" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYzM1x1MDY0NVx1MDYyN1x1MDY0OFx1MDY0YSBcLyBcdTA2MmFcdTA2MzFcdTA2NDNcdTA2NDhcdTA2MjdcdTA2MzIiLCJwdG4iOiJwYXR0ZXJuc1wvMTYyOTQwMzY4NWltZy02MTFlYmEyNTk2ZDk5LnBuZyIsImhleCI6IiMwMGZmZmYifQ=="><img src="https://stylorita.com/admin/patterns/1629403685img-611eba2596d99.png" class="pattern-img">سماوي / تركواز</span></span></a></li>
                            <li><a role="option" class="dropdown-item pl-0 colorFilter colorize9" id="bs-select-1-10" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyN1x1MDYyZVx1MDYzNlx1MDYzMSIsInB0biI6InBhdHRlcm5zXC8xNjI5NDAzNzAyaW1nLTYxMWViYTM2Y2QzOTUucG5nIiwiaGV4IjoiIzAwODAwMCJ9"><img src="https://stylorita.com/admin/patterns/1629403702img-611eba36cd395.png" class="pattern-img">اخضر</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize10" id="bs-select-1-11" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYzMlx1MDY0YVx1MDYyYVx1MDY0OFx1MDY0Nlx1MDY0YVwvXHUwNjMyXHUwNjRhXHUwNjJhXHUwNjRhIiwicHRuIjoicGF0dGVybnNcLzE2Mjk0MDM3MThpbWctNjExZWJhNDZiOTk2NS5wbmciLCJoZXgiOiIjODA4MDAwIn0="><img src="https://stylorita.com/admin/patterns/1629403718img-611eba46b9965.png" class="pattern-img">زيتوني/زيتي</span></span></a></li>
                                <li><a role="option" class="dropdown-item pl-0 colorFilter colorize11" id="bs-select-1-12" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyN1x1MDYzNVx1MDY0MVx1MDYzMSBcLyBcdTA2NDVcdTA2MzNcdTA2MmFcdTA2MzFcdTA2MmZcdTA2MjkiLCJwdG4iOiJwYXR0ZXJuc1wvMTYyOTQwMzk0N2ltZy02MTFlYmIyYjBmYjVhLnBuZyIsImhleCI6IiNmZmZmMDAifQ=="><img src="https://stylorita.com/admin/patterns/1629403947img-611ebb2b0fb5a.png" class="pattern-img">اصفر / مستردة</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize12" id="bs-select-1-13" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyOFx1MDYzMVx1MDYyYVx1MDY0Mlx1MDYyN1x1MDY0NFx1MDY0YSAiLCJwdG4iOiJwYXR0ZXJuc1wvMTYyOTQwMzk2M2ltZy02MTFlYmIzYjAyYTJkLnBuZyIsImhleCI6IiNmZmE1MDAifQ=="><img src="https://stylorita.com/admin/patterns/1629403963img-611ebb3b02a2d.png" class="pattern-img">برتقالي </span></span></a></li>
                                    <li><a role="option" class="dropdown-item pl-0 colorFilter colorize13" id="bs-select-1-14" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDY0N1x1MDYyN1x1MDY0MVx1MDYyN1x1MDY0NiIsInB0biI6InBhdHRlcm5zXC8xNjMwNzgyOTcwaW1nLTYxMzNjNWZhZGJlNDIucG5nIiwiaGV4IjoiI2NjNjYwMCJ9"><img src="https://stylorita.com/admin/patterns/1630782970img-6133c5fadbe42.png" class="pattern-img">هافان</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize14" id="bs-select-1-15" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyOFx1MDY0Nlx1MDY0YSAiLCJwdG4iOiJwYXR0ZXJuc1wvMTYyOTQwNDA0OGltZy02MTFlYmI5MDZkY2E1LnBuZyIsImhleCI6IiM1YzMzMTcifQ=="><img src="https://stylorita.com/admin/patterns/1629404048img-611ebb906dca5.png" class="pattern-img">بني </span></span></a></li>
                                        <li><a role="option" class="dropdown-item pl-0 colorFilter colorize23" id="bs-select-1-16" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDY0M1x1MDYyN1x1MDY0MVx1MDY0YVx1MDY0NyIsInB0biI6InBhdHRlcm5zXC8xNjI5NDA0MTcyaW1nLTYxMWViYzBjZjE5MGIucG5nIiwiaGV4IjoiI0I5QTI4QiJ9"><img src="https://stylorita.com/admin/patterns/1629404172img-611ebc0cf190b.png" class="pattern-img">كافيه</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize15" id="bs-select-1-17" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyOFx1MDY0YVx1MDYyYyIsInB0biI6InBhdHRlcm5zXC8xNjI5NDA0MDY3aW1nLTYxMWViYmEzMjZhMTYucG5nIiwiaGV4IjoiI2NkYWU3MCJ9"><img src="https://stylorita.com/admin/patterns/1629404067img-611ebba326a16.png" class="pattern-img">بيج</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize16" id="bs-select-1-18" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyYVx1MDYyN1x1MDY0YVx1MDYyY1x1MDYzMSBcLyBcdTA2NDRcdTA2NGFcdTA2NDhcdTA2MjhcdTA2MjdcdTA2MzFcdTA2MmYiLCJwdG4iOiJwYXR0ZXJuc1wvMTYyOTQwMjMxMWltZy02MTFlYjRjNzFmYzAwLnBuZyIsImhleCI6IiN0aWdlciJ9"><img src="https://stylorita.com/admin/patterns/1629402311img-611eb4c71fc00.png" class="pattern-img">تايجر / ليوبارد</span></span></a></li>
                                            <li><a role="option" class="dropdown-item pl-0 colorFilter colorize17" id="bs-select-1-19" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyN1x1MDYyZFx1MDY0NVx1MDYzMSIsInB0biI6InBhdHRlcm5zXC8xNjI5NDA0MDkxaW1nLTYxMWViYmJiMzhiMjcucG5nIiwiaGV4IjoiI2ZmMDAwMCJ9"><img src="https://stylorita.com/admin/patterns/1629404091img-611ebbbb38b27.png" class="pattern-img">احمر</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize18" id="bs-select-1-20" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDY0Nlx1MDYyOFx1MDY0YVx1MDYyYVx1MDY0YSIsInB0biI6InBhdHRlcm5zXC8xNjI5NDA0MTA4aW1nLTYxMWViYmNjNzc4ZjkucG5nIiwiaGV4IjoiIzgwMDAwMCJ9"><img src="https://stylorita.com/admin/patterns/1629404108img-611ebbcc778f9.png" class="pattern-img">نبيتي</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize19" id="bs-select-1-21" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyOFx1MDY0Nlx1MDY0MVx1MDYzM1x1MDYyY1x1MDY0YSBcLyBcdTA2NDRcdTA2MjdcdTA2NDFcdTA2NDZcdTA2MmZcdTA2MzEiLCJwdG4iOiJwYXR0ZXJuc1wvMTYyOTQwNDEzMGltZy02MTFlYmJlMjlhYWM5LnBuZyIsImhleCI6IiM4MDM3OTAifQ=="><img src="https://stylorita.com/admin/patterns/1629404130img-611ebbe29aac9.png" class="pattern-img">بنفسجي / لافندر</span></span></a></li>
                                                <li><a role="option" class="dropdown-item colorFilter colorize26" id="bs-select-1-22" tabindex="0"><span class="text"><span class="content " id="eyJpZCI6Ilx1MDY0MVx1MDY0OFx1MDYzNFx1MDY0YVx1MDYyNyAiLCJwdG4iOiIiLCJoZXgiOiIjRkYxNjk1In0="><div style="background-color: #FF1695;display:inline;width:60px;height:32px;"></div>فوشيا </span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize20" id="bs-select-1-23" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDYyOFx1MDY0YVx1MDY0Nlx1MDY0M1wvIFx1MDY0M1x1MDYyN1x1MDYzNFx1MDY0NVx1MDY0YVx1MDYzMVwvIFx1MDYzM1x1MDY0YVx1MDY0NVx1MDY0OFx1MDY0NiIsInB0biI6InBhdHRlcm5zXC8xNjI5NDA0MTUzaW1nLTYxMWViYmY5NGRiMDcucG5nIiwiaGV4IjoiI0Y3OTlDRCJ9"><img src="https://stylorita.com/admin/patterns/1629404153img-611ebbf94db07.png" class="pattern-img">بينك/ كاشمير/ سيمون</span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter colorize22" id="bs-select-1-24" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDY0M1x1MDYyN1x1MDYzMVx1MDY0OFx1MDY0N1x1MDYyN1x1MDYyYSAgKFx1MDYyOFx1MDYyY1x1MDY0NVx1MDY0YVx1MDYzOSBcdTA2MjdcdTA2NDRcdTA2NDhcdTA2MjdcdTA2NDZcdTA2NDdcdTA2MjcpIiwicHRuIjoicGF0dGVybnNcLzE2Mjk0MDI1ODJpbWctNjExZWI1ZDYzODg2NS5wbmciLCJoZXgiOiIjZmZmZmZmIn0="><img src="https://stylorita.com/admin/patterns/1629402582img-611eb5d638865.png" class="pattern-img">كاروهات  (بجميع الوانها)</span></span></a></li> -->
                                                    <!-- <li><a role="option" class="dropdown-item pl-0 colorFilter colorize21" id="bs-select-1-25" tabindex="0"><span class="text"><span class="content d-flex justify-content-center" id="eyJpZCI6Ilx1MDY0NVx1MDYyYVx1MDYzOVx1MDYyZlx1MDYyZiBcdTA2MjdcdTA2NDRcdTA2MjdcdTA2NDRcdTA2NDhcdTA2MjdcdTA2NDYgICIsInB0biI6InBhdHRlcm5zXC8xNTY4MTA2MjI5aW1nLTVkNzc2NmY1YmVkMmUuanBnIiwiaGV4IjoiI2ZmZmZmZiJ9"><img src="https://stylorita.com/admin/patterns/1568106229img-5d7766f5bed2e.jpg" class="pattern-img">متعدد الالوان  </span></span></a></li><li><a role="option" class="dropdown-item pl-0 colorFilter all" id="bs-select-1-26" tabindex="0"><span class="text"><span class="content"><img src="https://stylorita.com/images/all.png" class="pattern-img"> جميع الألوان</span></span></a></li></ul></div> -->
        </div>
        <!-- Container-fluid Ends-->



    </div>
    </div>
    
</div>




{{-- delete --}}
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ Route('dashboard.products.delete') }}" method="POST">
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
        $(function() {
            var table = $('#editableTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ Route('dashboard.colors.getAllColors') }}",
                columns: [

                    {
                        data: 'color',
                        name: 'color'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                   
                ]
            });

        });

        $('#editableTable tbody').on('click', '#deleteBtn', function(argument) {
            var id = $(this).attr("data-id");
            console.log(id);
            $('#deletemodal #id').val(id);
        })
    </script>
@endpush


