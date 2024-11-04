<?php

namespace App\Http\Controllers;

use App\Models\OurStrongest;
use Illuminate\Http\Request;

class OurStrongestController extends Controller
{
    // Display a listing of the services
    public function index()
    {
        $services = OurStrongest::all(); // Fetch all services from the database
        return view('ourStrongest', compact('services')); // Pass the data to the view
    }

    // Show the form for creating a new service
    public function create()
    {
        return view('create_service'); // Create your view for the form
    }

    // Store a newly created service in storage
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'image' => 'required|url',
            'youtube_link' => 'nullable|url',
        ]);

        OurStrongest::create($request->all()); // Mass assignment
        return redirect()->route('ourStrongest.index'); // Adjust this route name as needed
    }

    // Show the form for editing the specified service
    public function edit($id)
    {
        $service = OurStrongest::findOrFail($id);
        return view('edit_service', compact('service')); // Create your view for editing
    }

    // Update the specified service in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'image' => 'required|url',
            'youtube_link' => 'nullable|url',
        ]);

        $service = OurStrongest::findOrFail($id);
        $service->update($request->all()); // Mass assignment for update
        return redirect()->route('ourStrongest.index'); // Adjust this route name as needed
    }

    // Remove the specified service from storage
    public function destroy($id)
    {
        $service = OurStrongest::findOrFail($id);
        $service->delete(); // Delete the record
        return redirect()->route('ourStrongest.index'); // Adjust this route name as needed
    }
}
