<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;

use App\Models\formvoucher;
use Illuminate\Http\Request;

class formvoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formvoucher = formvoucher::where('Judul', 'LIKE', "%$keyword%")
                ->orWhere('Deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('Tombol', 'LIKE', "%$keyword%")
                ->orWhere('Link_Tombol', 'LIKE', "%$keyword%")
                ->orWhere('Foto', 'LIKE', "%$keyword%")
                ->orWhere('Disable', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formvoucher = formvoucher::latest()->paginate($perPage);
        }

        return view('formvoucher.index', compact('formvoucher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('formvoucher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StorePostRequest $request)
    {
        
        $requestData = $request->all();
        
        formvoucher::create($requestData);

        return redirect('admin/formvoucher')->with('flash_message', 'formvoucher added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $formvoucher = formvoucher::findOrFail($id);

        return view('formvoucher.show', compact('formvoucher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $formvoucher = formvoucher::findOrFail($id);

        return view('formvoucher.edit', compact('formvoucher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $formvoucher = formvoucher::findOrFail($id);
        $formvoucher->update($requestData);

        return redirect('admin/formvoucher')->with('flash_message', 'formvoucher updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        formvoucher::destroy($id);

        return redirect('admin/formvoucher')->with('flash_message', 'formvoucher deleted!');
    }
}
