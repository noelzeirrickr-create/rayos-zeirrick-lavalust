<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        // Student home page
        $data['title'] = 'Student Home';
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        // Part C: data passed from controller to view
        $student = [
            'student_id' => '2026-0001',
            'name'       => 'Juan Dela Cruz',
            'course'     => 'BS Information Technology',
            'year'       => '2nd Year',
            'section'    => 'A',
            'email'      => 'juan@example.com'
        ];

        $data['title']   = 'Student Profile';
        $data['student'] = $student;

        $this->call->view('student_profile', $data);
    }
}