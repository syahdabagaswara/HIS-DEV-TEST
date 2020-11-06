<?php

class Patient extends \Phalcon\Mvc\Model
{

    /**
     *
     * @Primary
     * @Identity
     * @Column(type="integer", nullable=false)
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $gender;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $nik;

    /**
     *
     * @var string
     */
    public $no_hp;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $religion;

    /**
     *
     * @var string
     */
    public $education;

    /**
     *
     * @var string
     */
    public $blood;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("his");
        $this->setSource("patient");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Patient[]|Patient|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Patient|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
