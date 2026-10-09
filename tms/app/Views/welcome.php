<h1>Tasks for Today</h1>
<p><?= esc(date('l, F j, Y', strtotime($today))) ?></p>

<?php if (empty($tasks)): ?>
    <p>No tasks scheduled for today.</p>
<?php else: ?>
    <table>
        <tr>
            <th>Task</th>
            <th>Status</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td class="<?= esc($task['status']) ?>"><?= esc($task['status']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
