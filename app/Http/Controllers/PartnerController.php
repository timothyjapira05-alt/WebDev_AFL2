<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|max:100',
            'email'         => 'required|email',
            'phone'         => 'nullable|max:20',
            'business_name' => 'required|max:150',
            'city'          => 'required|max:100',
            'message'       => 'required',
        ]);

        Partner::create($data);

        return back()->with('success', 'Terima kasih! Pendaftaran partnermu sudah kami terima.');
    }
}