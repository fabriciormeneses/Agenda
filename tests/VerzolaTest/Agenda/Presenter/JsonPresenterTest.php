<?php

namespace DojoTest\Agenda\Presenter;

use Verzola\Agenda\Presenter\JsonPresenter;
use Verzola\Agenda\Collection\Contatos;
use Verzola\Agenda\Model\Contato;

class JsonPresenterTest extends \PHPUnit_Framework_TestCase
{
    public function test_renderiza_em_json()
    {
        $presenter = new JsonPresenter();

        $contatos = new Contatos();

        $contatos->add(new Contato([
            'nome' => 'Gustavo Verzola',
            'telefone' => 987757080
        ]));

        $contatos->add(new Contato([
            'nome' => 'Fabricio Meneses',
            'telefone' => 994961334
        ]));

        $actualJson = $presenter->render($contatos);

        $expectedJson = '[{"nome":"Gustavo Verzola","telefone":987757080},{"nome":"Fabricio Meneses","telefone":994961334}]';

        $this->assertEquals(
            $expectedJson,
            $actualJson
        );
    }

    public function test_renderiza_string_vazia_se_collection_estiver_vazia()
    {
        $presenter = new JsonPresenter();

        $contatos = new Contatos();

        $actualHtml = $presenter->render($contatos);

        $this->assertEquals('[]', $presenter->render($contatos));
    }
}
