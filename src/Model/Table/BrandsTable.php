<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BrandsTable extends Table
{
    public function initialize(array $c): void
    {
        parent::initialize($c);
        $this->addBehavior('Timestamp');

        $this->hasMany('Cars');
    }

    public function validationDefault(Validator $v) : Validator {
        $v->maxLength('name', 30)
            ->notEmptyString('name')

            ->maxLength('creation_year', 4)
            ->notEmptyString('creation_year')

            ->maxLength('founder', 50)
            ->notEmptyString('founder')

            ->maxLength('origin', 20)
            ->notEmptyString('origin');
        return $v;
    }
}
