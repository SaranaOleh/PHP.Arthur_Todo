<?php
class ControllerMain extends Controller
{
    public function action_index(){
        $model = new ModelImages();
        $view = new View("main");
        $view->is_auth = ModuleAuth::instance()->isAuth();
        if($view->is_auth){
            $view->user = ModuleAuth::instance()->getUser();
            $view->admin = ModuleAuth::instance()->hasRole("admin");
            $view->notes = $model->getAllById(ModuleAuth::instance()->getUserId());
        }
        $view->URLROOT = URLROOT;
        $this->response($view);
    }

    public function action_login(){
        $view = new View("login");
        $view->useTemplate();
        $this->response($view);
    }

    public function action_register(){
        $view = new View("register");
        $view->useTemplate();
        $this->response($view);
    }

    public function action_logout(){

    }

}