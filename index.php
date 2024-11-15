<?php include('layouts/header.php'); ?>

<body>
    <header class="bg-primary text-white text-center py-4">
        <div class="container">
            <h1>Consulta de Signo Zodiacal</h1>
            <p class="lead">Descubra o seu signo zodiacal com base na sua data de nascimento</p>
        </div>
    </header>

    <section class="container mt-5">
        <h2 class="text-center mb-4">Informe sua Data de Nascimento</h2>
        
        <form action="show_zodiac_sign.php" method="POST" class="w-50 mx-auto p-4 border rounded shadow">
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Consultar Signo</button>
        </form>
    </section>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">Consulta de Signo Zodiacal &copy; 2023</p>
    </footer>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
