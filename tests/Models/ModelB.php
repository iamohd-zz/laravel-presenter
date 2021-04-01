<?php

namespace Smartisan\Presenter\Tests\Models;

use Smartisan\Presenter\HasPresenter;

class ModelB
{
    use HasPresenter;

    protected $presenter = 'DoesNotExists';
}
