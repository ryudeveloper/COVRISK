<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\AppController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\AppController Test Case
 *
 * @uses \App\Controller\AppController
 */
class AppControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.App',
    ];

    /**
     * Test beforeFilter method
     *
     * @return void
     * @uses \App\Controller\AppController::beforeFilter()
     */
    public function testBeforeFilter(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
