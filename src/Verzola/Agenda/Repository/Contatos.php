<?php

namespace Verzola\Agenda\Repository;

use Verzola\Agenda\Collection\Contatos as ContatosCollection;
use Verzola\Agenda\Model\Contato;

class Contatos
{
    public function all()
    {
        $collection = new ContatosCollection();

        $collection->add(new Contato([
            'nome' => 'Gustavo Verzola',
            'email' => 'gustavo@verzola.net',
            'telefone' => 987757080
        ]));

        $collection->add(new Contato([
            'nome' => 'Fabricio Meneses',
            'email' => 'fabricio.meneses@catho.com',
            'telefone' => 994961334
        ]));

        $collection->add(new Contato([
            'nome' => 'Jurandir Dacol',
            'email' => 'jurandir.dacol@catho.com',
            'telefone' => 991507162
        ]));

        return $collection;
    }
}
