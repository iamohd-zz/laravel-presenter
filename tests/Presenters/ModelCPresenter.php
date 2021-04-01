<?php

namespace Smartisan\Presenter\Tests\Presenters;

class ModelCPresenter extends \Smartisan\Presenter\Presenter
{
    public function fullName()
    {
        return $this->model->firstName . ' ' . $this->model->lastName;
    }
}
