<?php
namespace App\Controller;
class ErrorController extends AbstractController
{

    public function error404()
    {
        $this->render('error/error404');
    }
}