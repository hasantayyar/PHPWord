<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    public function __construct ($application)
    {
        parent::__construct($application);
    }

    protected function _initConfig ()
    {
        $config = new Zend_Config($this->getOptions());
        if (! Zend_Registry::isRegistered("config"))
        {
            Zend_Registry::set("config", $config);
        }
        return $config;
    }

    protected function _initPhPDefaultTimezone ()
    {
        $this->_bootstrap('config');
        $config = Zend_Registry::get("config");
        date_default_timezone_set($config->phpSettings->timezone);
    }

    protected function _initDoctype ()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('HTML5');
    }
}

