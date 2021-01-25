<?php

namespace PurePhp;

class BaseController
{
    protected $viewsPath = __DIR__ . '/../app/Http/Views/';

    public function render(string $view, array $params)
    {
        extract($params, EXTR_SKIP);
        require $this->viewsPath . $view;
    }
    
    public function asJson($arrObj)
    {
        echo json_encode($arrObj, JSON_UNESCAPED_UNICODE);
    }
}

