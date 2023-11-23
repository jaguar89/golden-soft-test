<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechnicianRequest;
use App\Http\Resources\TechnicianResource;
use App\Models\Technician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TechniciansController extends Controller
{
    public function register(TechnicianRequest $request)
    {
        try {
//            if($request->hasFile('personal_image') && $request->hasFile('residency_image')){
//                $personal_image_path = $request->file('personal_image')->store('images/techs');
//                $residency_image_path = $request->file('residency_image')->store('images/techs');
//            }

            $technician = Technician::create([
                'f_name' => $request->input('f_name'),
                'l_name' => $request->input('l_name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'mobile' => $request->input('mobile'),
                'city' => $request->input('city'),
                'personal_image' => $request->input('personal_image'),
                'bank' => $request->input('bank'),
                'iban' => $request->input('iban'),
                'location' => $request->input('location'),
                'residency_image' => $request->input('residency_image'),
            ]);

            $skills = $request->input('skills');
            foreach ($skills as $skill) {
                $technician->services()->attach($skill['service_id']);
            }

            $token = $technician->createToken('sample_token')->plainTextToken;

            return response()->json(new TechnicianResource($technician), 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'mobile' => 'required|string',
            'password' => 'required|min:6'
        ]);

        $technician = Technician::where('mobile', $fields['mobile'])->first();

        if (!$technician || !Hash::check($fields['password'], $technician->password)) {
            return response()->json([
                'error' => 'Invalid mobile or password.',
            ], 401);
        }

        if (!$technician->approved) {
            return response()->json([
                'error' => 'Technician must be approved first.',
            ], 403);
        }

        return response()->json(new TechnicianResource($technician), 200);
    }

    public function logout(Request $request)
    {
        if (Auth::guard('api')->check()) {
            $technician = Auth::guard('api')->user();
            $technician->tokens()->delete();
            return response()->json([
                'message' => 'Logged out'
            ]);
        }
        return response()->json([
            'error' => 'Unauthorized',
        ], 401);
    }
}
