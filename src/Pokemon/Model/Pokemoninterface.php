<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 06/01/15
 * Time: 15:09
 */

namespace Cartman\Init\Pokemon\Model;


interface PokemonInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     *
     * @return PokemonInterface
     */
    public function setName($name);

    /**
     * @return int
     */
    public function getHP();

    /**
     * @param int $hp
     *
     * @return PokemonInterface
     */
    public function setHP($hp);

    /**
     * @param int $hp
     *
     * @return int
     */
    public function addHP($hp);

    /**
     * @param int $hp
     *
     * @return int
     */
    public function removeHP($hp);

    /**
     * @return int
     */
    public function getType();

    /**
     * @param int $type
     *
     * @return PokemonInterface
     */
    public function setType($type);

    /**
     * @var int
     */
    private $type_atk;

} 