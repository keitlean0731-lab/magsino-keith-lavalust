<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class StudentController extends Controller

{

 public function index()
 
 {
 $this->call->view('student_home.php');
 
 }

 public function profile()

 {

 // Display student profile
 $student = [
 'student_id' => '2026-000144',
 'name' => 'Keith Leanne V. Magsino',
 'course' => 'BS Information Technology',
 'year' => '3rd Year',
 'section' => '3-F3',
 'email' => 'keit.lean0731@gmail.com'
 ];
 $this->call->view('student_profile', $student);
 }
 }

