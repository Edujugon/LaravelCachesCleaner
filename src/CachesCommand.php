<?php

namespace Edujugon\LaravelCachesCleaner;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CachesCommand extends Command
{

    /**
     * List of commands to be executed
     *
     * @var array
     */
    private $commandList = [
        'clear-compiled',
        'cache:clear',
        'config:cache',
        'config:clear',
        'view:clear'
    ];

    public function configure()
    {
        $this->setName('cache')
            ->setDescription('Run php artisan' . Helper::stringfyArray($this->commandList));

    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

        foreach ($this->commandList as $command)
        {
            //Clean exec output
            $execOutput = '';

            exec(Helper::phpArtisanCommand($command),$execOutput);

            //Show output
            $output->writeln($execOutput);
            $output->writeln(MessageBuilder::info("$command command executed"));
        }
    }

}