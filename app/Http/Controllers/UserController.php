<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use RegistersUsers;

    public function index(){


        $users = User::select('id', 'name', 'email')->get();

        return response()->json(['data' => $users]);

    }

    public function store(Request $request):RedirectResponse {

        $request->validate([
            'profile' => 'nullable|mimes:png,jpg,jpeg|max:5400',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $path = null;

        if($request->hasFile('profile') && $request->file('profile')->isValid()){

            $file = $request->file('profile');

            $fileExtension = $file->getClientOriginalExtension();

            $path = $request->file('profile')->store('profiles', 'public');
        }


        $user = User::create([
            'profile' => $path,
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('users.index')->with('success', 'User added successfuly');

    }


}
