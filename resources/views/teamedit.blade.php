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
    <div class="container-fluidn col py-5 ps-5 pe-3">
        <div class="d-flex justify-content-between my-3">
            <div class="d-flex justify-content-end pt-lg-3">
                <a href="{{ url('teamadmin') }}"><i class=" bi bi-chevron-double-left"></i>Back</a>
            </div>
        </div>
        <div class="container">
            <div class="text-center">
                <h3>Our Team</h3>
                <p class="lead">Edit a Member</p>
            </div>
            <div class="team-card">
                <p><i class="fa-duotone fa-calendar-range w-100"></i></p>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="p-5">
                <form action="{{url('teamcontroller')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="categoryName">Image</label>
                        <input type="file" name="image" id="categoryName" class="form-control" placeholder="Upload image">

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="name" id="categoryName" class="form-control" placeholder="Enter Category Name">
                        <label for="categoryName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="designation" id="categoryName" class="form-control" placeholder="Enter Category Name">
                        <label for="categoryName">Designation</label>
                    </div>


                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-6 col-12 d-flex justify-content-center my-2">
                            <button type="submit" class="btn btn-success px-5 fs-5">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8fa3510126.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>