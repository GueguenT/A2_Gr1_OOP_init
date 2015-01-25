<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 06/01/15
 * Time: 16:59
 */

namespace Cartman\Init\Pokemon;

use Cartman\Init\Pokemon\Model\PokemonModel;

class PokemonPlant extends PokemonModel
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setType(self::TYPE_PLANT);
    }


    /**
     *{@inheritdoc}
     */
    public function isTypeWeak($type)
    {
        return (self::TYPE_FIRE === $type) ? true : false;
    }

    /**
     *{@inheritdoc}
     */
    public function isTypeStrong($type)
    {
        return (self::TYPE_PLANT === $type) ? true : false;
    }
} 