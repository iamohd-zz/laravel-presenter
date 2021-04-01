<?php

namespace Smartisan\Presenter\Tests;

use Smartisan\Presenter\Exceptions\PresenterException;
use Smartisan\Presenter\Tests\Models\ModelA;
use Smartisan\Presenter\Tests\Models\ModelB;
use Smartisan\Presenter\Tests\Models\ModelC;
use Smartisan\Presenter\Tests\Presenters\ModelCPresenter;

class PresenterTest extends TestCase
{
    /** @test */
    public function it_throws_an_exception_when_presenter_property_is_missing()
    {
        $model = new ModelA();

        $this->expectException(PresenterException::class);

        $model->present()->attribute;
    }

    /** @test */
    public function it_throws_an_exception_when_presenter_class_is_missing()
    {
        $model = new ModelB();

        $this->expectException(PresenterException::class);

        $model->present()->attribute;
    }

    /** @test */
    public function it_throws_an_exception_when_presenter_method_is_missing()
    {
        $model = new ModelC();

        $this->expectException(PresenterException::class);

        $model->present()->attribute;
    }

    /** @test */
    public function it_retrieves_the_correct_presenter_class()
    {
        $model = new ModelC();

        $this->assertSame(ModelCPresenter::class, get_class($model->present()));
    }

    /** @test */
    public function it_can_present_camel_case_properties()
    {
        $model = new ModelC();

        $this->assertSame('Mohammed Isa', $model->present()->fullName);
    }

    /** @test */
    public function it_can_present_snake_case_properties()
    {
        $model = new ModelC();

        $this->assertSame('Mohammed Isa', $model->present()->full_name);
    }
}
