<?php 
include 'db.php';
session_start();
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="home.php" aria-current="page">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link">Hello <?php echo $_SESSION["name"];?> </p>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <a class="btn btn-danger rounded btn-md" href="logout.php">Logout</a>&nbsp;
                            <a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="register.php"
                                role="button"
                                >Register</a
                            >  
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
             <div
                class="container "
             >
                <h4 class="text-center bg-light">&copy; All Rights Reserved</h4>
             </div>
             
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


