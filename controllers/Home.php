<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**Home Controller
*
* Views :
* home/main_page.php
* home/login.php
* home/logout.php
* home/create_account.php
* home/create_account_visitor.php
* home/create_account_dancer.php
* home/create_account_school_agent.php
*
* Models :
*
**/

class Home extends CI_Controller{
    
     public function __construct()
     {
         parent::__construct();
     }

    
    // http://www.tourdance.com/home.php/home
    // Home page
    public function index(){
        $this->load->view('home/main_page');
    }
    
    //http://www.tourdance.com/home.php/login
    // Login page
    public function login(){
        $this->load->view('home/login');
    }
    
    //http://www.tourdance.com/home.php/logout
    // Logout page
    public function logout(){
        $this->load->view('home/logout');
    }
    
    //http://www.tourdance.com/home.php/create_account
    // Create Account page
    public function createAccount(){
        $this->load->view('home/create_account');
        
    }

    public function createAccountVisitor(){
         $this->load->view('home/create_account_visitor');
    }

    public function createAccountDancer(){
         $this->load->view('home/create_account_dancer');
    }

    public function createAccountSchoolAgent(){
         $this->load->view('create_account_school_agent');
    }

    public function createAccountVisitorResult(){
         $this->load->model('home_model');
         if (isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['mail_address']))
         {
             if ($_POST['password1']===$_POST['password2']){
                $data['user'] = $this->home_model->getDataUser();
                $lastItem = end(array_keys($data));
                $cryptPassword = $this->encrypt($_POST['password1']);
                foreach ($data['user'] as $user){
                    if($user->username===$_POST['username'] || $user->password===$cryptPassword || $user->mail_address===$_POST['mail_address']) break;
                    if ($user == $lastItem){
                        $this->home_model->addVisitor();
                        $this->load->view('home/login');
                    }
                }
             }else{
                 echo "The passwords doesn't match";
             }
         }else{
             echo 'Please fill all the gaps';
         }
    }

    function loginResult(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(existUser($username,$password)){
                $this->setCookieLogin($username);
                $this->load->view($this->index());
            }else{
                echo '<p> Wrong username or password </p>';
            }
        }else {
            echo '<p> Please enter your username and your password </p>';
        }
    }

    public function existUser($user,$passw){
        $this->load->model('home_model');
        $user_array = $this->home_model->getDataUser();
        foreach ($user_array as $element){
            if($user !== $element->username || $passw !== $element->$password) {
                return true;
            }
        }
        return false;
    }

    function contacts(){
         $this->load->view('home/contacts');
    }

    function setCookieLogin($id){
         $cookie = array(
             'login'.$id,
             'password',
             '3600'
         );
         set_cookie($cookie);
    }

    function delCookie($nameCookie){
         delete_cookie($nameCookie);
         $this->index();
    }

    function encrypt($pure_string) {
        return password_hash($pure_string,$_PASSWORD_ARGON2I);
    }

    function decrypt($pure_string,$password){
         return ($this->encrypt($pure_string) === $password);
    }
}