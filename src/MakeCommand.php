<?php

namespace BigPictureMedical\Dusk;

use Laravel\Dusk\Console\MakeCommand as BaseMakeCommand;

class MakeCommand extends BaseMakeCommand
{
    protected function getStub()
    {
        return base_path('stubs/dusk/test.stub');
    }
}
