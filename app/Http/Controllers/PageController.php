<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function students_table(){
        return view('tables.student_tables');
    }
    public function teachers_table(){
        return view('tables.teachers_tables');
    }
    public function staffes_table(){
        return view('tables.staff_tables');
    }
    public function subjects_table(){
        return view('tables.subject_tables');
    }
    public function subject_materials_table(){
        return view('tables.subject_materials');
    }
    public function student_result_table(){
        return view('tables.student_result_tables');
    }
    public function benefit_table(){
        return view('tables.benefit_tables');
    }
    public function billing_table(){
        return view('tables.billing_tables');
    }
    
    // Create forms all

    public function create_student(){
        return view('createforms.create_student');
    }
    public function create_teacher(){
        return view('createforms.create_teacher');
    }
    public function create_staff(){
        return view('createforms.create_staff');
    }
    public function create_subject(){
        return view('createforms.create_subject');
    }
    public function create_subject_materials(){
        return view('createforms.create_subject_materials');
    }
    public function create_sutudent_result(){
        return view('createforms.create_student_result');
    }
    public function save_billing(){
        return view('createforms.save_billing');
    }
}
