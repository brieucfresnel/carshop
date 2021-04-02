<?php

namespace App\Controller;

class BrandsController extends AppController
{
    public function index()
    {
        $t = $this->Brands->find('all', ['contain' => ['Cars']]);

        $this->set(compact('t'));
    }

    public function byorigin($o = null) {
        if(empty($o))
            return $this->redirect(['action' => 'index']);

        $t = $this->Brands->findByOrigin($o)->contain(['Cars']);

        $this->set(compact(['o', 't']));
    }

    public function show($id = null)
    {
        if(empty($id))
            return $this->redirect(['action' => 'index']);

        $brand = $this->Brands->findById($id)
            ->contain('Cars');

        if ($brand->isEmpty()) {
            $this->Flash->error('Cette marque n\'existe pas.');
            return $this->redirect(['action' => 'index']);
        }

        $brand = $brand->first();
        $this->set(compact('brand'));

        $this->loadModel('Cars');
        $newCar = $this->Cars->newEmptyEntity();
        $this->set(compact('newCar'));
    }

    public function new()
    {
        $new = $this->Brands->newEmptyEntity();

        if ($this->request->is('post')) {
            $new = $this->Brands->patchEntity($new, $this->request->getData());

            if ($this->Brands->save($new)) {
                $this->Flash->success('La marque a bien été ajoutée');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Erreur lors de l\'ajout de la marque. Veuillez réessayer.');
        }

        $this->set(compact('new'));
    }
}
