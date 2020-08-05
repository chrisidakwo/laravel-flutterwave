<?php

namespace ChrisIdakwo\Flutterwave\Laravel\Tests;

use ChrisIdakwo\Flutterwave\Rave;

class RaveTest extends TestCase {

	public function testRaveIsRegisteredInAppContainer(): void {
		$instance = $this->app['laravel-flutterwave'];

		self::assertInstanceOf(Rave::class, $instance);
	}
}
