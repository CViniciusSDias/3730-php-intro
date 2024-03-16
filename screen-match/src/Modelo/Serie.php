<?php

class Serie extends Titulo
{
    public function __construct(
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporadas,
        public readonly int $minutosPorEpidio
    ) {
    }
}
