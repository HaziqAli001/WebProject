@extends("Layouts.navigation")

@section("title", "SpecialDish")


@section("content")>
<div class="boxed-page">
    <!-- Special Dishes Section -->
    <section id="gtco-special-dishes" class="bg-grey section-padding">
        <div class="container">
            <div class="section-content">
                <div class="heading-section text-center">
                    <span class="subheading">
                        Specialties
                    </span>
                    <h2>
                        Special Dishes
                    </h2>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 align-self-center py-5">
                        <h2 class="special-number">01.</h2>
                        <div class="dishes-text">
                            <h3><span>Beef</span><br> Steak Sauce</h3>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
                            <h3 class="special-dishes-price">$15.00</h3>
                            <a href="{{ url('reservation') }}" class="btn-primary mt-3">book a table</a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                        <img src="img/steak.jpg" alt="" class="img-fluid shadow w-100">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                        <img src="img/salmon-zucchini.jpg" alt="" class="img-fluid shadow w-100">
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                        <h2 class="special-number">02.</h2>
                        <div class="dishes-text">
                            <h3><span>Salmon</span><br> Zucchini</h3>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius. In a quis quibusdam omnis atque vero dolores!</p>
                            <h3 class="special-dishes-price">$12.00</h3>
                            <a href="{{ url('reservation') }}" class="btn-primary mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Special Dishes Section -->
    <footer class="mastfoot pb-5 bg-white section-padding pb-0">
        <div class="inner container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget pr-lg-5 pr-0">
                        <h4>Quetta D'e Cafe</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
                        <nav class="nav nav-mastfoot justify-content-start">
                            <a class="nav-link" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </nav>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="footer-widget px-lg-5 px-0">
                        <h4>Open Hours</h4>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex justify-content-between"><span>Monday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Thursday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Friday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex justify-content-between"><span>Saturday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex justify-content-between"><span>Sunday</span><span> Closed</span></li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="footer-widget pl-lg-5 pl-0">
                        <h4>Newsletter</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <form id="newsletter">
                            <div class="form-group">
                                <input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>

                </div>
                <div class="col-md-12 d-flex align-items-center">
                    <p class="mx-auto text-center mb-0">Copyright 2019. All Right Reserved. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a></p>
                </div>

            </div>
        </div>
    </footer>
</div>

</div>
<!-- External JS -->
@endsection