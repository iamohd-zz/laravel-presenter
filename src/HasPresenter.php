<?php

namespace Smartisan\Presenter;

use Smartisan\Presenter\Exceptions\PresenterException;

trait HasPresenter
{
    /**
     * The model presenter instance.
     *
     * @var mixed
     */
    protected $presenterInstance;

    /**
     * Get model presenter instance.
     *
     * @return mixed
     * @throws \Smartisan\Presenter\Exceptions\PresenterException
     */
    public function present()
    {
        if (! isset($this->presenter)) {
            throw new PresenterException('$presenter property is missing.');
        }

        if (! class_exists($this->presenter)) {
            throw new PresenterException('Presenter class is missing.');
        }

        if (! $this->presenterInstance) {
            $this->presenterInstance = new $this->presenter($this);
        }

        return $this->presenterInstance;
    }
}
