<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $note->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Notes'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $note->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Notes'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($note); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Note']) ?></legend>
    <?php
    echo $this->Form->input('note');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
