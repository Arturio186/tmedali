<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Support\Facades\Storage;

class RequestController extends Controller
{
    public function index()
    {
        $requests = Lead::latest()->paginate(20);

        return view('admin.requests.index', compact('requests'));
    }

    public function download(Lead $request)
    {
        abort_unless($request->attachment, 404);

        return Storage::disk('private')->download(
            $request->attachment,
            $request->attachment_name,
        );
    }

    public function destroy(Lead $request)
    {
        if ($request->attachment) {
            Storage::disk('private')->delete($request->attachment);
        }

        $request->delete();

        return back()->with(
            'success',
            'Заявка удалена.'
        );
    }
}