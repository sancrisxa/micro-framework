<?php

namespace Core;

abstract class BaseController
{
    
    private $viewPath;
    private $layoutPath;
    protected $view;
    protected $errors;
    protected $inputs;
    protected $success;
    private $pageTitle = null;

    public function __construct()
    {
        $this->view = new \stdClass;
        
        if (Session::get('errors')) {

            $this->errors = Session::get('errors');
            Session::destroy('errors');

        }

        if (Session::get('inputs')) {

            $this->inputs = Session::get('inputs');
            Session::destroy('inputs');

        }

        if (Session::get('success')) {

            $this->success = Session::get('success');
            Session::destroy('success');

        }
    }

    protected function renderView($viewPath, $layoutPath = null)
    {

        $this->viewPath = $viewPath;
        $this->layoutPath = $layoutPath;
    
        if ($layoutPath) {

            return $this->layout();

        } else {

            return $this->content();

        }

    }

    protected function content()
    {

        if (file_exists(__DIR__ . "/../app/Views/{$this->viewPath}.phtml")) {

            return require_once __DIR__ . "/../app/Views/{$this->viewPath}.phtml";
        } else {

            echo "Error: View path not found!";

        }
    }

    protected function layout()
    {

        if (file_exists(__DIR__ . "/../app/Views/{$this->layoutPath}.phtml")) {

            return require_once __DIR__ . "/../app/Views/{$this->layoutPath}.phtml";

        } else {

            echo "Error: View layout path not found!";

        }
    }

    protected function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

    }

    protected function getPageTitle($separator = null)
    {
        if ($separator) {

            return $this->pageTitle . " " . $separator . " ";
        } else {

            return $this->pageTitle;
        }
    }

}