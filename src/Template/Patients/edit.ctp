<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient $patient
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $patient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Patients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patient'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="patients form large-10 medium-9 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Edit Patient') ?></legend>
        <?php
            echo $this->Form->control('carrier_id', ['options' => $carriers]);
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('zipcode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
