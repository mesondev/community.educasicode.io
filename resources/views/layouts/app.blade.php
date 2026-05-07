<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CODES Premium Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#f5f7fb;
            overflow-x:hidden;
        }

        /* SIDEBAR */

        .sidebar{
            position:fixed;
            width:280px;
            height:100vh;
            background:#0f172a;
            color:white;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            z-index:999;
            transition:.3s;
        }

        .sidebar-top{
            padding:25px;
        }

        .logo-box{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:40px;
        }

        .logo-icon{
            width:55px;
            height:55px;
            border-radius:16px;
            background:#2563eb;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:25px;
        }

        .logo-title h3{
            margin:0;
            font-size:20px;
            font-weight:700;
        }

        .logo-title p{
            margin:0;
            color:#94a3b8;
            font-size:13px;
        }

        .menu-title{
            color:#64748b;
            font-size:12px;
            margin-bottom:15px;
            text-transform:uppercase;
        }

        .sidebar-menu a{
            display:flex;
            align-items:center;
            gap:15px;
            padding:15px 18px;
            border-radius:18px;
            color:#cbd5e1;
            text-decoration:none;
            margin-bottom:10px;
            transition:.3s;
            font-weight:500;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active{
            background:#2563eb;
            color:white;
            transform:translateX(5px);
        }

        .sidebar-bottom{
            padding:25px;
            border-top:1px solid rgba(255,255,255,.08);
        }

        .logout-btn{
            width:100%;
            background:transparent;
            border:none;
            color:white;
            display:flex;
            align-items:center;
            gap:12px;
            font-size:18px;
            padding:15px;
            border-radius:15px;
            transition:.3s;
        }

        .logout-btn:hover{
            background:#1e293b;
        }

        /* MAIN */

        .main{
            margin-left:280px;
            padding:25px;
        }

        /* NAVBAR */

        .topbar{
            background:white;
            border-radius:25px;
            padding:18px 25px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            box-shadow:0 5px 20px rgba(0,0,0,.05);
            margin-bottom:30px;
        }

        .search-box{
            width:500px;
            position:relative;
        }

        .search-box input{
            width:100%;
            border:none;
            background:#f1f5f9;
            padding:14px 20px 14px 50px;
            border-radius:18px;
            outline:none;
            font-size:15px;
        }

        .search-box i{
            position:absolute;
            top:15px;
            left:18px;
            color:#94a3b8;
        }

        .topbar-right{
            display:flex;
            align-items:center;
            gap:25px;
        }

        .notif-box{
            position:relative;
            font-size:22px;
        }

        .notif-dot{
            width:10px;
            height:10px;
            background:red;
            border-radius:50%;
            position:absolute;
            top:0;
            right:0;
        }

        .profile-box{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .profile-info h5{
            margin:0;
            font-size:18px;
            font-weight:600;
        }

        .profile-info p{
            margin:0;
            color:#64748b;
            font-size:13px;
        }

        .profile-avatar{
            width:50px;
            height:50px;
            border-radius:50%;
            background:#2563eb;
            display:flex;
            align-items:center;
            justify-content:center;
            color:white;
            font-size:22px;
        }

        /* TITLE */

        .page-title h1{
            font-size:42px;
            font-weight:700;
            margin-bottom:5px;
        }

        .page-title p{
            color:#64748b;
        }

        /* CARD */

        .stats-card{
            background:white;
            border-radius:25px;
            padding:28px;
            box-shadow:0 5px 20px rgba(0,0,0,.05);
            transition:.3s;
            height:100%;
        }

        .stats-card:hover{
            transform:translateY(-5px);
        }

        .stats-header{
            display:flex;
            align-items:center;
            justify-content:space-between;
            margin-bottom:20px;
        }

        .stats-icon{
            width:70px;
            height:70px;
            border-radius:22px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:white;
            font-size:30px;
        }

        .blue{
            background:#3b82f6;
        }

        .green{
            background:#22c55e;
        }

        .purple{
            background:#a855f7;
        }

        .orange{
            background:#f59e0b;
        }

        .stats-card h2{
            font-size:48px;
            font-weight:700;
        }

        .stats-card p{
            color:#22c55e;
            margin-top:10px;
        }

        /* CONTENT BOX */

        .content-box{
            background:white;
            border-radius:25px;
            padding:25px;
            box-shadow:0 5px 20px rgba(0,0,0,.05);
            height:100%;
        }

        .content-box h4{
            font-weight:700;
            margin-bottom:25px;
        }

        /* TABLE */

        .table{
            vertical-align:middle;
        }

        .status-active{
            background:#dcfce7;
            color:#16a34a;
            padding:8px 15px;
            border-radius:30px;
            font-size:13px;
        }

        .status-pending{
            background:#fef3c7;
            color:#ca8a04;
            padding:8px 15px;
            border-radius:30px;
            font-size:13px;
        }

        /* MOBILE */

        .mobile-toggle{
            display:none;
            font-size:28px;
            cursor:pointer;
        }

        @media(max-width:991px){

            .sidebar{
                left:-100%;
            }

            .sidebar.active{
                left:0;
            }

            .main{
                margin-left:0;
            }

            .search-box{
                width:100%;
            }

            .mobile-toggle{
                display:block;
            }

            .topbar{
                flex-direction:column;
                gap:20px;
                align-items:flex-start;
            }

            .topbar-right{
                width:100%;
                justify-content:space-between;
            }

        }

    </style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">

    <div class="sidebar-top">

        <div class="logo-box">

            <div class="logo-icon">
                <i class="bi bi-mortarboard"></i>
            </div>

            <div class="logo-title">
                <h3>CODES</h3>
                <p>Course Digital Education</p>
            </div>

        </div>

        <div class="menu-title">
            MAIN MENU
        </div>

        <div class="sidebar-menu">

            <a href="#" class="active">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>

            <a href="#">
                <i class="bi bi-people"></i>
                Siswa
            </a>

            <a href="#">
                <i class="bi bi-book"></i>
                Kelas
            </a>

            <a href="#">
                <i class="bi bi-mortarboard"></i>
                Instructor
            </a>

            <a href="#">
                <i class="bi bi-journal-bookmark"></i>
                Materi
            </a>

            <a href="#">
                <i class="bi bi-credit-card"></i>
                Pembayaran
            </a>

            <a href="#">
                <i class="bi bi-bar-chart"></i>
                Progress
            </a>

            <a href="#">
                <i class="bi bi-star"></i>
                Review
            </a>

            <a href="#">
                <i class="bi bi-gear"></i>
                Settings
            </a>

        </div>

    </div>

    <div class="sidebar-bottom">

        <button class="logout-btn">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </button>

    </div>

</div>

<!-- MAIN -->
<div class="main">

    <!-- NAVBAR -->
    <div class="topbar">

        <div class="d-flex align-items-center gap-3 w-100">

            <div class="mobile-toggle" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </div>

            <div class="search-box">

                <i class="bi bi-search"></i>

                <input type="text"
                       placeholder="Cari siswa, kelas, atau instructor...">

            </div>

        </div>

        <div class="topbar-right">

            <div class="notif-box">

                <i class="bi bi-bell"></i>

                <div class="notif-dot"></div>

            </div>

            <div class="profile-box">

                <div class="profile-info">
                    <h5>Admin CODES</h5>
                    <p>Administrator</p>
                </div>

                <div class="profile-avatar">
                    <i class="bi bi-person"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- TITLE -->
    <div class="page-title mb-4">

        <h1>Dashboard Overview</h1>

        <p>Selamat datang di CODES Admin Panel</p>

    </div>

    <!-- STATS -->
    <div class="row g-4 mb-4">

        <div class="col-lg-4">

            <div class="stats-card">

                <div class="stats-header">

                    <div>

                        <small>Total Siswa</small>

                        <h2>328</h2>

                        <p>+12% dari bulan lalu</p>

                    </div>

                    <div class="stats-icon blue">
                        <i class="bi bi-people"></i>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="stats-card">

                <div class="stats-header">

                    <div>

                        <small>Total Kelas</small>

                        <h2>24</h2>

                        <p>+3 kelas baru</p>

                    </div>

                    <div class="stats-icon green">
                        <i class="bi bi-book"></i>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="stats-card">

                <div class="stats-header">

                    <div>

                        <small>Total Instructor</small>

                        <h2>18</h2>

                        <p>+2 instructor baru</p>

                    </div>

                    <div class="stats-icon purple">
                        <i class="bi bi-mortarboard"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="row g-4">

        <!-- CHART -->
        <div class="col-lg-4">

            <div class="content-box">

                <h4>Kelas Populer</h4>

                <canvas id="pieChart"></canvas>

            </div>

        </div>

        <!-- TABLE -->
        <div class="col-lg-8">

            <div class="content-box">

                <h4>Pendaftaran Terbaru</h4>

                <div class="table-responsive">

                    <table class="table">

                        <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>Meson Wakerkwa</td>
                            <td>Web Development</td>
                            <td>2026-05-07</td>
                            <td>
                                <span class="status-active">
                                    Aktif
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>Roys Wanimbo</td>
                            <td>Data Science</td>
                            <td>2026-05-06</td>
                            <td>
                                <span class="status-active">
                                    Aktif
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>Omori Wanimbo</td>
                            <td>Mobile Dev</td>
                            <td>2026-05-06</td>
                            <td>
                                <span class="status-pending">
                                    Pending
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>Yamile Gombo</td>
                            <td>UI/UX Design</td>
                            <td>2026-05-05</td>
                            <td>
                                <span class="status-active">
                                    Aktif
                                </span>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

function toggleSidebar(){

    document.getElementById('sidebar').classList.toggle('active')

}

const ctx = document.getElementById('pieChart');

new Chart(ctx, {

    type:'pie',

    data:{

        labels:[
            'Web Development',
            'UI/UX Design',
            'Mobile Dev',
            'Data Science'
        ],

        datasets:[{

            data:[38,16,21,25],

            backgroundColor:[
                '#3b82f6',
                '#ef4444',
                '#f59e0b',
                '#10b981'
            ]

        }]

    }

})

</script>

</body>
</html>