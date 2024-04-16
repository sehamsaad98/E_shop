<?php

namespace App\Services;

use App\Repositories\ColorRepository;
use App\Utils\ImageUpload;
use Yajra\DataTables\Facades\DataTables;
class ColorService
{

    public $colorRepository;
    public function __construct(ColorRepository $repo)
    {
        $this->colorRepository = $repo;
    }
   

    public function store($params)
    {   
        if (isset($params['image'])) {
            $params['image'] = ImageUpload::uploadImage($params['image'], '/img/colors');
        }

        return $this->colorRepository->store($params);

        // return $color;
    }


    public function colorDatatable()
    {
        
        $query = $this->colorRepository->getAllColors();
        return DataTables::of($query)
            ->addColumn('action', function ($row) {
                return $btn = '
                <a href="' . Route('dashboard.colors.edit', $row->id) . '"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>

                <button type="button"  id="deleteBtn"   data-id="' . $row->id . '" class="btn btn-danger mt-md-0 mt-2" data-bs-toggle="modal"
                data-original-title="test" data-bs-target="#deletemodal"><i class="fa fa-trash"></i></button>';
            })

            ->addColumn('image', function ($row) {
                return '<img src="' . asset('assets/img/colors/'.$row->image) . '" width="100px" height="100px">';
            })

            ->rawColumns(['action', 'image'])
            ->make(true);
        }

        public function getAll()
        {
            return $this->colorRepository->getAllColors()->get();
        }
}