<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitAssignmentRequest;
use App\Models\Assignment;
use App\Models\Classroom;
use App\Models\SubMaterial;
use App\Models\SubmitAssignment;
use App\Services\AssignmentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use ZipArchive;

class UserAssignmentController extends Controller
{
    private AssignmentService $assignmentService;

    public function __construct(AssignmentService $assignmentService)
    {
        $this->assignmentService = $assignmentService;
    }

    public function index(Classroom $classroom, Assignment $assignment): View
    {
//        dd($this->assignmentService->handleGetAssignmentStudent($classroom->id, $assignment->id));
        $data = [
            'students' => $this->assignmentService->handleGetAssignmentStudent($classroom->id, $assignment->id),
            'assignment' => $assignment,
            'classroom' => $classroom
        ];
//        dd($data);
        return \view ('dashboard.user.pages.assignment.index', $data);
    }

    public function create(Classroom $classroom, SubMaterial $submaterial, Assignment $assignment): View
    {
        $data = [
            'assignment' => $assignment,
            'classroom' => $classroom,
            'subMaterial' => $submaterial,
            'submitAssignment' => $this->assignmentService->handleGetStudentSubmitAssignment(auth()->id(), $assignment->id),
        ];
        return \view ('dashboard.user.pages.assignment.detail', $data);

    }

    public function store(SubmitAssignmentRequest $request, Classroom $classroom, SubMaterial $submaterial): RedirectResponse
    {
        $this->assignmentService->submitAssignment($request);

        return to_route('common.showSubMaterial', ['classroom' => $classroom, 'submaterial' => $submaterial])->with('success', trans('alert.add_success'));
    }

    public function download(SubmitAssignment $submitAssignment){
        $path = public_path('storage/'.$submitAssignment->file);
        $name = $submitAssignment->student->name.'.zip';
        return response()->download($path,$name);
    }

    public function downloadAll(Classroom $classroom,Assignment $assignment){
        $file = $this->assignmentService->handleGetAssignmentStudent($classroom->id, $assignment->id);
        $zipName = 'Assignment.zip';
        $zipPath = storage_path('app/public/' . $zipName);
        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {

            foreach ($file as $file) {
                if($file->submitAssignment){
                    if (file_exists(storage_path('app/public/' . $file->submitAssignment->file))) {
                        $zip->addFile(storage_path('app/public/' . $file->submitAssignment->file), $file->name.'.zip');
                    }
                }
            }

            $zip->close();
        }

        return Response()->download($zipPath, $zipName);
    }

}
