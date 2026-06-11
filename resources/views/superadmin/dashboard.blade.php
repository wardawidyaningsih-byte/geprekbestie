<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Super Admin | BestieGeprek</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fb;
            font-family:'Poppins',sans-serif;
        }

        .sidebar{
            width:260px;
            height:100vh;
            position:fixed;
            left:0;
            top:0;
            background:linear-gradient(180deg,#ff6b00,#ff8c1a);
            color:white;
            padding:30px 20px;
        }

        .sidebar h2{
            font-weight:800;
            margin-bottom:40px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:12px 15px;
            border-radius:12px;
            margin-bottom:10px;
            transition:.3s;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,.2);
        }

        .main-content{
            margin-left:260px;
            padding:30px;
        }

        .topbar{
            background:white;
            padding:20px;
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,.05);
            margin-bottom:25px;
        }

        .welcome{
            font-weight:700;
            font-size:28px;
        }

        .card-stat{
            border:none;
            border-radius:25px;
            padding:25px;
            color:white;
            transition:.3s;
        }

        .card-stat:hover{
            transform:translateY(-5px);
        }

        .card-admin{
            background:linear-gradient(135deg,#ff6b00,#ff944d);
        }

        .card-user{
            background:linear-gradient(135deg,#4f46e5,#7c72ff);
        }

        .card-role{
            background:linear-gradient(135deg,#10b981,#34d399);
        }

        .number{
            font-size:40px;
            font-weight:800;
        }

        .icon{
            font-size:45px;
            opacity:.8;
        }

        .menu-card{
            background:white;
            border:none;
            border-radius:25px;
            box-shadow:0 10px 25px rgba(0,0,0,.05);
        }

        .btn-orange{
            background:#ff6b00;
            color:white;
            border:none;
        }

        .btn-orange:hover{
            background:#e55f00;
            color:white;
        }

    </style>

</head>
<body>

<div class="sidebar">

    <h2>
        🍗 BestieGeprek
    </h2>

    <a href="#">
        <i class="fas fa-chart-line"></i>
        Dashboard
    </a>

    <a href="#">
        <i class="fas fa-user-shield"></i>
        Kelola Admin
    </a>

    <a href="#">
        <i class="fas fa-users"></i>
        Kelola User
    </a>

    <a href="#">
        <i class="fas fa-key"></i>
        Hak Akses
    </a>

    <hr>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button class="btn btn-light w-100">
            Logout
        </button>
    </form>

</div>

<div class="main-content">

    <div class="topbar">

        <div class="welcome">
            Halo, Super Admin 👋
        </div>

        <div class="text-muted">
            Selamat datang di Dashboard BestieGeprek
        </div>

    </div>

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card-stat card-admin">

                <div class="d-flex justify-content-between">

                    <div>
                        <div>Total Admin</div>

                        <div class="number">
                            1
                        </div>
                    </div>

                    <div class="icon">
                        <i class="fas fa-user-shield"></i>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card-stat card-user">

                <div class="d-flex justify-content-between">

                    <div>
                        <div>Total User</div>

                        <div class="number">
                            0
                        </div>
                    </div>

                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card-stat card-role">

                <div class="d-flex justify-content-between">

                    <div>
                        <div>Hak Akses</div>

                        <div class="number">
                            3
                        </div>
                    </div>

                    <div class="icon">
                        <i class="fas fa-key"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="card menu-card mt-4">

        <div class="card-body">

            <h4 class="mb-4">
                Menu Super Admin
            </h4>

            <div class="row">

                <div class="col-md-4">

                    <div class="border rounded-4 p-4 text-center">

                        <i class="fas fa-user-shield fa-3x text-warning mb-3"></i>

                        <h5>Kelola Admin</h5>

                        <p class="text-muted">
                            Tambah, edit dan hapus akun admin.
                        </p>

                        <a href="{{ route('admins.index') }}" class="btn btn-orange">
                            Masuk
                        </a>
                        </a>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="border rounded-4 p-4 text-center">

                        <i class="fas fa-users fa-3x text-primary mb-3"></i>

                        <h5>Kelola User</h5>

                        <p class="text-muted">
                            Lihat dan kelola data user.
                        </p>

                        <a href="#" class="btn btn-primary">
                            Masuk
                        </a>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="border rounded-4 p-4 text-center">

                        <i class="fas fa-lock fa-3x text-success mb-3"></i>

                        <h5>Hak Akses</h5>

                        <p class="text-muted">
                            Pengaturan role dan izin sistem.
                        </p>

                        <a href="#" class="btn btn-success">
                            Masuk
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>