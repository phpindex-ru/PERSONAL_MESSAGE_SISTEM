<?php
include('models/model.php');
include('models/login.php');
include('models/create_conversation.php');
  class IndexController {
    
    public function index() {
      include('connection.php');
      if(isset($_POST['send'])) {
        $username =  $_POST['username'];
        $password =  $_POST['password'];
        $login = new UserLogin ($username, $password);
        $login->pdo = $pdo;
        $data = $login->getdata(); 
     } 


     
        require_once('views/pages/index.php');
     }
    
    public function home() {
    require_once('views/pages/index.php');
  }

  public function users() {
    include('connection.php');
    $users = new Conversations ();
    $users->pdo = $pdo;
    $user = $users->users();

    require_once('views/pages/users.php');
  }


  public function userpage() {
    include('connection.php');
    $user_id = $_GET['id'];
    $userpage = new Conversations ();
    $userpage->pdo = $pdo;
    $userinfo = $userpage->userpage($user_id);

    require_once('views/pages/userpage.php');
  }


  public function startconversation () {
    if(isset($_POST['submit'])) {
      include('connection.php');
      $user_one = $_SESSION['id'];
      $user_two = $_POST['id'];
      $user_ip = 111;
      $timestamp = 222;
      
      $mydata = new Create_Conversation ($user_one, $user_two, $user_ip, $timestamp);
      $mydata->pdo = $pdo;
      
      $v = $mydata -> mydata ();
      
      if(isset($v['0']['c_id'])) { 
          $v['0']['c_id'];
      } else {
          $v = $mydata -> insert ()->selectnewuser();
          $v['0']['c_id'];
      }
      $c_id = $v['0']['c_id'];
      echo $c_id;


      $messages = new Conversations ();
      $messages->pdo = $pdo;
      $allmessages = $messages->messages ($c_id);


    }
    require_once('views/pages/startconversation.php');
  }




public function sendmessage () {
  if(isset($_POST['create'])) {
    //print_r($_POST);
    include('connection.php');
    $data = new Conversations ();
    $data->pdo = $pdo;
  if(isset($_POST['message'])) {
    $message=$_POST['message'];
  } else {
    $message='';
  }
  $uid = $_SESSION['id'];
  $reply = $message;
  $ip = 111;
  $time = 222;
  $cid = $_POST['c_id'];
  $data ->insert_message($uid, $reply, $ip, $time, $cid);


  include('connection.php');
  $messages = new Conversations ();
  $messages->pdo = $pdo;
  $c_id = $_POST['c_id'];
  $allmessages = $messages->messages ($c_id);


  }
  require_once('views/pages/conversation.php');
}



public function conversation () {
  if(isset($_POST['create'])) {
    //print_r($_POST);
    include('connection.php');
    $data = new Conversations ();
    $data->pdo = $pdo;
  if(isset($_POST['message'])) {
    $message=$_POST['message'];
  } else {
    $message='';
  }
  $uid = $_SESSION['id'];
  $reply = $message;
  $ip = 111;
  $time = 222;
  $cid = $_POST['c_id'];
  $data ->insert_message($uid, $reply, $ip, $time, $cid);


  include('connection.php');
  $messages = new Conversations ();
  $messages->pdo = $pdo;
  $c_id = $_POST['c_id'];
  $allmessages = $messages->messages ($c_id);


  }


  include('connection.php');
  $messages = new Conversations ();
  $messages->pdo = $pdo;
  $c_id = $_GET['c_id'];
  $allmessages = $messages->messages ($c_id);
  require_once('views/pages/conversation.php');
}

    }
  
  
?>