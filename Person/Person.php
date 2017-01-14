<?php


namespace Person;

use Data\DataStructureReaderInterface;

class Person
{
    private $dataStructure;


    public function __construct(DataStructureReaderInterface $dataStructure = null)
    {

        $this->dataStructure = $dataStructure;

    }


    public function setDataStructure(DataStructureReaderInterface $dataStructure)
    {
        $this->dataStructure = $dataStructure;
    }



    public function name() : string
    {
        return $this->dataStructure->getValue('person_name');
    }
}