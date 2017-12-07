<?php

require_once 'C:/xampp/htdocs/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
      sfWidgetFormSchema::setDefaultFormFormatterName('Deflist');
      $this->enablePlugins('sfDoctrinePlugin','sfTCPDFPlugin');
  }
}
