@extends("Layouts.navigation")

@section("title", "Order")


@section("content")
<div class="boxed-page">

    <div class="row">

        <form class="col-sm-10 col-lg-4 offset-1 p-5  shadow">
            <h2>
                Order Now
            </h2>
            <div class="row">
                <div class="col-md-12 form-group mt-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="address" name="email" placeholder="Email">
                </div>
                <div class="col-md-12 form-group">
                    <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>




                <div class="col-md-12 form-group">
                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                </div>
                <div class="col-md-12 text-center mb-4">
                    <input type="submit" value="Checkout">
                </div>
            </div>
        </form>

        <div class="col-sm-9 col-lg-5 offset-1 justify-content-between d-flex flex-column   shadow  ">
            <div>
                <h2 class="m-4">
                    Items
                </h2>
                <div class=" row align-items-center item text-white  mt-3">

                    <div class=" col-md-4">

                        <img src="img/breakfast-1.jpg" class="img-fluid rounded-5" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="">
                            <p class="small  mb-4 pb-2">Name</p>
                            <p class="lead fw-normal mb-0">Steak</p>
                        </div>
                    </div>

                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <div>
                            <p class="small  mb- pb-2">Quantity</p>
                            <div class="d-flex ">
                                <button class="btn btn-link" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fa fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm " />

                                <button class="btn btn-link " onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                            <p class="small  mb-4 pb-2">Price</p>
                            <p class="lead fw-normal mb-0">$799</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row   d-flex justify-content-between p-3 shadow text-white " style="background-color: #ff5344;">
                <h5 class="fw-bold mb-0">Total:</h5>
                <h5 class="fw-bold mb-0">2261$</h5>
            </div>
        </div>

    </div>
    <footer class="mastfoot pb-5 bg-white section-padding pb-0">
        <div class="inner container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget pr-lg-5 pr-0">
                        <h4>Quetta D'e Cafe</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit
                            omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt
                            modi? Magni, et voluptatum dolorem.</p>
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
                            <li class="d-flex justify-content-between"><span>Monday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class="d-flex justify-content-between"><span>Tuesday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class="d-flex justify-content-between"><span>Wednesday</span><span>9:00 -
                                    24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Thursday</span><span>9:00 -
                                    24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Friday</span><span>9:00 - 02:00</span>
                            </li>
                            <li class="d-flex justify-content-between"><span>Saturday</span><span>9:00 -
                                    02:00</span></li>
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

@endsection