<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\PaperFormat;
use App\Models\PaperType;
use App\Models\SubjectArea;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function dashboard()
    {

        $appstats = [
            (object) ['title' => 'academic levels', 'value' => AcademicLevel::count()],
            (object) ['title' => 'subject areas', 'value' => SubjectArea::count()],
            (object) ['title' => 'paper types', 'value' => PaperType::count()],
            (object) ['title' => 'paper formats', 'value' => PaperFormat::count()],
        ];

        return view('admin.dashboard', compact('appstats'));
    }

    public function profile()
    {
        $user = Auth::guard('admin')->user();

        return view('admin.profile', compact('user'));
    }

    public function orders()
    {

        return view('admin.orders.show');
    }
}