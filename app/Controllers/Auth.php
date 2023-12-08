<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        //
        $data = [];
        helper(['form']);
        helper(['cookie']);

        if($this->request->getMethod() == 'post'){
            $rules = [
                'username' => 'required|min_length[8]|max_length[30]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or password don\'t match'
                ]
            ];

            if(!$this->validate($rules,$errors)){
                $data['validation'] = $this->validator;
            }else{
                $model = new UserModel();
                $user = $model->where('username', $this->request->getVar('username'))->first();
                if($this->request->getVar('remember_me') == 'remember_me'){
                    setcookie('username', $user['username'], time() + (86400 * 30), "/");
                    setcookie('password', $user['password'], time() + (86400 * 30), "/");

                }
                $this->setUserSession($user);
                //session()->setFlashdata('Success', 'Login Success!');
                return redirect()->to('/drakor');
            }
        }else if(get_cookie('username') && get_cookie('password')){
            $model = new UserModel();
            $user = $model->where('username', get_cookie('username'))->first();
            if($user['password'] == get_cookie('password')){
                $this->setUserSession($user);
                return redirect()->to('/drakor');
            }else{
                return view('login', $data);
            }
        }
        return view('login', $data);
    }

    private function setUserSession($user){
        $data = [
            'username' => $user['username'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post'){
            $rules = [
                'username' => 'required|min_length[8]|max_length[30]|is_unique[data_user.username]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_validation' => 'matches[password]',
            ];
            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $model = new UserModel();
                $data = [
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($data);

                //session()->setFlashdata('success', 'Daftar Success');
                return redirect()->to('/');
            }
        }
        return view('daftar', $data);
    }

    public function logout(){
        session()->destroy();

        setcookie('username', '', time() - 3600, '/');
        setcookie('password', '', time() - 3600, '/');
        
        return redirect()->to('/');
    }
}
