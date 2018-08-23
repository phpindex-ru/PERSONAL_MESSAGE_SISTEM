<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'index':
      $controller = new IndexController();
    break;
    case 'usercontroller':
    $controller = new UsercontrollerController();
  break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'login', 'error', 'logout'],
                       'usercontroller' => ['logout'],
                       'index' => ['index', 'home', 'users', 'userpage', 'startconversation', 'sendmessage', 'conversation', 'mymessages'],
                       'registration' => ['index']
                      );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>