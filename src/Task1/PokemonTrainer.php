<?php

namespace BinaryStudioAcademy\Task1;

class PokemonTrainer
{
    public function pick(Pokemon $pokemon): string
    {
        //TODO: implement
		$pokemonName = explode('\\', get_class($pokemon));
        return array_pop($pokemonName) . ': ' . $pokemon->battleCry();
    }
}
