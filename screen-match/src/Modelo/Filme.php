<?php

class Filme extends Titulo
{
    public function __construct(
        public readonly int $duracaoEmMinutos,
    ) {
    }
}
