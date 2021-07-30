<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Tasks
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<a href="<?= site_url("/tasks") ?>" class="btn btn-primary mb-3">&laquo; back to index</a>

<dl>
    <dt>ID</dt>
    <dd><?= $task->id ?></dd>

    <dt>Description</dt>
    <dd><?= esc($task->description) ?></dd>

    <dt>Created at</dt>
    <dd><?= $task->created_at ?></dd>

    <dt>Updated at</dt>
    <dd><?= $task->updated_at ?></dd>
</dl>

<a href="<?= site_url('tasks/edit/' . $task->id) ?>" class="btn btn-info">Edit</a>
<a href="<?= site_url('tasks/delete/' . $task->id) ?>" class="btn btn-danger">Delete</a>

<?= $this->endSection() ?>