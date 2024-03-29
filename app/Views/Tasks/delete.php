<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Delete Task
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Delete Task</h1>
<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>
    
    <button class="btn btn-danger">Yes</button>
    <a href="<?= site_url("/tasks/show/" . $task->id) ?>" class="btn btn-secondary">Cancel</a>
</form>

<?= $this->endSection() ?>