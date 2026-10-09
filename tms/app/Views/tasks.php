<h1>All Tasks</h1>

<?php if (empty($tasks)): ?>
    <p>There are no tasks yet.</p>
<?php else: ?>
    <table>
        <tr>
            <th>Date</th>
            <th>Task</th>
            <th>Status</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></td>
                <td><?= esc($task['title']) ?></td>
                <td class="<?= esc($task['status']) ?>"><?= esc($task['status']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
