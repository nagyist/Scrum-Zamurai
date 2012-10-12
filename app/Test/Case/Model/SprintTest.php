<?php

App::uses('Sprint', 'Model');

/**
 * Sprint Test Case
 *
 */
class SprintTest extends CakeTestCase {

	/**
	 * Fixtures
	 *
	 * @var array
	 */
	public $fixtures = array(
		'app.sprint',
		'app.story'
	);

	/**
	 * setUp method
	 *
	 * @return void
	 */
	public function setUp() {
		parent::setUp();
		$this->Sprint = new Sprint;
	}

	/**
	 * tearDown method
	 *
	 * @return void
	 */
	public function tearDown() {
		unset($this->Sprint);

		parent::tearDown();
	}

	/**
	 * Dummy test to ignore 'No tests found in class' error.
	 */
	public function testDummy() {

	}

}
