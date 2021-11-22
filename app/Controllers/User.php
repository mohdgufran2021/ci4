<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        helper('form');
        $session = session();
        $model = new UserModel;
        $data = [
            'title' => 'Login Form'
        ];
        if ($this->request->getMethod() === 'post' && $this->validate(
                [
                    'email' => 'required|valid_email',
                    'password' => 'required',
                ]
            ))
        {

            $user = $model->where('email', $this->request->getPost('email'))
                ->where('password', md5($this->request->getPost('password')))
                ->get()->getFirstRow('array');
            if ($user) {

                $session->set([
                     'is_logged_in' => true,
                     'email' => $user['email'],
                     'user_id'=> $user['id'],
                     'name' => $user['name']
                ]);

                echo 'login Successfully';
            } else {

                echo view('templates/header', $data);
                echo view('login', $data);
                echo view('templates/footer');

            }

        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/user/login');
    }

    public function register()
    {
        $data = [
            'title' => 'Sign Up Form'
        ];
        $model = model(UserModel::class);
        helper('form');
        if ($this->request->getMethod() === 'post' && $this->validate(
                [
                    'name' => 'required|min_length[3]|max_length[200]',
                    'email' => 'required|valid_email|is_unique[users.email]',
                    'password' => 'required|min_length[3]|max_length[200]',
                ]
            ))
        {
            $model->save([
                'name' => $this->request->getPost('name'),
                'email' => ($this->request->getPost('email')),
                'password' => md5($this->request->getPost('password'))
            ]);

            echo view('success_signin');
        } else {
            echo view('templates/header', $data);
            echo view('register', $data);
            echo view('templates/footer');
        }
    }

    public function profile()
    {
        helper('form');
       $session= session();
       if(!$session->get('is_logged_in'))
       {
           return redirect()->to('/user/login');
       }

       $data =
           [
               'name' => $session->get('name'),
               'email' => $session->get('email'),
               'title' => 'update profile',
           ];



        $rules =  [
//            'email' => 'required|valid_email',
              'name' => 'required',
                ];
        if ($this->request->getMethod() === 'post' && $this->validate($rules))
        {
            $model = new UserModel;
            $model->update($session->get('user_id'),[
                'name' => $this->request->getPost('name')
            ]);
            $session->set('name', $this->request->getPost('name'));
        }

        echo view('templates/header', $data);
        echo view('profile', $data);
        echo view('templates/footer');

    }

    public function submit()
    {

    }


}
