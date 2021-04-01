<?php

namespace Smartisan\Presenter\Commands;

use Illuminate\Console\GeneratorCommand;

class MakePresenterCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'make:presenter {name}';

    /**
     * The console command description.
     *
     * @var string|null
     */
    public $description = 'Create a new Presenter class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Presenter';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../stubs/Presenter.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return config('presenter.namespace');
    }
}
