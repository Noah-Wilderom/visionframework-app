<?php

namespace App\Http\Controllers;

use Vision\Core\Request;
use Vision\Http\BaseController;

class TestController extends BaseController
{
    public function index(Request $request = null)
    {
        // Testing
        require_once root_path() . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'test.php';
    }
}
