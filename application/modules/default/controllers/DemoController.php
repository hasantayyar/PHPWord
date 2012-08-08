<?php

class Default_DemoController extends Zend_Controller_Action
{
    /**
     * An instance of phpword
     *
     * @var PHPWord
     */
    protected $_phpword;

    public function init ()
    {
        require_once (APPLICATION_BASE_PATH . '/library/PHPWord.php');
        $this->_phpword = new PHPWord();
        $this->view->phpword = $this->_phpword;
        
        /**
         * Document Properties
         */
        $properties = $this->_phpword->getProperties();
        $properties->setCreator('PHPWord Demo');
        $properties->setCompany('PHPWord Demo');
        $properties->setTitle('PHPWord Demo');
        $properties->setDescription('PHPWord Demo');
        $properties->setCategory('PHPWord Demo');
        $properties->setLastModifiedBy('PHPWord Demo');
        $properties->setCreated(time());
        $properties->setModified(time());
        $properties->setSubject('PHPWord Demo');
        $properties->setKeywords('PHPWord Demo');
        
        // H1 Style
        $this->_phpword->addTitleStyle(1, array (
                'size' => 16, 
                'color' => '000000', 
                'bold' => true 
        ), array (
                'borderBottomSize' => 1 
        ));
        // H2 Style #5881BC
        $this->_phpword->addTitleStyle(2, array (
                'size' => 12, 
                'color' => 'FFFFFF', 
                'bold' => true, 
                'italic' => true 
        ), array (
                'bgColor' => '000066' 
        ));
        // H3 Style #5881BC
        $this->_phpword->addTitleStyle(3, array (
                'size' => 10, 
                'color' => '000065', 
                'bold' => true 
        ), array (
                'spaceBefore' => 100, 
                'spaceAfter' => 100 
        ));
        
        $this->view->pageTitle = "Demos";
        
        $this->_helper->layout()->disableLayout();
    }

    public function indexAction ()
    {
        $this->_helper->layout()->enableLayout();
    }

    public function tablesAction ()
    {
    }
}

