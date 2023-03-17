<?php

namespace App\Traits;

use App\Helpers\CurrencyFormatter;
use Exception;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

trait YajraTable
{

    /**
     * Datatable mockup for classroom resource
     *
     * @param mixed $collection
     *
     * @return JsonResponse
     * @throws Exception
     */

    public function MentorMockup(mixed $collection): JsonResponse
    {
        return DataTables::of($collection)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return view('dashboard.admin.pages.mentor.datatables', compact('data'));
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
