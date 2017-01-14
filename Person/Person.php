<?php


namespace Person;

use Data\DataStructureReaderInterface;

class Person
{
    /**
     * @var DataStructureReaderInterface
     */
    private $dataStructure;

    /**
     * Person constructor.
     * @param DataStructureReaderInterface|null $dataStructure
     */
    public function __construct(DataStructureReaderInterface $dataStructure = null)
    {
        $this->dataStructure = $dataStructure;
    }

    /**
     * @param DataStructureReaderInterface $dataStructure
     */
    public function setDataStructure(DataStructureReaderInterface $dataStructure)
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
