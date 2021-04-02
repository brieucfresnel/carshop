<h1>Origine : <?= $o ?></h1>
<ul><h2>Marques : </h2>
    <?php if (!empty($t)): ?>
        <?php foreach ($t as $brand): ?>
            <li class="brand">
                <?= $this->Html->link($brand->name, ['controller' => 'Brands', 'action' => 'show', $brand->id]) ?>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun résultat</p>
    <?php endif; ?>
</ul>
