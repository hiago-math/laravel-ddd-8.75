<?php

namespace Infrastructure\Repositories;

abstract class AbstractRepository
{
    private $model;

    public function __construct(string  $model)
    {
        $this->model = instantiate_class($model);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }
}
