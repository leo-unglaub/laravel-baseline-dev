<?php

namespace LeoUnglaub\LaravelBaselineDev;

use Illuminate\Support\ServiceProvider;

class LaravelBaselineDevServiceProvider extends ServiceProvider
{
	public function register()
	{
		// dd(new \LeoUnglaub\LaravelBaselineDev\PhpCsFixer\Config());
	}

	public function boot()
	{
	}
}
