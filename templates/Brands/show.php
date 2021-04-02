<h1><?= $brand->name ?></h1>

<p>Marque créée <?= !empty($brand->founder) ? 'par ' . $brand->founder . ' ' : ' ' ?>en <?= $brand->creation_year ?>
    en <?= $this->Html->link($brand->origin, ['controller' => 'Brands', 'action' => 'byorigin', $brand->origin]) ?>.</p>
<br/>
<p>Modèles disponibles :</p>

<?php if (!empty($brand->cars)): ?>
    <table>
        <thead>
        <th>Série</th>
        <th>Modèle</th>
        <th>Couleur</th>
        <th>Prix</th>
        <th>Carburant</th>
        </thead>
        <tbody>
        <?php foreach ($brand->cars as $car): ?>
            <td><?= $car->series ?></td>
            <td><?= $car->model ?></td>
            <td><?= $car->color ?></td>
            <td><?= $car->price ?></td>
            <td><?= $car->fuel ?></td>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    Aucun
<?php endif; ?>
<br/><br>
<h2>Ajouter une voiture</h2>
<?= $this->Form->create($newCar, ['url' => ['controller' => 'cars', 'action' => 'new']]) ?>
<?= $this->Form->hidden('brand_id', ['value' => $brand->id]) ?>
<?= $this->Form->control('model', ['label' => 'Modèle']) ?>
<?= $this->Form->control('series', ['label' => 'Série']) ?>
<?= $this->Form->control('color', ['label' => 'Couleur']) ?>
<?= $this->Form->control('fuel', ['label' => 'Carburant']) ?>
<?= $this->Form->control('price', ['label' => 'Prix']) ?>
<?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>
