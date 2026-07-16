<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\OrganizationEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrganizationEnquiryController extends Controller
{
    public function create()
    {
        return view('public.organization_enquiry');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'organization_name' => ['required', 'string', 'max:255'],
            'group_size' => ['required', 'integer', 'min:2', 'max:100000'],
            'contact_name' => ['required', 'string', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:50'],
            'contact_email' => ['required', 'email:filter', 'max:255'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);
        OrganizationEnquiry::create($data);
        return redirect()->route('organization.enquiry.create')->with('success', 'Thank you. Our team will reply within one working day.');
    }
}
