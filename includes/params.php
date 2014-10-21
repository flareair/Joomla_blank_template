<?php
defined('_JEXEC') or die;


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$sidecols = 0;

if ($this->countModules('side-left')) {
  $sidecols += 3;
}

if ($this->countModules('side-right')) {
  $sidecols += 3;
}

$sitename = $app->getCfg('sitename');

$doc->addScript('templates/'.$this->template.'/production/production.js');
$doc->addStyleSheet('templates/'.$this->template.'/production/production.css');

$this->setGenerator(null);

?>