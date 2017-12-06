<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RoomsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RoomsController Test Case
 */
class RoomsControllerTest extends IntegrationTestCase
{

    private static $room = [
        'name' => 'Salle 1',
        'capacity' => 130
    ];

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rooms'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('rooms');
        $this->assertResponseSuccess();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
          $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
    
    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
