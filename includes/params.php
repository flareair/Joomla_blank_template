<?php
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$doc->addScript('templates/'.$this->template.'/production/production.js');
$doc->addStyleSheet('templates/'.$this->template.'/production/production.css');

$this->setGenerator(null);

?>