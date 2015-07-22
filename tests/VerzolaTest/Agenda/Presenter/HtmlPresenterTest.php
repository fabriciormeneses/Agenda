<?php

namespace VerzolaTest\Agenda\Presenter;

use Verzola\Agenda\Presenter\HtmlPresenter;
use Verzola\Agenda\Collection\Contatos;
use Verzola\Agenda\Model\Contato;

class HtmlPresenterTest extends \PHPUnit_Framework_TestCase
{
    public function test_renderiza_em_html()
    {
        $presenter = new HtmlPresenter();

        $contatos = new Contatos();

        $contatos->add(new Contato([
            'nome' => 'Gustavo Verzola',
            'telefone' => 987757080
        ]));

        $contatos->add(new Contato([
            'nome' => 'Fabricio Meneses',
            'telefone' => 994961334
        ]));

        $actualHtml = $presenter->render($contatos);

        $expectedHtml = '<ul><li>Gustavo Verzola - 987757080</li><li>Fabricio Meneses - 994961334</li></ul>';

        $this->assertEquals(
            $expectedHtml,
            $actualHtml
        );
    }

    public function test_renderiza_string_vazia_se_collection_estiver_vazia()
    {
        $presenter = new HtmlPresenter();

        $contatos = new Contatos();

        $actualHtml = $presenter->render($contatos);

        $this->assertEquals('', $presenter->render($contatos));
    }
}
