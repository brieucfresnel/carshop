<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Brand extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
