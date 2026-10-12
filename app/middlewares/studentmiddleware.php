<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware extends Middleware
{
    public function handle()
    {
        session_start();

        // Unique access condition — customize this message/condition per VIII
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            $_SESSION['student_access'] = true; // simple demo: auto-grant on first visit
            // OR, to actually block: redirect instead
            // header('Location: ' . site_url('student'));
            // exit();
        }
    }
}