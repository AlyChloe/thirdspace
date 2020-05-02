<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Contact extends AbstractController
{
    public function __default()
    {
        return $this->render('contact.html.twig');
    }
}
