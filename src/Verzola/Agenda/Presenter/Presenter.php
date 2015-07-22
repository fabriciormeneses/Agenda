<?php

namespace Verzola\Agenda\Presenter;

use Verzola\Agenda\Collection\Contatos;

interface Presenter
{
	public function render(Contatos $contatos);
}
