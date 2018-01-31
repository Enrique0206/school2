<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InscriptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InscriptionsTable Test Case
 */
class InscriptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InscriptionsTable
     */
    public $Inscriptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inscriptions',
        'app.grades',
        'app.courses',
        'app.scores',
        'app.students',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Inscriptions') ? [] : ['className' => InscriptionsTable::class];
        $this->Inscriptions = TableRegistry::get('Inscriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inscriptions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
