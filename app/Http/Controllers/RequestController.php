<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;

use App\Services\FileService;

class RequestController extends Controller
{
    public function store(
        Request $request,
        FileService $fileService,
    )
    {
        $data = $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['nullable', 'email'],
            'comment' => ['nullable'],

            'attachment' => [
                'nullable',
                'file',
                'max:20480',
            ],
        ]);

        if ($request->hasFile('attachment')) {

            $file = $request->file('attachment');

            $data['attachment'] = $fileService->upload(
                $file,
                'requests',
            );

            $data['attachment_name'] =
                $file->getClientOriginalName();
        }

        Lead::create($data);

        return back()->with(
            'success',
            'Заявка отправлена.',
        );
    }

    public function download(Lead $request)
    {
        return Storage::disk('private')->download(
            $request->attachment,
            $request->attachment_name,
        );
    }
}
