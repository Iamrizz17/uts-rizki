<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'nomor_telepon' => 'required|numeric',
            'email' => 'required|email',
            'status_publish' => 'required|boolean',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required',
            'nomor_telepon' => 'required|numeric',
            'email' => 'required|email',
            'status_publish' => 'required|boolean',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contact.index')->with('success', 'Kontak berhasil diubah.');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Kontak berhasil dihapus.');
    }
}

