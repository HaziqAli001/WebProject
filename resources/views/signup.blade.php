@extends("Layouts.navigation")

@section("title", "Signup")


@section("content")
<h1 class="backtext">Quetta De'Cafe</h1>
<div class="container p-5">
    <div class="row">
        <div class="col-lg-5 offset-3">
            <div class="section-content bg-white p-5 shadow">
                <div class="heading-section text-center">

                    <h2>
                        Sign Up
                    </h2>
                </div>
                <form onsubmit="return SignupValidation();" action="signin.html">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="password">Name</label>

                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            <span id="errN" class="text-danger fw-bold"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Email</label>

                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            <span id="errE" class="text-danger fw-bold"></span>

                        </div>
                        <div class="col-md-12 form-group">
                            <label for="Phone Number">Phone Number</label>

                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                            <span id="errph" class="text-danger fw-bold"></span>

                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <span id="errp" class="text-danger fw-bold"></span>

                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Re-Enter Password">
                            <span id="errp" class="text-danger fw-bold"></span>

                        </div>

                        <div class="col-md-12 text-center">
                            <input type="submit" class="signin" value="Sign Up">
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <p>Already have an account?</p>
                            <a href="{{ url('signin')}}">Sign In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</section>
<script src="./js/re.js"></script>

@endsection