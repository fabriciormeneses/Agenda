<?php

namespace Verzola\Agenda\Presenter;

use Verzola\Agenda\Collection\Contatos;

class JsonPresenter implements Presenter
{
    public function render(Contatos $contatos)
    {
        if (!count($contatos)) {
            return '[]';
        }

        $arrayContatos = [];
        foreach ($contatos as $contato) {
            $arrayContatos[] = [
                'nome' => $contato->getNome(),
                'telefone' => $contato->getTelefone()
            ];
        }

        return json_encode($arrayContatos);
    }
}
