<?php


namespace App;

class App {
  public $modules = [];
  public $router;
  public $path = "/crm";
  public function run ()
  {

    $this->router = new \Klein\Klein();


    $this->mountModules();
    
    $this->router->respond("GET", $this->path."/",function ($request) {
      return "Home";
  });
      
      $this->router->dispatch();
  }

  private function route()
  {
    

  }


  private function mountModules()
  {
    $dir = MODULES_DIR;
    $content = scandir($dir);
    foreach ($content as $key => $moduleDir){
      if($moduleDir == "." or $moduleDir == ".."){
        unset($content[$key]);
      }else{
        
        $module = "Modules\\".$moduleDir."\Module";
        
        $mod = $this->modules[$moduleDir] = new $module;
        
        if($mod->hasRoutes == true){
         $mod->loadRoutes($this->router);
        }
      }

    }
  }
}