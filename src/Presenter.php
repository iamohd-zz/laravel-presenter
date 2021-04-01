<?php

namespace Smartisan\Presenter;

use Illuminate\Support\Str;
use Smartisan\Presenter\Exceptions\PresenterException;

abstract class Presenter
{
    /**
     * The presented model instance.
     *
     * @var mixed
     */
    protected $model;

    /**
     * Create a new presenter instance.
     *
     * @param mixed $model
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Determine which presenter method to call based on accessed presenter property.
     *
     * @param string $property
     * @return mixed
     * @throws \Smartisan\Presenter\Exceptions\PresenterException
     */
    public function __get($property)
    {
        $property = Str::camel($property);

        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

        throw new PresenterException("Presenter method $property does not exists");
    }
}
