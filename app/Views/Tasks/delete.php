<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Delete Task
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Delete Task</h1>
<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>
    
    <button>Yes, delete</button>
    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">Cancel</a>
</form>

<?= $this->endSection() ?>