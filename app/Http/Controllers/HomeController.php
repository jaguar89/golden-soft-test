<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function approveTechnician(Request $request , $id){

       $technician = Technician::findOrFail($id);
       $technician->update([
           'approved' => true,
       ]);
       return redirect()->back();
   }
   public function disapproveTechnician(Request $request , $id){

       $technician = Technician::findOrFail($id);
       $technician->update([
           'approved' => false,
       ]);
       return redirect()->back();
   }
}
