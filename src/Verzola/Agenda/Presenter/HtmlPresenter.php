<?php

namespace Verzola\Agenda\Presenter;

use Verzola\Agenda\Collection\Contatos;

class HtmlPresenter implements Presenter
{
    public function render(Contatos $contatos)
    {
        if (!count($contatos)) {
            return;
        }

        $html = '<ul>';
        foreach ($contatos as $contato) {
            $html .= "<li>{$contato->getNome()} - {$contato->getTelefone()}</li>";
        }
        $html .= '</ul>';

        return $html;
    }
}
