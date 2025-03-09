<?php

class AdminController extends Controller
{

    public function login(){
        $this->render('admin.login', ['title' => 'Admin Login']);
    }

    public function authenticate(){
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $admin = $this->model('admin');
        $admin = $admin->find($email);
        if ($admin && password_verify($password, $admin->password)){
            $_SESSION['admin'] = $admin;
            $this->redirect('/admin');
        }
        else{
            echo 'Invalid email or password';
        }
    }


}