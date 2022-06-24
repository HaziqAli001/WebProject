<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid w-auto">
        <div class="col py-5 ps-5 pe-3">

            <div class="d-flex justify-content-between my-3">
                <div class="d-flex justify-content-end pt-lg-3">
                    <a href="{{ url('dashboard') }} "><i class=" bi bi-chevron-double-left"></i>Back</a>
                </div>
                <a class="btn btn-primary"><i class="fa fa-plus"></i></a>
            </div>
            <div class="text-center">
                <h3>Our Team</h3>
                <p class="lead">Members of de Café</p>
            </div>
            <ul class="list-group mt-3">
                <li class="list-group-item py-3 bg-dark text-light mb-3">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-12 text-center text-md-start">
                            <p class="m-0 fs-5">Haziq Ali</p>
                            <p class="lead">haziqs2001@gmail.com</p>
                        </div>
                        <div class="col-md-3 col-12 text-center text-md-start">
                            <p class="lead text-center">+923135196859</p>
                        </div>

                        <div class="text-center col-md-5 col-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam modi eveniet fugiat earum,
                                totam eligendi.</p>
                        </div>
                    </div>

                </li>
                <li class="list-group-item py-3 bg-dark text-light mb-3">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-12 text-center text-md-start">
                            <p class="m-0 fs-5">Muhammad Bazil </p>
                            <p class="lead">bazilwatto6@gmail.com</p>
                        </div>
                        <div class="col-md-3 col-12 text-center text-md-start">
                            <p class="lead text-center">+9231123122</p>
                        </div>

                        <div class="text-center col-md-5 col-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam modi eveniet fugiat earum,
                                totam eligendi.</p>
                        </div>
                    </div>


                </li>
                <li class="list-group-item py-3 bg-dark text-light mb-3">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 col-12 text-center text-md-start">
                            <p class="m-0 fs-5">Atif Ibraheem</p>
                            <p class="lead">atif2324@gmail.com</p>
                        </div>
                        <div class="col-md-3 col-12 text-center text-md-start">
                            <p class="lead text-center">+923435345445</p>
                        </div>

                        <div class="text-center col-md-5 col-5">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, praesentium?</p>
                        </div>
                    </div>


                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8fa3510126.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>