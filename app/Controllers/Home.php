<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    protected $helpers = ['user'];

    function __construct(){
        $this->user = new UserModel();
    }

    public function index(): string
    {
        if (!session()->has('id')) {
            return view('login');
        }
        $id = session()->get('id');
        $userModel = new UserModel();
        $userData = $userModel->find($id);

        return view('dashboard', ['userData' => $userData]);
    }

    public function login(): string
    {
        return view('login');
    }

    public function postlogin()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'    => 'This field is required',
                    'valid_email' => 'Your email is invalid',
                ]
            ],
            
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required'   => 'This field is required',
                ]
            ],
        ]);
        
        if (!$validation->withRequest($this->request)->run()) {
            return view('login');
        }
        
        $data = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['email' => $data['email']]);
        
        $user = $query->getRow();
        if($user){
            if(password_verify($data['password'], $user->password)){
                $params = ['id' => $user->id];
                session()->set($params);
                return redirect()->to(site_url('/'));
            }else{
                return redirect()->back()->with('error', 'Your email or password is incorrect');
            }
        }else{
            return redirect()->back()->with('error', 'Your email or password is incorrect');
        }
    }

    public function register(): string
    {
        return view('register');
    }

    public function postregister()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[3]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'image'    => 'uploaded[image]|max_size[image,2048]|mime_in[image,image/png,image/jpeg]',
            'password' => 'required|min_length[8]',
            'pass-confirm' => 'required|matches[password]'
        ], [
            'username' => [
                'required'      => 'The username field is required.',
                'min_length'    => 'Username must be 3 or more characters.',
            ],
            'email' => [
                'required'      => 'The email field is required.',
                'valid_email'   => 'Your email is invalid',
                'is_unique'     => 'Your email is already registered'
            ],
            'image' => [
                'uploaded'      => 'Please upload the image.',
                'max_size'      => 'The file size should not exceed 2 MB.',
                'mime_in'       => 'The file must be JPEG or PNG',
            ],
            'password' => [
                'required'      => 'The password field is required.',
                'min_length'    => 'Password must be 8 or more characters.',
            ],
            'pass-confirm' => [
                'required'      => 'The password field is required.',
                'matches'       => 'The password doesnt match.',
            ],
        ]);

        if (! $validation->withRequest($this->request)->run()) {
            return view('register');
        } else {

            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();

            $image->move(ROOTPATH . 'public/assets/profile', $imageName);

            $data = [
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'image'    => $imageName,
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                
            ];
            $this->user->insert($data);
                
            return redirect()->to('login')->with('message', 'Registration is successful, please login!');
        }
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->to(site_url('login'));
    }
}
