<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'agriculteurs</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/style.css'); ?>">
</head>
<body style="background: #9fd8bd;">
    <div class="container p-5">
    <h1 class="">Ajouter un agriculteur</h1>
        <div class="row my-4 vertical-center">
            <div class="col-lg-12">
                <div class="card shadow" style="border-radius: 24px;">
                    <div class="p-2">
                    <form class="" action="#" id="form-submit" novalidate>
                        <div class="d-flex justify-content-start" style=" border:red 1px solid; margin-left:-30px">
                            <div class=" form-check">
                                <input value="Mr." type="radio" class="form__radio-input" id="exampleCheck1" name="gender" checked>
                                <label class="form__radio-label" for="exampleCheck1">Mr.</label>
                            </div>
                            <div class="form-check">
                                <input value="Mme." class="form__radio-input" type="radio" id="exampleCheck1" name="gender">
                                <label class="form__radio-label" for="exampleCheck1">Mme.</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between col-12 p-4">
                                <div class="mb-3 col-3">
                                    <input type="text" name="firstname" class="form-control fs-5 border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom" required>
                                    <div class="invalid-feedback">FirstName is Required</div>
                                    <button type="submit" class="btn btn-success fs-5 mt-4" id="btn-form">Ajouter</button>
                                </div>
                                <div class="mb-3 col-3">
                                    <input type="text" name="lastname" class="form-control fs-5 border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prénom" required>
                                    <div class="invalid-feedback">LastName is Required</div>
                                </div>
                            
                                <div class="mb-3 col-3">
                                    <select name="age" class="form-select overflow-hidden p-3 fs-5 border-dark" size="3" aria-label=" select example" value="" required>
                                        <option disabled selected value>Tranche d'age <span class="bi bi-chevron-down"></span></option>
                                        <option value="40-50">40-50</option>
                                        <option value="30-40">30-40</option>
                                    </select>
                                    <div class="invalid-feedback">Age is Required</div>
                                </div>
                        </div>
                        </form>
                        <div class="p-4">
                        <table class="table table-borderless table-hover fs-3">
                            <thead>
                                <tr style="border-bottom: 1px solid black;">
                                <th scope="col"></th>
                                <th scope="col">Cvl</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th><span class="bi bi-x-lg fs-3"></span></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>28</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/jquery-3.6.0.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/validation.js'); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>