<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactPostRequest;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\DTO\ContactFormDTO;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contacts');
    }

    public function create(ContactPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $contactFormDTO = new ContactFormDTO(
            name: $validated['name'],
            email: $validated['email'],
            message: $validated['message']
        );

        try {
            $contact = new Contact();
            $contact->name = $contactFormDTO->name;
            $contact->email = $contactFormDTO->email;
            $contact->message = $contactFormDTO->message;
            $contact->save();
        } catch (\Exception $e) {
            return back()->with(key: 'error', value: $e->getMessage());
        }

        return redirect()->back()->with(key: 'success', value: 'Thank you for your feedback.');
    }
}
