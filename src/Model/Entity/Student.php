<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $address
 * @property string $dni
 * @property string $sexo
 * @property int $boss_id
 *
 * @property \App\Model\Entity\Boss $boss
 * @property \App\Model\Entity\Inscription[] $inscriptions
 * @property \App\Model\Entity\Score[] $scores
 */
class Student extends Entity
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
        'name' => true,
        'code' => true,
        'address' => true,
        'dni' => true,
        'sexo' => true,
        'boss_id' => true,
        'boss' => true,
        'inscriptions' => true,
        'scores' => true
    ];
}
