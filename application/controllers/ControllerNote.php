<?php

class ControllerNote extends Controller{

    public function action_delete(){
        try{
            $id = $this->getUriParam("id");
            $model = new ModelImages();
            $model->deleteNote($id);
            $this->redirect(URLROOT);
        } catch (Exception $e){
            $this->response($e->getMessage());
        }
    }

    public function action_add(){

        try{
            $text = @$_POST["note"];
            $user = ModuleAuth::instance()->getUserId();
            if(!empty($text) && !empty($user)){
                $model = new ModelImages();
                $model->addNote($text,$user);
                $this->redirect(URLROOT);
            }

        } catch (Exception $e){
            $this->response($e->getMessage());
        }
    }
}