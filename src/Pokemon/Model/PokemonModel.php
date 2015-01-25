<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 06/01/15
 * Time: 15:18
 */

namespace Cartman\Init\Pokemon\Model;

/**
 * Class PokemonModel
 * @package Cartman\Init\Pokemon\Model
 *
 * @Entity
 * @Table(name="pokemon")
 */

class PokemonModel implements PokemonInterface
{

    /**
     * @var int
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="id", type="integer", )
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var int
     *
     * @Column(name="hp", type="integer")
     */
    private $hp;

    /**
     * @var int
     *
     * @Column(name="type", type="integer")
     */
    private $type;

    const TYPE_FIRE = 0;
    const TYPE_WATER = 1;
    const TYPE_PLANT= 2;



    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * {@inheritdoc}
     *
     * @return PokemonModel|int
     *
     * @throws \Exception
     */
    public function setName($name)
    {
        if (is_string($name))
            $this->name = $name;
        else
            throw new \Exception('Name must be a string');

        return $this;

    }

    /**
     * @inheritdoc
     */
    public function getHP()
    {
        return $this->hp;
    }

    /**
     * {inheritdoc}
     *
     * @return PokemonModel
     *
     * @throws \Exception
     */
    public function setHP($hp)
    {
        if (is_int($hp) && $hp > 0)
            $this->hp = $hp;
        else
            throw new \Exception('HP must be an int and > 0');

        return $this;

    }

    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function addHP($hp)
    {
        if (is_int($hp) && $hp > 0)
            $this->hp += $hp;
        else
            throw new \Exception('HP must be an int and > 0');
        return $this->hp;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function removeHP($hp)
    {
        if (is_int($hp) && $hp > 0)
            $this->hp = ($this->hp <= $hp) ? 0 : $this->hp - $hp;
        else
            throw new \Exception('HP must be an int and > 0');
        return $this->hp;
    }

    /**
     * @inheritdoc
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *{@inheritdoc}
     *
     * @return PokemonModel
     *
     * @throws \Exception
     */
    public function setType($type)
    {
        if (true === in_array($type, [
                self::TYPE_FIRE,
                self::TYPE_WATER,
                self::TYPE_PLANT,

            ]))
                $this->type = $type;
        else
            throw new \Exception('Type => Bad');
        return $this;
    }

    /**
     * @param $type
     *
     * @param $type_atk
     *
     * @return bool
     */
    public function isTypeWeak($type, $type_atk){
        if( $type_atk = $type::TYPE_FIRE and $type = $type::TYPE_PLANT)
            return true;
    }

    /**
     * @param $type
     *
     * @param $type_atk
     *
     * @return mixed
     */
    abstract public function isTypeStrong($type, $type_atk);

    public function getID(){
        return $this->id;
    }





}