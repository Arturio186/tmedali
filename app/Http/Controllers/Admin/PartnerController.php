<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Services\ImageService;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function __construct(
        private readonly ImageService $imageService,
    ) {
    }


    public function index()
    {
        $partners = Partner::orderBy('sort')->get();

        return view('admin.partners.index', compact('partners'));
    }


    public function create()
    {
        return view('admin.partners.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => ['required', 'url'],
            'sort' => ['required', 'integer'],
            'logo' => ['required', 'image'],
        ]);


        $data['logo'] = $this->imageService->upload(
            $request->file('logo'),
            'partners',
        );


        Partner::create($data);


        return redirect()
            ->route('admin.partners.index')
            ->with('success', 'Партнер добавлен.');
    }


    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }


    public function update(Request $request, Partner $partner)
    {
        $data = $request->validate([
            'url' => ['required', 'url'],
            'sort' => ['required', 'integer'],
            'logo' => ['nullable', 'image'],
        ]);


        if ($request->hasFile('logo')) {

            $data['logo'] = $this->imageService->replace(
                $request->file('logo'),
                $partner->logo,
                'partners',
            );

        }


        $partner->update($data);


        return redirect()
            ->route('admin.partners.index')
            ->with('success', 'Партнер обновлен.');
    }


    public function destroy(Partner $partner)
    {
        $this->imageService->delete(
            $partner->logo,
            'partners',
        );


        $partner->delete();


        return redirect()
            ->route('admin.partners.index')
            ->with('success', 'Партнер удален.');
    }
}