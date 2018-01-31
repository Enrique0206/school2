<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inscription Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $registration
 * @property float $cost
 * @property string $level
 * @property int $grade_id
 * @property int $student_id
 * @property int $employee_id
 *
 * @property \App\Model\Entity\Grade $grade
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Employee $employee
 */
class Inscription extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'registration' => true,
        'cost' => true,
        'level' => true,
        'grade_id' => true,
        'student_id' => true,
        'employee_id' => true,
        'grade' => true,
        'student' => true,
        'employee' => true
    ];
}
