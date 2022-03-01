<?php

namespace LeoUnglaub\LaravelBaselineDev\PhpCsFixer;

use PhpCsFixer\Finder as PhpCsFixerFinder;

/**
 * Extend the default finder with our own config. This class should
 * be extended in all custom projects.
 */
class Finder extends PhpCsFixerFinder
{
	/**
	 * {@inheritdoc}
	 */
	public function __construct()
	{
		parent::__construct();

		$this
			->in(getcwd())

			// exclude folders
			->notPath('bootstrap')
			->notPath('node_modules')
			->notPath('nova')
			->notPath('storage')
			->ignoreDotFiles(true)
			->ignoreVCS(true)

			// exclude files
			->notName('index.php')
			->notName('server.php')
			->notName('*.blade.php')

			// add files
			->name('*.php')
			->name('*.php7')
			->name('*.php8');
	}
}
