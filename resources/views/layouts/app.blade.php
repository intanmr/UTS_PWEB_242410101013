<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Apotek</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            background: linear-gradient(135deg, #eef3fb, #f8faff, #ffffff);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #2f3e5c;
        }

        .main-content {
            flex: 1;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(91, 125, 177, 0.22);
            border-radius: 28px;
            box-shadow: 0 18px 45px rgba(91, 125, 177, 0.14);
        }

        .navbar-custom {
            background: #d0ddf1;
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(91, 125, 177, 0.22);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-custom.scrolled {
            box-shadow: 0 6px 20px rgba(91, 125, 177, 0.16);
        }
        
        .brand-badge {
            color: #5b7db1;
            font-weight: 800;
            letter-spacing: .3px;
        }

        .nav-menu-btn {
            background: #eef3fb;
            color: #5b7db1;
            border: 1px solid #d6e0f2;
            border-radius: 999px;
            padding: 8px 18px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.25s ease;
            display: inline-block;
        }

        .nav-menu-btn:hover {
            background: #7f9ed4;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(91, 125, 177, 0.22);
        }

        .nav-menu-btn.active {
            background: #5b7db1;
            color: white;
            box-shadow: 0 8px 18px rgba(91, 125, 177, 0.24);
        }

        .btn-aesthetic {
            background: #5b7db1;
            color: white;
            border: none;
            border-radius: 999px;
            padding: 10px 22px;
            font-weight: 600;
            transition: 0.25s ease;
        }

        .btn-aesthetic:hover {
            background: #7f9ed4;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(91, 125, 177, 0.25);
        }

        .btn-soft {
            background: #eef3fb;
            color: #5b7db1;
            border: 1px solid #d6e0f2;
            border-radius: 999px;
            padding: 10px 22px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.25s ease;
        }

        .btn-soft:hover {
            background: #7f9ed4;
            color: white;
        }

        .stat-card {
            position: relative;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(91, 125, 177, 0.18);
            border-radius: 20px;
            padding: 20px 20px 20px 18px;
            box-shadow: 0 12px 28px rgba(91, 125, 177, 0.12);
            transition: 0.25s ease;
            overflow: hidden;
        }

        .stat-card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 6px;
            height: 100%;
            border-radius: 20px 0 0 20px;
            background: #5b7db1;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(91, 125, 177, 0.2);
        }

        .stat-value {
            font-size: 30px;
            font-weight: 800;
            color: #5b7db1;
        }

        .stat-label {
            font-size: 14px;
            color: #6b7d99;
        }

        .status-box {
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 700;
            display: inline-block;
        }

        .tersedia {
            background: #e3f2fd;
            color: #1e5c8a;
        }

        .hampir {
            background: #fff3cd;
            color: #8a6500;
        }

        .habis {
            background: #f8d7da;
            color: #8a1f2d;
        }

        .tabel-obat {
            width: 100%;
            overflow-x: auto;
            border-radius: 22px;
            box-shadow: 0 16px 35px rgba(91, 125, 177, 0.14);
            background: white;
        }

        .tabel-obat table {
            width: 100%;
            min-width: 1100px;
            border-collapse: separate;
            border-spacing: 0;
        }

        .tabel-obat thead th {
            background: #5b7db1;
            color: white;
            padding: 14px 16px;
            border: none;
            white-space: nowrap;
            font-size: 14px;
        }

        .tabel-obat tbody td {
            padding: 14px 16px;
            vertical-align: middle;
            font-size: 14px;
            border-color: #e3ebfa;
            white-space: nowrap;
        }

        .tabel-obat tbody tr {
            background: white;
            transition: 0.2s ease;
        }

        .tabel-obat tbody tr:hover {
            background: #f2f6ff;
        }

        .tabel-obat tbody tr:last-child td:first-child {
            border-bottom-left-radius: 22px;
        }

        .tabel-obat tbody tr:last-child td:last-child {
            border-bottom-right-radius: 22px;
        }

        .section-title-center {
            text-align: center;
            color: #5b7db1;
            font-weight: 800;
            margin-bottom: 24px;
        }

        .keunggulan-card {
            background: #ffffff;
            border: 1px solid #d6e0f2;
            border-radius: 22px;
            padding: 22px;
            min-height: 130px;
            color: #2f3e5c;
            font-weight: 600;
            position: relative;
            overflow: hidden;
            transition: 0.3s ease;
            box-shadow: 0 12px 28px rgba(91, 125, 177, 0.12);
        }

        .keunggulan-card::before {
            content: "";
            position: absolute;
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, #7f9ed4, #eef3fb);
            border-radius: 50%;
            top: -35px;
            right: -35px;
            opacity: 0.38;
            transition: 0.3s ease;
        }

        .keunggulan-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 20px 40px rgba(91, 125, 177, 0.22);
            border-color: #7f9ed4;
        }

        .keunggulan-card:hover::before {
            width: 140px;
            height: 140px;
            opacity: 0.55;
        }

        .keunggulan-number {
            width: 38px;
            height: 38px;
            border-radius: 14px;
            background: #5b7db1;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin-bottom: 14px;
            position: relative;
            z-index: 1;
        }

        .keunggulan-text {
            position: relative;
            z-index: 1;
        }

        footer {
            background: #d0ddf1;
            color: #5b7db1;
        }
    </style>
</head>
<body>
    
@if(!request()->routeIs('login'))
    <x-navbar />
@endif

<div class="container mt-4 mb-5 main-content">
    @yield('content')
</div>

@if(!request()->routeIs('login'))
    @include('components.footer')
@endif


</body>
</html>