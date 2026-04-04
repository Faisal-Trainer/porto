<?php

namespace App\Http\Controllers;

use App\Actions\NotifyAdmins;
use App\Http\Requests\StoreContactRequest;
use App\Mail\NewContactMail;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;

class CostumerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->get();

        return view('show.contact', compact('customers'));
    }

    public function create()
    {
        return view('pages.contact');
    }

    public function store(StoreContactRequest $request)
    {
        $customer = Customer::create($request->validated());

        Mail::to(config('mail.admin_email'))->queue(new NewContactMail($customer));
        NotifyAdmins::newContact($customer);

        return redirect()->route('contact.create')->with('success', 'Terima kasih, pesan kamu sudah kami terima! Kami akan segera menghubungi kamu.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
