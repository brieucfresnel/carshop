<h1>Marques</h1>
<p><?= $t->count() ?> résultats</p>

<?php foreach($t as $brand): ?>
    <div class="brand">
        <h2><?= $this->Html->link($brand->name, ['controller' => 'Brands', 'action' => 'show', $brand->id]) ?></h2>
        <ul>Voitures disponibles :
            <?php foreach($brand->cars as $car): ?>
                <li><?= $car->series . ' ' . $car->model ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endforeach; ?>
