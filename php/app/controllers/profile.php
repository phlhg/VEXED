<?php

    namespace App\Controllers;

    class Profile extends \Core\Controller {

        public function index($_URL){
            $this->client->authenticate();
            $this->view("profile/index");
            $profile = \App\Models\Account\User::getByName($_URL["username"]);
        
            $this->view->meta->title = $profile->displayName;
            $this->view->meta->description = $profile->description;
            $this->view->v->p_site = false;
            $this->view->v->profile = $profile;
        }

        public function switch($_URL){
            $this->client->authenticate();
            $profile = \App\Models\Account\User::getByName($_URL["username"]);
            if(!isset($_URL["site"])){ return \App::$router->redirect("/p/".$_URL["username"]."/"); }
            switch($_URL["site"]){
                case "followers":
                    $this->followers($profile);
                    break;
                case "subscriptions":
                    $this->subscriptions($profile);
                    break;
                default:
                    return \App::$router->redirect("/p/".$_URL["username"]."/");
            }
            $this->view->meta->title = $profile->displayName;
            $this->view->meta->description = $profile->description;
            $this->view->v->p_site = true;
            $this->view->v->profile = $profile;
        }

        /* SITES */

        private function followers($profile){
            $this->view("profile/followers");
            $this->view->v->p_site_title = "Abonnenten";
        }

        private function subscriptions($profile){
            $this->view("profile/subscriptions");
            $this->view->v->p_site_title = "Abonniert";
        }

        /* IMAGES */

        public function pb($_URL){
            $this->client->authenticate();
            $this->view("out");
            $this->view->setTemplate("none");
            $id = $_URL["id"];
            if(!isset($id) && is_int($id)){ $id = 0; }
            $folder = $_SERVER["DOCUMENT_ROOT"].'php/files/img/profile/pb/';
            $filetype = false;
            $filetypes = ["jpg","png","gif"];
            foreach($filetypes as $type){
                if(is_readable($folder.$id.'.'.$type)){
                    $filetype = $type;
                }
            }

            if($filetype !== false){
                $this->view->setFormat("image/".$filetype);
                $this->view->v->content = file_get_contents($folder.$id.'.'.$filetype);
            } else {
                $this->view->setFormat("image/jpg");
                $this->view->v->content = file_get_contents($folder."0.jpg");
            }
        }

        public function pbg($_URL){
            $this->client->authenticate();
            $this->view("out");
            $this->view->setTemplate("none");
            $id = $_URL["id"];
            if(!isset($id) && is_int($id)){ $id = 0; }
            $folder = $_SERVER["DOCUMENT_ROOT"].'php/files/img/profile/bg/';
            $filetype = false;
            $filetypes = ["jpg","png"];
            foreach($filetypes as $type){
                if(is_readable($folder.$id.'.'.$type)){
                    $filetype = $type;
                }
            }

            if($filetype !== false){
                $this->view->setFormat("image/".$filetype);
                $this->view->v->content = file_get_contents($folder.$id.'.'.$filetype);
            } else {
                $this->view->setFormat("image/jpg");
                $this->view->v->content = file_get_contents($folder."0.jpg");
            }
        }
    }

?>