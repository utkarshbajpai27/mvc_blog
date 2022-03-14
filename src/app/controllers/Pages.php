<?php
namespace mvc\libraries;

class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel=$this->model('User');
        $this->postModel=$this->model('Posts');
    }

    public function index()
    {
        $this->view('pages/index');
        $users=$this->userModel->getUser();
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
        $this->view('pages/blog/blogs');
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
            $data=$this->postModel->getPosts();
            $this->view('pages/blog/blogs', $data);
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
        $_SESSION['userId']=$userInfo->UserID;
        $_SESSION['username']=$userInfo->UserName;
        $_SESSION['email']=$userInfo->Email;
    }

    public function writeBlog()
    {
        $this->view('pages/blog/writeBlog');
    }

    public function postBlog()
    {
        session_start();
        $userId=$_SESSION['userId'];
        $title=$_POST['blogTitle'];
        $blogImageArray=$_FILES['fileToUpload'];
        $category=$_POST['category'];
        $tags=$_POST['tags'];
        $description=$_POST['blogDescription'];
        $data=['title'=>$title,'image'=>$blogImageArray['name'],'category'=>$category,
        'tags'=>$tags,'description'=>$description,'user'=>$userId];
        if ($this->postModel->postBlog($data)) {
            $this->view('pages/blog/blogs');
        } else {
            die("Something went wrong retry");
        }
    }

    public function test()
    {
        $this->view('pages/test');
    }

    public function testresult()
    {
        print_r($_POST);
        print_r($_FILES);
    }
}
