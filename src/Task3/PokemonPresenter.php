<?php

namespace BinaryStudioAcademy\Task3;

class PokemonPresenter
{
    private $pokemons;

    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    /**
     * Returns html-list (ul-li) of images (img)
     *
     * @return string
     */
    public function present(): string
    {
        //TODO: implement
        $pokemonList = '<ul>';
        foreach ($this->pokemons as $value) 
        {
            $pokemonList .= '<li><img src="' . $value->imageUrl() . '"></li>';
        }
        $pokemonList .= '</ul>';
        return $pokemonList;
    }
}
