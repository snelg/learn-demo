<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Note'), ['action' => 'edit', $note->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Note'), ['action' => 'delete', $note->id], ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]) ?> </li>
<li><?= $this->Html->link(__('List Notes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Note'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Note'), ['action' => 'edit', $note->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Note'), ['action' => 'delete', $note->id], ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]) ?> </li>
<li><?= $this->Html->link(__('List Notes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Note'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($note->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($note->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($note->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($note->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Note') ?></td>
            <td><?= $this->Text->autoParagraph(h($note->note)); ?></td>
        </tr>
    </table>
</div>

