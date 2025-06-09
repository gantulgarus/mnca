<!DOCTYPE html>
<html lang="mn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ Хяналтын Самбар</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 12px 16px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            padding: 20px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-0">
                <h4 class="text-center py-3 border-bottom border-secondary">Админ</h4>
                <a href="{{ route('dashboard') }}">Хянах самбар</a>
                <a href="#">Албад</a>
                <a href="{{ route('human-resources.index') }}">Хүний нөөц</a>
                <a href="#">Тохиргоо</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 content">
                <nav class="navbar navbar-expand navbar-light bg-white shadow-sm mb-4">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h5">Хянах Самбар</span>

                        <div class="d-flex align-items-center ms-auto gap-3">
                            <!-- Хэрэглэгчийн нэрийг харуулах -->
                            @auth
                                <span>Сайн байна уу, <strong>{{ Auth::user()->name }}</strong></span>
                            @endauth

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    Гарах
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>


                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
