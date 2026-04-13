<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\OtpMail;
use App\Models\Customer;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class CustomerController
{
    public function index()
    {
        $customers = Customer::latest()->paginate(10);

        return view('admin.contact', compact('customers'));
    }

    public function create()
    {
        return view('pages.contact');
    }

    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();
        $otp = (string) random_int(100000, 999999);

        session(['pending_contact_data' => $data]);
        Cache::put("otp_{$data['email']}", $otp, now()->addMinutes(10));

        Mail::to($data['email'])->send(new OtpMail($otp));

        return redirect()->route('otp.show', ['type' => 'contact']);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
