<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InscriptionsFixture
 *
 */
class InscriptionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'registration' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'cost' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'level' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'grade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'student_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employee_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_inscriptions_grade1_idx' => ['type' => 'index', 'columns' => ['grade_id'], 'length' => []],
            'fk_inscriptions_students1_idx' => ['type' => 'index', 'columns' => ['student_id'], 'length' => []],
            'fk_inscriptions_employees1_idx' => ['type' => 'index', 'columns' => ['employee_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_inscriptions_employees1' => ['type' => 'foreign', 'columns' => ['employee_id'], 'references' => ['employees', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_inscriptions_grade1' => ['type' => 'foreign', 'columns' => ['grade_id'], 'references' => ['grades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_inscriptions_students1' => ['type' => 'foreign', 'columns' => ['student_id'], 'references' => ['students', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'registration' => 1517358673,
            'cost' => 1.5,
            'level' => 'Lorem ip',
            'grade_id' => 1,
            'student_id' => 1,
            'employee_id' => 1
        ],
    ];
}
