<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CarsTable extends Table
{

    public function initialize(array $c): void
    {
        parent::initialize($c);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
            'joinType' => 'INNER'
        ]);
    }

    public function validationDefault(Validator $v): Validator
    {
        $v->maxLength('model', 40)
            ->notEmptyString('model')

            ->maxLength('series', 30)

            ->maxLength('color', 60)

            ->maxLength('fuel', 20)
            ->notEmptyString('fuel');

        return $v;
    }
}
