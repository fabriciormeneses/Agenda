<?php

namespace Verzola\Agenda\Collection;

use Verzola\Agenda\Model\Contato;

class Contatos implements \Countable, \Iterator, \ArrayAccess
{
    protected $contatos = array();
    protected $position = 0;

    public function add(Contato $contato)
    {
        $this->contatos[] = $contato;
    }

    public function remove($key)
    {
        unset($this->contatos[$key]);
    }

    public function count()
    {
        return count($this->contatos);
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function current()
    {
        return $this->contatos[$this->position];
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->contatos[$this->position]);
    }

    public function offsetExists($offset)
    {
        return isset($this->contatos[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->contatos[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->contatos[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->contatos[$offset]);
    }
}
