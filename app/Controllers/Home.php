<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $usersModel = new UserModel();

        // //getInsertedId()
        // //getModifiedCount()
        // //getDeletedCount()
        // d($rq->getDeletedCount());

        return view('home', [
            'total' => $usersModel->getAll()->toArray(),
            'users' =>  $usersModel->getAll()
        ]);
    }
    /**
     * Chama uma view de mensagens
     *
     * @return void
     */
    public function mensagem()
    {
        return view('mensagem', [
            'mensagem' => session()->mensagem
        ]);
    }
}
