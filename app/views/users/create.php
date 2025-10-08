<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; color: #1a1a1a; background: linear-gradient(160deg, #f6fff8, #eaf6ea); }
        .bg-decor { position: fixed; inset: 0; z-index: -1; pointer-events: none; background:
            radial-gradient(600px 600px at 0% 0%, rgba(46,139,87,.12), transparent 60%),
            radial-gradient(600px 600px at 100% 0%, rgba(34,139,34,.10), transparent 60%),
            radial-gradient(600px 600px at 0% 100%, rgba(85,107,47,.08), transparent 60%),
            radial-gradient(600px 600px at 100% 100%, rgba(60,179,113,.10), transparent 60%);
            animation: floatBg 16s ease-in-out infinite alternate; }
        .container { max-width: 720px; margin: 40px auto; padding: 0 16px; }
        .card { background: #ffffff; border: 2px solid #d6eadf; border-radius: 14px; box-shadow: 0 10px 30px rgba(34,139,34,.08), 0 4px 12px rgba(60,179,113,.06); overflow: hidden; transform: translateY(8px); opacity: 0; animation: cardIn .6s ease-out forwards; }
        .card-header { padding: 16px 20px; border-bottom: 2px solid #d6eadf; background: linear-gradient(135deg, #ffffff 0%, #f6fff8 100%); }
        .title { margin: 0; font-size: 20px; color: #2e8b57; font-weight: 700; }
        .card-body { padding: 20px; animation: fadeIn .6s ease .15s both; background: #ffffff; }
        .form-group { margin-bottom: 16px; }
        label { display: block; margin-bottom: 6px; font-weight: 600; color: #2f4f4f; }
        input[type="text"], input[type="email"] { 
            width: 100%; 
            max-width: 420px; 
            padding: 12px 14px; 
            border: 2px solid #d6eadf; 
            border-radius: 8px; 
            background: #fefefe; 
            transition: border-color .3s ease, box-shadow .3s ease; 
        }
        input[type="text"]:focus, input[type="email"]:focus { 
            outline: none; 
            border-color: #3cb371; 
            box-shadow: 0 0 0 3px rgba(60,179,113,.15); 
        }
        .actions { display: flex; gap: 8px; margin-top: 12px; }
        .btn { display: inline-block; padding: 12px 18px; text-decoration: none; border-radius: 10px; border: 2px solid transparent; font-size: 14px; font-weight: 600; box-shadow: 0 2px 8px rgba(34,139,34,.15); transition: transform .08s ease, box-shadow .2s ease, background-color .2s ease; cursor: pointer; }
        .btn:active { transform: translateY(1px); box-shadow: 0 0 0 rgba(0,0,0,0); }
        .btn-primary { background: linear-gradient(135deg, #3cb371 0%, #2e8b57 100%); color: white; border-color: #2e8b57; }
        .btn-primary:hover { background: linear-gradient(135deg, #2e8b57 0%, #276749 100%); border-color: #276749; }
        .btn-secondary { background: linear-gradient(135deg, #ffffff 0%, #f6fff8 100%); color: #2f4f4f; border-color: #3cb371; }
        .btn-secondary:hover { background: linear-gradient(135deg, #f0fff5 0%, #eaf6ea 100%); border-color: #2e8b57; }

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
            <h1 class="title">Create User</h1>
        </div>
        <div class="card-body">
            <form action="<?= site_url('users/create') ?>" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="actions">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="<?= site_url('users/view') ?>" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
