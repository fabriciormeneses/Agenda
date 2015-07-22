<?php

namespace VerzolaTest\Agenda\Collection;

use Verzola\Agenda\Collection\Contatos;

class ContatosTest extends \PHPUnit_Framework_TestCase
{
    private $contatos;

    public function setUp()
    {
        $this->contatos = new Contatos();

        $contato = $this->getMockBuilder('Verzola\Agenda\Model\Contato')
            ->setMethods(['getNome'])
            ->getMock();

        $this->contatos->add($contato);
        $this->contatos->add($contato);
        $this->contatos->add($contato);
    }

    public function test_countable()
    {
        $this->assertEquals(3, count($this->contatos));
    }

    public function test_iterator()
    {
        $contatos = array();

        foreach ($this->contatos as $contato) {
            $contatos[] = $contato;
        }

        $this->assertEquals(3, count($contatos));
    }

    public function test_array_access()
    {
        $this->assertInstanceOf('Verzola\Agenda\Model\Contato', $this->contatos[0]);
    }

    public function test_delete_key()
    {
        $this->contatos->remove(0);

        $this->assertEquals(2, $this->contatos->count());
    }
}
