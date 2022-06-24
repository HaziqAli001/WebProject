@extends("Layouts.navigation")

@section("title", "reservation")


@section("content")
<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Reservation
                        </span>
                        <h2>
                            Book Now
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="{{ url('formcontroller') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                    <input name="date" type="date" class="form-control" data-target="#datetimepicker4" placeholder="Date" id="date" />

                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                    <input name="time" type="time" class="form-control " data-target="#datetimepicker3" placeholder="Time" id="time" />

                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson" name="select">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End of Reservation Section -->
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

</div>
@endsection