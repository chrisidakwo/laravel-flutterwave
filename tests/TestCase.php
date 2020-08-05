<?php

namespace ChrisIdakwo\Flutterwave\Laravel\Tests;

use ChrisIdakwo\Flutterwave\Laravel\RaveServiceProvider;
use Illuminate\Foundation\Application;

abstract class TestCase extends \Orchestra\Testbench\TestCase {
	/**
	 * @param Application $app
	 * @return string[]
	 */
	protected function getPackageProviders($app): array {
		return [
			RaveServiceProvider::class
		];
	}
}
