<html>

<head>
    <title>Expense Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./styles/custom.css">
    <script type="text/javascript" src="./scripts/custom.js"></script>
</head>

<data-spy="scroll" data-target="#navbarSupportedContent">

    <body>

        <!-- navbar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" id="stickynavbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- navbar -->

        <!-- Box 1 -->

        <section id="Expense-Manager" class="MANAGE-BUDGET ">

            <div class="col mx-auto align-items-center my-2">
                <div class="heading text-center">
                    <h2 class="font-weight-bold pb-2 text-light">Expense Manager</h2>
                </div>
                <div class="row mx-auto justify-content-center align-items-center text-center container">
                    <div class="col-sm-12 col-md-4 col-lg-7">
                        <div class="one m-4 align-items-center">
                            <h4>Grocery</h4>
                            <form>
                                <table class="table" id="dynamic_fields">
                                    <thead>
                                        <tr class="justify-content-center align-items-center text-center">
                                            <th scope="col"> </th>
                                            <th scope="col">Products</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                                            <td><input type="text" class="form-control" id="name0" placeholder="Enter Product" data-index="0" ></td>
                                            <td><input type="number" class="form-control price" id="price0" placeholder="Enter price" data-index="0" > </td>
                                            <td>
                                                <select id="quantity0" class="custom-select quantity" data-index="0" required>
                                                    <option value="0">Select </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="3">4</option>
                                                    <option value="3">5</option>
                                                    <option value="3">6</option>
                                                    <option value="3">7</option>
                                                    <option value="3">8</option>
                                                    <option value="3">9</option>
                                                    <option value="3">10</option>
                                                </select>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div>
                                    <table class="table">
                                        <tr class=" total-btn text-right">
                                            <td scope="col"></td>

                                            <td scope="col" class="total-text"><b>Total: </b></td>
                                            <td scope="col" class="total-field"><output class="form-control" placeholder="Total" id="Total"></output></td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Box 1 -->

        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark pt-4 text-light fixed-bottom">

            <div class="footer-copyright text-center py-3">© 2021 Copyright</div>

        </footer>
        <!-- Footer -->
    </body>



</html>