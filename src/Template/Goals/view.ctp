<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Goal'), ['action' => 'edit', $goal->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Goal'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]) ?> </li>
<li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Goal'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Goal'), ['action' => 'edit', $goal->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Goal'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]) ?> </li>
<li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Goal'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($goal->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Category') ?></td>
            <td><?= h($goal->category) ?></td>
        </tr>
        <tr>
            <td><?= __('Goal') ?></td>
            <td><?= h($goal->goal) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($goal->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($goal->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($goal->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Complete') ?></td>
            <td><?= $goal->complete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

