@extends("Layouts.navigation")

@section("title", "Sign In")


@section("content")
<h1 class="backtext">Quetta De'Cafe</h1>

<div class="container p-5">
    <div class="row">
        <div class="col-lg-5 offset-3">
            <div class="section-content bg-white p-5 shadow">
                <div class="heading-section text-center">

                    <h2>
                        Sign In
                    </h2>
                </div>
                <form onsubmit="return signinvalidation();" action="index.html">
                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for="password">Email</label>

                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <span id="errE" class="text-danger fw-bold"></span>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <span id="errp" class="text-danger fw-bold"></span>

                        </div>


                        <div class="col-md-12 text-center">
                            <input type="submit" value="SignIn">
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <p>Dont have an account?</p>
                            <a href="signup.html">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</section>
@endsection