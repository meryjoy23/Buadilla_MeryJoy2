<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; color: #1a1a1a; background: linear-gradient(180deg, #f6fff8, #eaf6ea); }
        .bg-decor { position: fixed; inset: 0; z-index: -1; pointer-events: none; background:
            radial-gradient(600px 600px at 0% 0%, rgba(46,139,87,.10), transparent 60%),
            radial-gradient(600px 600px at 100% 0%, rgba(34,139,34,.08), transparent 60%),
            radial-gradient(600px 600px at 0% 100%, rgba(85,107,47,.08), transparent 60%),
            radial-gradient(600px 600px at 100% 100%, rgba(60,179,113,.10), transparent 60%);
            animation: floatBg 16s ease-in-out infinite alternate; }
        .container { max-width: 560px; margin: 80px auto; padding: 0 16px; }
        .card { background: #ffffff; border: 2px solid #d6eadf; border-radius: 14px; box-shadow: 0 10px 30px rgba(34,139,34,.08), 0 4px 12px rgba(60,179,113,.06); overflow: hidden; transform: translateY(8px); opacity: 0; animation: cardIn .6s ease-out forwards; }
        .card-header { padding: 16px 20px; border-bottom: 2px solid #d6eadf; background: linear-gradient(135deg, #ffffff 0%, #f6fff8 100%); }
        h1 { margin: 0; font-size: 22px; color: #2e8b57; font-weight: 700; }
        .card-body { padding: 20px; animation: fadeIn .6s ease .15s both; text-align: center; background: #ffffff; }
        p { color: #2f4f4f; font-size: 16px; line-height: 1.5; }
        strong { color: #276749; font-weight: 600; }
        .actions { display: flex; justify-content: center; gap: 10px; margin-top: 20px; }
        .btn { padding: 12px 18px; text-decoration: none; border-radius: 10px; border: 2px solid transparent; font-size: 14px; font-weight: 600; box-shadow: 0 2px 8px rgba(34,139,34,.15); transition: transform .08s ease, box-shadow .2s ease, background-color .2s ease; cursor: pointer; }
        .btn:active { transform: translateY(1px); box-shadow: 0 0 0 rgba(0,0,0,0); }
        .btn-confirm { background: linear-gradient(135deg, #228b22 0%, #006400 100%); color: white; border-color: #006400; }
        .btn-confirm:hover { background: linear-gradient(135deg, #006400 0%, #013220 100%); border-color: #013220; }
        .btn-cancel { background: linear-gradient(135deg, #ffffff 0%, #f6fff8 100%); color: #2f4f4f; border-color: #3cb371; }
        .btn-cancel:hover { background: linear-gradient(135deg, #f0fff5 0%, #eaf6ea 100%); border-color: #2e8b57; }
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
                <h1>Delete User</h1>
            </div>
            <div class="card-body">
                <p>Are you sure you want to delete <strong><?= $user['username'] ?></strong> (<?= $user['email'] ?>)?</p>
                <form action="<?= site_url('users/delete/' . $user['id']) ?>" method="POST">
                    <div class="actions">
                        <button type="submit" class="btn btn-confirm">Yes, Delete</button>
                        <a href="<?= site_url('users/view') ?>" class="btn btn-cancel">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
