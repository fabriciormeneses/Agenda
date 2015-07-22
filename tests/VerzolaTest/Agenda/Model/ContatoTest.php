<?php

namespace VerzolaTest\Agenda\Model;

use Verzola\Agenda\Model\Contato;

class ContatoTest extends \PHPUnit_Framework_TestCase
{
    public function contatoProvider()
    {
        return [
            ['Gustavo Verzola', 'gustavo@verzola.net', 987757080],
            ['Fabricio Meneses', 'fabricio.meneses@catho.com', 994961334],
        ];
    }

    /**
     * @dataProvider contatoProvider
     */
    public function test_contato_é_populável($nome, $email, $telefone)
    {
        $contato = new Contato();

        $contato->setNome($nome);
        $contato->setEmail($email);
        $contato->setTelefone($telefone);

        $this->assertEquals($nome, $contato->getNome());
        $this->assertEquals($email, $contato->getEmail());
        $this->assertEquals($telefone, $contato->getTelefone());
    }

    /**
     * @dataProvider contatoProvider
     */
    public function test_contato_é_populável_via_construtor($nome, $email, $telefone)
    {
        $contato = new Contato([
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone
        ]);

        $this->assertEquals($nome, $contato->getNome());
        $this->assertEquals($email, $contato->getEmail());
        $this->assertEquals($telefone, $contato->getTelefone());
    }
}
