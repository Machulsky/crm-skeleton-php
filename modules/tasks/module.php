<?php

namespace Modules\Tasks;


class Module
{
  public $enabled = true;
  public $displayInMenu = false;
  public $menuDisplayName = "Задачи";
  public $hasRoutes = true;
  function __construct(){
    //echo $this->menuDisplayName;
  }

  function loadRoutes($router)
  {
    $router->respond('GET', "/crm/tasks", function(){return "Tasks";});
  }

}