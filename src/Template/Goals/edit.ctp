<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $goal->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $goal->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($goal); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Goal']) ?></legend>
    <?php
    echo $this->Form->input('category');
    echo $this->Form->input('goal');
    echo $this->Form->input('complete');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
