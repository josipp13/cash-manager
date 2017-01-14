<?php

namespace Factory;

interface CreateObjectInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public static function create(array $data);
}
