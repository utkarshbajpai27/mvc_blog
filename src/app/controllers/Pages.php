<?php
namespace mvc\libraries;

class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel=$this->model('User');
    }

    public function index()
    {
        //echo "home page testing stage";
        $this->view('pages/index');
        $users=$this->userModel->getUser();
        //print_r($users);
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function login()
    {
        $this->view('pages/admin/signIn');
    }

    public function signUp()
    {
        $this->view('pages/admin/signUp');
    }
    public function posts()
    {
        $this->view('pages/blogs');
    }

    public function dashboard()
    {
        $data=['email'=>$_POST['email'],
        'password'=>$_POST['password'],
        'emailError'=>'',
        'passwordError'=>''];
        if (empty($data['email'])) {
            $data['emailError']='Please enter a email';
        }
        if (empty($data['passwordError'])) {
            $data['emailError']='Please enter a password';
        }
            $userInfo=$this->userModel->login($data);
        if ($userInfo) {
            $this->createUserSession($userInfo);
            //print_r($_SESSION);
            $this->view('pages/blogs');
        } else {
            echo "you dont exists";
        }
    }

    public function databaseEntry()
    {
        $data=['userName'=>$_POST['username'],
        'firstName'=>$_POST['first'],
        'lastName'=>$_POST['last'],
        'email'=>$_POST['email'],
        'password'=>$_POST['pass']];
        if ($this->userModel->register($data)) {
            $this->view('pages/register', $data);
        } else {
            die("Something went wrong retry");
        }
    }

    public function createUserSession($userInfo)
    {
        session_start();
        if (!$_SESSION['user']) {
            $_SESSION['user']=array();
        }
        $_SESSION['userId']=$userInfo->UserID;
        $_SESSION['username']=$userInfo->UserName;
        $_SESSION['email']=$userInfo->Email;
    }
}
