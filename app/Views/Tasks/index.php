<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Tasks
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="d-flex justify-content-between mb-3">
    <h3>Tasks</h3>

    <a href="<?= site_url("/tasks/new") ?>" class="btn btn-primary">New Task</a>
</div>

<div class="btn-group-vertical d-flex">
    <?php foreach($tasks as $task): ?>
        
            <a class="btn btn-outline-secondary text-left" href="<?= site_url("/tasks/show/" . $task->id) ?>">
                <?= esc($task->description) ?>
            </a>
        
    <?php endforeach; ?>
    </div>



<?= $this->endSection() ?>