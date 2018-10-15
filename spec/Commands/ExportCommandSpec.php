<?php
declare(strict_types=1);

/*
 * Created by solutionDrive GmbH
 *
 * @copyright 2018 solutionDrive GmbH
 */

namespace spec\sdEmotionsDeploymentShopware\Commands;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use sdEmotionsDeploymentShopware\Commands\ExportCommand;

class ExportCommandSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(ExportCommand::class);
    }
}
