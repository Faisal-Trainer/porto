<?php

namespace App\Http\Controllers;

use App\Models\costumer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CostumerController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costumers = costumer::latest()->get();
        return view('show.contact', compact('costumers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'category' => [
                'required',
                Rule::in([
                    'web_application',
                    'it_support',
                    'ui_ux',
                    'digital_consulting',
                    'goes_to_school',
                    'social_media',
                    'other'
                ])
            ],
            'message' => 'required|string|max:1000',
        ]);

        costumer::create($data);

        return redirect()->route('contact.create')->with('success', 'Terima kasih');
    }
    public function destroy(costumer $costumers)
    {
        $costumers->delete();

        return redirect()->route('show.contact')->with('success', 'costumer berhasil di hapus.');
    }
}
