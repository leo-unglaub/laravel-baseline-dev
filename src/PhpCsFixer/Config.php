<?php

namespace LeoUnglaub\LaravelBaselineDev\PhpCsFixer;

use PhpCsFixer\Config as PhpCsFixerConfig;

/**
 * This overrides the PhpCsFixer Config class and sets some usefull
 * defaults.
 */
class Config extends PhpCsFixerConfig
{
	public function __construct(string $name = 'default')
	{
		parent::__construct();

		$this
			->setRiskyAllowed(true)
			->setUsingCache(true)
			->setFinder($this->getCustomFinder())
			->setRules($this->getCustomRules())
			->setIndent("\t")
			->setLineEnding("\n");
	}

	/**
	 * Get a custom Finder instance.
	 */
	public function getCustomFinder(): Finder
	{
		$finder = new Finder();

		return $finder;
	}

	/**
	 * Define all custom rules.
	 */
	protected function getCustomRules(): array
	{
		return [
			'@Symfony' => true,
			'no_useless_return' => true,
			'phpdoc_order' => true,
			'align_multiline_comment' => [
				'comment_type' => 'all_multiline',
			],
			'class_definition' => [
				'multi_line_extends_each_single_line' => true,
			],
			'concat_space' => [
				'spacing' => 'one',
			],
			'array_indentation' => true,
			'yoda_style' => false,
			'control_structure_continuation_position' => [
				'position' => 'next_line',
			],
			'curly_braces_position' => [
				'control_structures_opening_brace' => 'next_line_unless_newline_at_signature_end',
			],
		];
	}
}
