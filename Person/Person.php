<?php


namespace Person;

use Data\DataStructure;

class Person
{
    /**
     * @var DataStructure
     */
    private $dataStructure;

    /**
     * Person constructor.
     * @param DataStructure $dataStructure
     */
    public function __construct(DataStructure $dataStructure)
    {
        $this->dataStructure = $dataStructure;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->dataStructure->getValue('person_name');
    }
}
