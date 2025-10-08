<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; color: #1a1a1a; background: linear-gradient(135deg, #f6fff8, #eaf6ea); }
        .bg-decor { position: fixed; inset: 0; z-index: -1; pointer-events: none; background:
            radial-gradient(600px 600px at 0% 0%, rgba(46,139,87,.12), transparent 60%),
            radial-gradient(600px 600px at 100% 0%, rgba(34,139,34,.10), transparent 60%),
            radial-gradient(600px 600px at 0% 100%, rgba(85,107,47,.08), transparent 60%),
            radial-gradient(600px 600px at 100% 100%, rgba(60,179,113,.10), transparent 60%);
            animation: floatBg 16s ease-in-out infinite alternate; }
        .container { max-width: 920px; margin: 40px auto; padding: 0 16px; }
        .card { background: #ffffff; border: 2px solid #d6eadf; border-radius: 14px; box-shadow: 0 10px 30px rgba(34,139,34,.08), 0 4px 12px rgba(60,179,113,.06); overflow: hidden; transform: translateY(8px); opacity: 0; animation: cardIn .6s ease-out forwards; }
        .card-header { display: flex; align-items: center; justify-content: space-between; padding: 16px 20px; border-bottom: 2px solid #d6eadf; background: linear-gradient(135deg, #ffffff 0%, #f6fff8 100%); }
        .title { margin: 0; font-size: 22px; letter-spacing: .2px; color: #2e8b57; font-weight: 700; }
        .actions { display: flex; gap: 8px; }
        .table-wrapper { overflow-x: auto; animation: fadeIn .6s ease .15s both; background: #ffffff; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border-bottom: 1px solid #d6eadf; padding: 14px 16px; text-align: left; }
        th { background: linear-gradient(135deg, #f6fff8 0%, #eaf6ea 100%); font-weight: 600; color: #2f4f4f; }
        tr { transition: background .2s ease; }
        tr:hover td { background: #f0fff5; }
        .btn { display: inline-block; padding: 10px 14px; text-decoration: none; border-radius: 10px; border: 2px solid transparent; font-size: 14px; font-weight: 600; box-shadow: 0 2px 8px rgba(34,139,34,.15); transition: transform .08s ease, box-shadow .2s ease, background-color .2s ease; cursor: pointer; }
        .btn:active { transform: translateY(1px); box-shadow: 0 0 0 rgba(0,0,0,0); }
        .btn-primary { background: linear-gradient(135deg, #3cb371 0%, #2e8b57 100%); color: white; border-color: #2e8b57; }
        .btn-primary:hover { background: linear-gradient(135deg, #2e8b57 0%, #276749 100%); border-color: #276749; }
        .btn-edit { background: linear-gradient(135deg, #6b8e23 0%, #556b2f 100%); color: white; border-color: #556b2f; }
        .btn-edit:hover { background: linear-gradient(135deg, #556b2f 0%, #3e5222 100%); border-color: #3e5222; }
        .btn-delete { background: linear-gradient(135deg, #228b22 0%, #006400 100%); color: white; border-color: #006400; }
        .btn-delete:hover { background: linear-gradient(135deg, #006400 0%, #013220 100%); border-color: #013220; }
        .empty { padding: 24px; text-align: center; color: #2f4f4f; font-style: italic; }
        .action-buttons { display: flex; gap: 8px; align-items: center; }
        .delete-form { display: inline; }

        @keyframes cardIn { to { transform: translateY(0); opacity: 1; } }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes floatBg { 0% { background-position: 0% 0%, 100% 0%, 0% 100%, 100% 100%; } 100% { background-position: 10% 5%, 90% 10%, 5% 90%, 95% 95%; } }
    </style>
</head>
<body>
    <div class="bg-decor"></div>
    <div class="container">
    <div class="card">
    <div class="card-header">
        <h1 class="title">Users</h1>
        <div class="actions">
            <a href="<?= site_url('users/create') ?>" class="btn btn-primary">Create User</a>
        </div>
    </div>
    <div class="table-wrapper">
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php if (!empty($users)): ?>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="<?= site_url('users/update/' . $user['id']) ?>" class="btn btn-edit">Edit</a>
                        <a href="<?= site_url('users/delete/' . $user['id']) ?>" class="btn btn-delete">Delete</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="empty">No users found.</td>
            </tr>
        <?php endif; ?>
    </table>
    </div>
    </div>
    </div>
</body>
</html>
