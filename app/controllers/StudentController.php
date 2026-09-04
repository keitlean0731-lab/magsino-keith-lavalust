<?php

require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/UsersModel.php';

class StudentController extends BaseController
{
    public function index()
    {
        $model = new UsersModel();

        $data['students'] = $model->getStudents();

        $this->view('student', $data);
    }
}