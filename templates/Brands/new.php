<h1>Ajouter une marque</h1>

<?php

echo $this->Form->create($new);
echo $this->Form->control('name', ['label' => 'Nom']);
echo $this->Form->control('founder', ['label' => 'Fondateur']);
echo $this->Form->control('origin', ['label' => 'Origine', 'placeholder' => 'EU/US/Asie/Afrique']);
echo $this->Form->control('creation_year', ['label' => 'Année de création', 'placeholder' => 'YYYY']);
echo $this->Form->button('Ajouter');
echo $this->Form->end();
