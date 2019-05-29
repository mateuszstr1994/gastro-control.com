<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends BaseController
{

    public function index()
    {
        echo 'Główna';
        die();
    }
}
