<?php
namespace mvc\libraries;

class Core
{
    protected $currentController='Pages';
    protected $currentMethod='index';
    protected $params=[];

    public function __construct()
    {
        $url=$this->getUrl();
        //print_r($url);
        if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
            //Will set new controller
            $this->currentController=ucwords($url[0]);
            unset($url[0]);
        }
        //Require the controller
        require_once '../app/controllers/'.$this->currentController.'.php';
        $controllerclass = '\\mvc\\libraries\\'.$this->currentController;
        $this->currentController=new $controllerclass;
        //print_r($this->currentController);
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod=$url[1];
                unset($url[1]);
            }
        }

        //Get paras
        $this->params= $url ? array_values($url) : [];
        // print_r($this->currentController);
        // print_r($this->currentMethod);
        // print_r($this->params);
        //Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url=rtrim($_GET['url'], '/');
            //Allows you to filter variables as string/numbers
            $url=filter_var($url, FILTER_SANITIZE_URL);
            //Breaking into array
            $url=explode('/', $url);
            return $url;
        }
    }
}
