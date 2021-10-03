<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeoState Entity
 *
 * @property string $name
 * @property string $abv
 * @property string $country
 * @property string|null $is_state
 * @property string|null $is_lower48
 * @property string $slug
 * @property float|null $latitude
 * @property float|null $longitude
 * @property int|null $population
 * @property float|null $area
 */
class GeoState extends Entity
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
        'is_state' => true,
        'is_lower48' => true,
        'slug' => true,
        'latitude' => true,
        'longitude' => true,
        'population' => true,
        'area' => true,
    ];
}
