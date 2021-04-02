<?php

namespace App\Controller;

class CarsController extends AppController
{
    public function new() {
        $new = $this->Cars->newEmptyEntity();

        if($this->request->is('post')) {
            $new = $this->Cars->patchEntity($new, $this->request->getData());

            if($this->Cars->save($new))
                $this->Flash->success('La voiture a bien été ajoutée.');
            else
                $this->Flash->error('Erreur lors de l\'ajout de la voiture. Veuillez réessayer.');
        }

        return $this->redirect(['controller' => 'Brands', 'action' => 'show', $new->brand_id]);
    }
}
