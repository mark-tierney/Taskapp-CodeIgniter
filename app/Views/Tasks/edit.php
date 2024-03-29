<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Edit Task
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Edit Task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li style='color:red'><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?= form_open("/tasks/update/" . $task->id) ?>
    
    <?= $this->include('Tasks/form') ?>
    
    <button class="btn btn-primary">Save</button>
    <a href="<?= site_url("/tasks/show/" . $task->id) ?>" class="btn btn-secondary">Cancel</a>
</form>

<?= $this->endSection() ?>