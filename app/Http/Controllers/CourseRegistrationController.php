<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\CourseRegistration;

class CourseRegistrationController extends Controller
{
    public function showForm()
    {
        return view('coursesregister');
    }

    

public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'id_card' => 'required|file|mimes:jpg,png,pdf|max:2048',
    ]);

    // จัดการการอัปโหลดไฟล์
    if ($request->hasFile('id_card')) {
        $filePath = $request->file('id_card')->store('id_cards', 'public');
    }

    // ใช้ Model เพื่อบันทึกข้อมูล
    CourseRegistration::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'id_card_path' => $filePath,
    ]);

    return back()->with('success', 'ลงทะเบียนสำเร็จ!');
}

}
