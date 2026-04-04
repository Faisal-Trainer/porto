<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Project;
use App\Models\Talent;
use App\Models\User;

class DashboardController
{
    public function index()
    {
        /** @var User $user */
        $user = auth()->user();

        $stats = [
            'total_contacts' => Customer::count(),
            'total_talents' => Talent::count(),
            'unread_contacts' => Customer::whereNull('deleted_at')->latest()->take(5)->get(),
            'unread_talents' => Talent::unread()->count(),
            'pending_users' => User::where('is_active', false)->whereNotNull('email_verified_at')->count(),
            'total_projects' => Project::count(),
            'recent_contacts' => Customer::latest()->take(5)->get(),
            'recent_talents' => Talent::latest()->take(5)->get(),
        ];

        return view('dashboard', compact('stats', 'user'));
    }
}
