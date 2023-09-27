<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller {
    public function showForm() {
        return view('register');
    }

    public function submitForm(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer',
            'Height' => 'required|numeric|between:2.50,99.99',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
    
        if (!$validated) {
            return redirect()->route('register.show')->with('error', 'Form failed to submit.');
        }
    
        // Handle image upload
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $picturePath = $picture->store('pictures', 'public');
    
            // Get form input values
            $name = $request->input('name');
            $address = $request->input('address');
            $email = $request->input('email');
            $age = $request->input('age');
            $Height = $request->input('Height');
    
            return view('submitted', compact('name', 'address', 'email', 'age', 'Height', 'picturePath'));
        } else {
            return redirect()->route('register.show')->with('error', 'Image upload failed.');
        }
    }
    
}