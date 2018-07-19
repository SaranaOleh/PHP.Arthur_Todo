<?php

class ControllerCats extends Controller{
    public function action_index(){
        $model = new ModelImages();
        $view = new View("cats");
        $view->useTemplate("templateCats");
        $view->title="cats";
        $view->cats = $model->getAll();
        $this->response($view);
    }

    public function action_details(){
        $cats_controller = new ControllerCats();
        $cats_controller->action_index();

        $id= $this->getUriParam("id");
        $model = new ModelImages();
        $cat = $model->getById($id);
        if($cat === NULL || $cat->id === NULL){
            $this->redirect404();
            return;
        }
        $view = new View("details");
        $view->useTemplate("templateCats");
        $view->kotiki = $cats_controller->getResponse();
        $view->title = "datails ".$cat->name;
        $view->cat = $cat;


        $this->response($view);
    }

    public function action_addcat(){
        $model = new ModelImages();
        $model->addImage(new \Entity\Image($_POST["name"],$_POST["url"]));
        $this->redirect($_SERVER["HTTP_REFERER"]);
    }
}