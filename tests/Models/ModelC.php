<?php

namespace Smartisan\Presenter\Tests\Models;

use Smartisan\Presenter\HasPresenter;
use Smartisan\Presenter\Tests\Presenters\ModelCPresenter;

class ModelC
{
    use HasPresenter;

    public $firstName = 'Mohammed';

    public $lastName = 'Isa';

    protected $presenter = ModelCPresenter::class;
}
