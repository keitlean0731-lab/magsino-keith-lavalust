<?php


class StudentController extends BaseController
{
    public function index()
    {
        $model = new UsersModel();

        $data['students'] = $model->getStudents();

        $this->view('student', $data);
    }
}