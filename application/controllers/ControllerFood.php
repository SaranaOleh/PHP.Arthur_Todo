<?php

class ControllerFood extends Controller{
    public function action_index(){
        $view = new View("food");
        $view->useTemplate("templateFood");
        $view->title="food";
        $this->response($view);
    }

    public function action_soups(){
        $model = new ModelCategory();
        $view = new View("soups");
        $view->useTemplate("templateFood");
        $view->soups = $model->getAllFromCategory("soups");
        $this->response($view);
    }
    public function action_soupDetails(){
        $id= $this->getUriParam("id");
        $model = new ModelCategory();
        $soup = $model->getByIdFromCategory("soups",$id);
        if($soup===NULL) {$this->redirect404(); return;}
        $view = new View("soupsDetails");
        $view->useTemplate("templateFood");
        $view->soup = $soup;
        $this->response($view);
    }
    public function action_mains(){
        $model = new ModelCategory();
        $view = new View("mains");
        $view->useTemplate("templateFood");
        $view->mains = $model->getAllFromCategory("mains");
        $this->response($view);
    }
    public function action_mainsDetails(){
        $id= $this->getUriParam("id");
        $model = new ModelCategory();
        $main = $model->getByIdFromCategory("mains",$id);
        if($main===NULL) {$this->redirect404(); return;}
        $view = new View("mainsDetails");
        $view->useTemplate("templateFood");
        $view->main = $main;
        $this->response($view);
    }
    public function action_desserts(){
        $model = new ModelCategory();
        $view = new View("desserts");
        $view->useTemplate("templateFood");
        $view->desserts = $model->getAllFromCategory("desserts");
        $this->response($view);
    }
    public function action_dessertsDetails(){
        $id= $this->getUriParam("id");
        $model = new ModelCategory();
        $dessert = $model->getByIdFromCategory("desserts",$id);
        if($dessert===NULL) {$this->redirect404(); return;}
        $view = new View("dessertsDetails");
        $view->useTemplate("templateFood");
        $view->dessert = $dessert;
        $this->response($view);
    }
}