<?php

namespace Edujugon\LaravelCachesCleaner;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AllCommand extends Command
{

    /**
     * List of commands to be executed
     *
     * @var array
     */
    public $commandList = [];


    /**
     * AllCommand constructor.
     * @param array $commandList
     */
    function __construct(array $commandList)
    {
        parent::__construct();
        $this->commandList = $commandList;
    }


    public function configure()
    {
        $this->setName('all')
            ->setDescription('Run All Package Commands');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

        foreach ($this->commandList as $command)
        {
            // No to run the class itself
            if($command === AllCommand::class) continue;

            $command = new $command();
            if(method_exists($command,'execute'))
                ($command)->execute($input,$output);
        }
    }

}