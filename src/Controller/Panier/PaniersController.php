<?php
namespace App\Controller\Panier;

use App\Controller\AppController;

class PaniersController extends AppController
{


    public function index($user_id = null)
    {
        $this->set('user_id', $user_id);
    }
}