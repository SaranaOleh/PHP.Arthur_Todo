<?php
    defined("DOCROOT") or die("NO DIRECT ACCESS");
    include CLASS_PATH."config.php";
    include CLASS_PATH."Router.php";
    include CLASS_PATH."Controller.php";
    include CLASS_PATH."View.php";
    include CLASS_PATH."Model.php";
    include CLASS_PATH."Entity.php";
    include CLASS_PATH."Autoloader.php";

    spl_autoload_register("Autoloader::load");

    $router = Router::instance();

    $router->addRoute(new Route("",[
        "controller"=>"main",
        "action"=>"index"
    ]));

    $router->addRoute(new Route("login",[
        "controller"=>"main",
        "action"=>"login"
    ]));

    $router->addRoute(new Route("register",[
        "controller"=>"main",
        "action"=>"register"
    ]));

    $router->addRoute(new Route("regaction",[
        "controller"=>"auth",
        "action"=>"register"
    ]));

    $router->addRoute(new Route("loginaction",[
        "controller"=>"auth",
        "action"=>"login"
    ]));

    $router->addRoute(new Route("logout",[
        "controller"=>"auth",
        "action"=>"logout"
    ]));

    $router->addRoute(new Route("logoutall",[
        "controller"=>"auth",
        "action"=>"logoutall"
    ]));

    $router->addRoute(new Route("note/{id}",[
        "controller"=>"note",
        "action"=>"delete"
    ]));

    $router->addRoute(new Route("add",[
        "controller"=>"note",
        "action"=>"add"
    ]));

    try{
            $router->run();
        }catch (RouterException $e){
    //        $router->redirect404();
            echo $e->getMessage();
        }


