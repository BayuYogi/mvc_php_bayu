<?php
class Controller {
    public function view($view, $data= []) //ini view function
    {
      require_once  '../app/views/'.$view . '.php';
      
   }
}