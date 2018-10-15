<?php
/*
* Created by solutionDrive GmbH
*
* @copyright 2018 solutionDrive GmbH
*/

namespace sdEmotionsDeploymentShopware\Commands;

use Shopware\Commands\ShopwareCommand;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExportCommand extends ShopwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('sdemotionsdeployment:export')
            ->setDescription('Export a shoppingworld from the shopware backend.')
            ->addArgument(
                'emotionId',
                InputArgument::REQUIRED,
                'The emotionId of the shoppingworld (see s_emotion).'
            )
            ->setHelp('The <info>%command.name%</info> exports a shoppingworld from the shopware backend.'
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //@ToDo: Add export function here
    }
}
