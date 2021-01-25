<?php

namespace App\Http\Controllers;

use PurePhp\BaseController;

class SiteController extends BaseController
{
    public function siteroot()
    {
        $this->render('siteroot');
    }
    
    public function info()
    {

    }
}

