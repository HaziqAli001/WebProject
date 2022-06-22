@extends("Layouts.navigation")

@section("title", "Payment")


@section("content")
<div class="boxed-page">

    <div class="row">

        <form method="post" name="contact-us" action="" class="col-6 offset-3 p-5  shadow needs-validation was-validated"">
                <h4 class=" mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                    <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm</button>
        </form>



    </div>
    <form class="needs-validation was-validated" novalidate="">



    </form>
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