<?php

namespace Data;

use \Exception;

class DataStructure implements DataStructureReaderInterface
{
    /**
     * Represents plain data organized as key value array
     * @var array
     */
    private $plainDataStructure;

    public function __construct($data = [])
    {
        $this->plainDataStructure = $data;
    }

    /**
     * Returns the value for the given name
     * @param string $name
     * @return null|mixed
     * @throws \Exception
     */
    public function getValue(string $name)
    {
        if (!array_key_exists($name, $this->plainDataStructure)) {
            throw new Exception('Key ' . $name . ' can not be found');
        }
        return $this->plainDataStructure[$name];
    }
}
