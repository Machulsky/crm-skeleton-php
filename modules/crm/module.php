<?php

namespace Modules\Crm;


class Module
{
  public $enabled = true;
  public $displayInMenu = false;
  public $menuDisplayName = "CRM";
  public $hasRoutes = false;

  function __construct(){
    //echo $this->menuDisplayName;
  }

}