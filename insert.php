<?php
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $pname = $_POST["pname"];
        $category = $_POST["category"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $brand = $_POST["brand"];
        $description = $_POST["description"];

        $sql = $conn -> prepare("insert into products(p_name,category,price,quantity,brand,description) values (?,?,?,?,?,?);");
        $sql -> bind_param("ssiiss",$pname,$category,$price,$quantity,$brand,$description);
        if($sql-> execute()){
            header("Location:home.php");
        }
        else{
            echo "Not Inserted";
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
            <h3 class ="text-center my-3">Insert the Products</h3>
            <div
                class="container col-6 bordered shadow rounded text-center my-3 p-3"
            >
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Product Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input
                            type="text"
                            class="form-control"
                            name="category"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input
                            type="number"
                            class="form-control"
                            name="price"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Quantity</label>
                        <input
                            type="number"
                            class="form-control"
                            name="quantity"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Brand</label>
                        <input
                            type="text"
                            class="form-control"
                            name="brand"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input
                            type="text"
                            class="form-control"
                            name="description"
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
