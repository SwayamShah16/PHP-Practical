<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $gender = $_POST["gender"];
    $pass = password_hash($_POST["pass"],PASSWORD_DEFAULT);

    $sql = $conn -> prepare("insert into users(f_name,l_name,username,email,phone,city,gender,password) values (?,?,?,?,?,?,?,?);");
    $sql -> bind_param("ssssisss",$fname,$lname,$uname,$email,$phone,$city,$gender,$pass);
    if($sql -> execute()){
        header("Location:login.php");
    }

}
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
            <!-- place navbar here -->
        </header>
        <main>
            <h3 class="text-center my-3">Register with Us</h3>
            <div
                class="container col-6 border shadow rounded my-3 p-4"
            >
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="fname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="lname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            name="uname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input
                            type="number"
                            class="form-control"
                            name="phone"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">City</label>
                        <select
                            class="form-select form-select-md"
                            name="city"
                            id=""
                        >
                            <option selected>Select one</option>
                            <option value="New Delhi">New Delhi</option>
                            <option value="Istanbul">Istanbul</option>
                            <option value="Jakarta">Jakarta</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Gender</label>
                        <select
                            class="form-select form-select-md"
                            name="gender"
                            id=""
                        >
                            <option selected>Select one</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="pass"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
