<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>System Dashboard - Inventory Pro</title>
    <script src='https://unpkg.com/@phosphor-icons/web'></script>
    <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap' rel='stylesheet'>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Inter',sans-serif}
        body{background:#0F172A;color:#F1F5F9;min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:40px}
        .logo{font-size:48px;color:#6366F1;margin-bottom:16px}
        h1{font-size:32px;font-weight:700;margin-bottom:8px}
        p{color:#94A3B8;font-size:16px;margin-bottom:40px}
        .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;width:100%;max-width:900px}
        .card{background:#1E293B;border:1px solid #334155;border-radius:12px;padding:24px;text-align:center}
        .card i{font-size:32px;color:#6366F1;margin-bottom:12px;display:block}
        .card h3{font-size:16px;font-weight:600;margin-bottom:4px}
        .card p{font-size:28px;font-weight:700;color:#F1F5F9;margin-bottom:0}
        .nav-links{display:flex;gap:16px;margin-top:40px;flex-wrap:wrap;justify-content:center}
        .nav-links a{padding:10px 20px;background:#1E293B;border:1px solid #334155;border-radius:8px;color:#94A3B8;text-decoration:none;font-size:14px;font-weight:500;transition:all 0.2s}
        .nav-links a:hover{border-color:#6366F1;color:#A5B4FC}
    </style>
</head>
<body>
    <div class='logo'><i class='ph ph-shield-check'></i></div>
    <h1>System Overview</h1>
    <p>Inventory Pro — System Administration Dashboard</p>
    <div class='grid'>
        <div class='card'><i class='ph ph-users'></i><h3>Total Users</h3><p>47</p></div>
        <div class='card'><i class='ph ph-database'></i><h3>DB Size</h3><p>2.4 GB</p></div>
        <div class='card'><i class='ph ph-activity'></i><h3>Uptime</h3><p>99.8%</p></div>
        <div class='card'><i class='ph ph-warning'></i><h3>Error Logs</h3><p>3</p></div>
        <div class='card'><i class='ph ph-clock'></i><h3>Active Sessions</h3><p>12</p></div>
        <div class='card'><i class='ph ph-cloud-check'></i><h3>Last Backup</h3><p>2h ago</p></div>
    </div>
    <div class='nav-links'>
        <a href='{{ url(\
