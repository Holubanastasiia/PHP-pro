<?php
/**
 * @var array $users
 */
?>
<html>
<head>
    <title></title>
    <style>
        table td, table th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="content">
    <h2>Users</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php echo $user['id'] ?>
                </td>
                <td>
                    <?php echo $user['first_name'] ?>
                </td>
                <td>
                    <?php echo $user['age'] ?>
                </td>
                <td>
                    <?php if (isset($user['address'])): ?>
                    <span style="color: green">
                        <?php echo $user['address']; ?>
                    </span>
                    <?php else: ?>
                    <span style="color: red">
                        Не указан
                    </span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>