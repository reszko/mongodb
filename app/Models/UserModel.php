<?php

namespace App\Models;

class UserModel
{
    private $mongoDB;
    public function __construct()
    {
        $this->mongoDB = (new \MongoDB\Client)->MongoDB->users;
    }

    /**
     * Retorna todos os registros
     *
     * @return void
     */
    public function getAll(): object
    {
        return $this->mongoDB->find();
    }

    /**
     * Retorna um objeto pelo seu MongoID
     *
     * @param [type] $id
     * @return object
     */
    public function findById($id): object
    {
        return $this->mongoDB->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);
    }

    /**
     * Insere um registro
     *
     * @param array $dados
     * @return void
     */
    public function insert(array $dados)
    {
        return $this->mongoDB->insertOne([
            'username' => $dados['username'],
            'email' => $dados['email'],
            'name' => $dados['name']
        ]);
    }

    /**
     * Atualiza os dados
     *
     * @param array $dados
     * @return void
     */
    public function update(string $id, array $dados)
    {
        return $this->mongoDB->updateOne(
            ['_id' => new \MongoDB\BSON\ObjectId($id)],
            [
                '$set' => [
                    'username' => $dados['username'],
                    'email' => $dados['email'],
                    'name' => $dados['name'],
                ]
            ]
        );
    }

    /**
     * Apaga um registro pelo MongoID
     */
    public function delete(string $id)
    {
        return $this->mongoDB->deleteOne(
            ['_id' => new \MongoDB\BSON\ObjectId($id)]
        );
    }
}
