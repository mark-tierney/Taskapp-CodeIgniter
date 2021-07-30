<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
New Task
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>New Task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li style='color:red'><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?= form_open("/tasks/create") ?>
    
    <?= $this->include('Tasks/form') ?>

    <button class="btn btn-primary">Save</button>
    <a href="<?= site_url("/tasks") ?>" class="btn btn-secondary">Cancel</a>
</form>

<?= $this->endSection() ?>