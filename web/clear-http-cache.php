<?php

require_once __DIR__.'/../app/bootstrap.php.cache';

// reset http cache
$fs = new \Symfony\Component\Filesystem\Filesystem;

echo "<h2>Clearing HTTP Cache</h2>";

try {
    $fs->remove(
		array(
		__DIR__.'/../app/cache/prod/http_cache',
		__DIR__.'/../app/cache/dev/http_cache',
		__DIR__.'/../app/cache/prod/weatherapi',
		__DIR__.'/../app/cache/dev/weatherapi'
		)
	);
} catch (\Symfony\Component\Filesystem\Exception\IOExceptionInterface $e) {
    echo "<p>An error occurred while deleting your HTTP cache at " . $e->getPath() . '</p>';
}

echo "<p>Done</p>";