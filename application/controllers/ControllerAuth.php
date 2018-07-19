<?php

class ControllerAuth extends Controller{

    public function action_register(){
        try{
            $login = @$_POST["login"];
            $pass = @$_POST["pass"];
            if(empty($login) || empty($pass)) throw new Exception("data invalid");
            ModuleAuth::instance()->register($login,$pass);
            $this->redirect("login");
        } catch (Exception $e){
            $this->response($e->getMessage());
        }
    }

    public function action_login(){
        try{
            $long = isset($_POST["long"]);
            $login = @$_POST["login"];
            $pass = @$_POST["pass"];
            if(empty($login) || empty($pass)) throw new Exception("data invalid");
            ModuleAuth::instance()->login($login,$pass,$long);
            $this->redirect(URLROOT);
        } catch (Exception $e){
            $this->response($e->getMessage());
        }
    }

    public function action_logout(){
        ModuleAuth::instance()->logout();
        $this->redirect(URLROOT);
    }

    public function action_logoutall(){
        ModuleAuth::instance()->logout(true);
        $this->redirect(URLROOT);
    }
}