<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    /**
     * Chama a view com o formulário de usuários
     *
     * @return void
     */
    public function create()
    {
        return view('form');
    }
    public function store()
    {
        $post = $this->request->getPost();
        // dd($post);
        $userModel = new UserModel();

        if (!empty($post['id'])) {
            if ($userModel->update($post['id'], $post)) {
                return redirect()->to('/home/mensagem')->with('mensagem', 'Dados Atualizados com Sucesso');
            }
        } else {
            if ($userModel->insert($post)) {
                return redirect()->to('/home/mensagem')->with('mensagem', 'Dados Inseridos com Sucesso');
            }
        }
    }

    /**
     * Chama a view com o formulário de edição
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id)
    {
        $userModel = new UserModel();
        return view('form', [
            'user' => $userModel->findById($id)
        ]);
    }

    /**
     * Apaga um registro pelo ID
     *
     * @param [type] $id
     * @return void
     */
    public function delete(string $id)
    {
        $userModel = new UserModel();

        if ($userModel->delete($id)) {
            return redirect()->to('/home/mensagem')->with('mensagem', 'Registro excluído com Sucesso');
        }
    }
}
