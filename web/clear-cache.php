<?php

$rootDir = __DIR__;

require_once __DIR__.'/../app/bootstrap.php.cache';

// reset cache
$fs = new \Symfony\Component\Filesystem\Filesystem;
$output = new \Symfony\Component\Console\Output\ConsoleOutput();

function execute_commands($commands, $output)
{
    foreach($commands as $command) {
        $output->writeln(sprintf('<info>Executing : </info> %s', $command));
        $p = new \Symfony\Component\Process\Process($command);
        $exit = $p->run(function($type, $data) use ($output) {
			echo '<pre>' . $data . '</pre>';
            $output->write($data);
        });
        $output->writeln("");
    }
}

$output->writeln("<info>Clearing Cache</info>");

execute_commands(array(
    'php ../app/console cache:clear --env=dev --no-debug --no-warmup'
), $output);

execute_commands(array(
    'php ../app/console doctrine:cache:clear-metadata --env=dev --no-debug'
), $output);

execute_commands(array(
    'php ../app/console doctrine:cache:clear-query --env=dev --no-debug'
), $output);

execute_commands(array(
    'php ../app/console doctrine:cache:clear-result --env=dev --no-debug'
), $output);

execute_commands(array(
    'php ../app/console cache:create-cache-class --env=dev --no-debug'
), $output);

execute_commands(array(
    'php ../app/console cache:warmup --env=dev --no-debug'
), $output);

$output->writeln('<info>Done!</info>');

$output->writeln("<info>Generating Assets</info>");

execute_commands(array(
	'php ../app/console assetic:dump --env=dev --no-debug'
), $output);

$output->writeln('<info>Done!</info>');