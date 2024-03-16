<?php

class Filme {
    private array $notas;

    public function __construct(
        private string $nome,
        private int $anoLancamento,
        private string $genero
    ) {
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento(): int
    {
        return $this->anoLancamento;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function genero(): string
    {
        return $this->genero;
    }
}
