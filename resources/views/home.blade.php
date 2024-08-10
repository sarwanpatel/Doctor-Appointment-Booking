@extends('frontend.layouts.master')


<style>
    @media screen and (orientation: landscape) {
        .carousel img {
            height: 100vh;
        }
    }


    .custom-heading {
        font-size: 3em;
        /* Adjust the size as needed */
        color: orange;
    }
</style>
@section('main-content')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/images/doctor2.jpg') }}" class="d-block w-100" style="height:600"
                    alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center">
                    <h2 class="bg-dark bg-opacity-50 py-2 px-4">Custom Doctor Appointment Booking Software</h2>
                    <p class="bg-dark bg-opacity-50 py-2 px-4">A white label patient appointment bookings system..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/doctor4.jpg') }}" class="d-block w-100" style="height:600"
                    alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center">
                    <h2 class="bg-dark bg-opacity-50 py-2 px-4">Leading-edge Medical Expertise</h2>
                    <p class="bg-dark bg-opacity-50 py-2 px-4">Cutting-edge Technology..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/doctor3.jpg') }}" class="d-block w-100" style="height:600"
                    alt="...">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center">
                    <h2 class="bg-dark bg-opacity-50 py-2 px-4">Comprehensive Specialties</h2>
                    <p class="bg-dark bg-opacity-50 py-2 px-4">Patient-centric Approach</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <section class="about-section p-b-100 mt-5">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-xl-row">
                <div class="col-xxl-6 col-xl-5 after-rectangle-shape position-relative about-left-content left-shape">
                    <div class="row position-relative z-index-1">
                        <div class="col-xl-6 col-md-3 about-block">
                            <div class="about-image-box rounded-20 bg-white">
                                <img src="https://infycare-demo.nyc3.digitaloceanspaces.com/130/infycare2.jpeg"
                                    alt="About" class="img-fluid rounded-20 object-image-cover" />
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-3 about-block">
                            <div class="about-image-box rounded-20 bg-white">
                                <img src="https://infycare-demo.nyc3.digitaloceanspaces.com/129/infycare1.jpeg"
                                    alt="About" class="img-fluid rounded-20 object-image-cover" />
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-3 about-block">
                            <div
                                class="about-content-box rounded-20 bg-white d-flex align-items-center justify-content-center h-100">
                                <div class="text-center">
                                    <h2 class="number-big text-primary">20</h2>
                                    <p class="mb-0">Year Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-3 about-block">
                            <div class="about-image-box bg-white rounded-20">
                                <img src="https://infycare-demo.nyc3.digitaloceanspaces.com/131/infycare3.jpeg"
                                    alt="About" class="img-fluid rounded-20 object-image-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7">
                    <div class="about-right-content mb-md-5 mb-4 mb-xl-0 text-center text-xl-start">
                        <h5 class="text-primary top-heading fs-6 mb-3">About Us</h5>
                        <h2 class="pb-2">Book your clinic appointment with an ease</h2>
                        <p class="paragraph pb-1">
                            A feature rich and comprehensive medical appointment scheduling software solution to deliver
                            fast and reliable appointment booking experience to patients.
                        </p>
                        <ul class="d-flex ps-0 mb-4 pb-2 justify-content-center justify-content-xl-start flex-wrap">
                            <li class="mb-2">Emergency Help</li>

                        </ul>
                        <a href="#" class="btn btn-primary " data-turbo="false">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-work-section p-t-100 p-b-100 mt-5" style="background-color: #f3f5f8; height:450">
        <div class="container mt-5">
            <div class="text-center mb-lg-5 mb-4 mt-5">
                <h5 class="text-primary top-heading fs-6 mb-3 pt-5">Working Process</h5>
                <h2 class="pb-2">How we works?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="card mx-lg-2 h-100 text-md-start text-center">
                        <div class="card-body">
                            <h3 class="card-number mb-4 pb-3 custom-heading">
                                1
                            </h3>
                            <h4 class="card-title fs-5">
                                Registration
                            </h4>
                            <p class="paragraph mb-0">
                                Patient can do registration from here with basic information.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-md-0 mt-4">
                    <div class="card mx-lg-2 h-100 text-md-start text-center">
                        <div class="card-body">
                            <h3 class="card-number mb-4 pb-3 custom-heading">
                                2
                            </h3>
                            <h4 class="card-title fs-5">
                                Make Appointment
                            </h4>
                            <p class="paragraph mb-0">
                                Patient can book an appointment with doctor from landing page or from his login panel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-xl-0 mt-4 pt-xl-0 pt-lg-3">
                    <div class="card mx-lg-2 h-100 text-md-start text-center">
                        <div class="card-body">
                            <h3 class="card-number mb-4 pb-3 custom-heading">
                                3
                            </h3>
                            <h4 class="card-title fs-5">
                                Take Treatment
                            </h4>
                            <p class="paragraph mb-0">
                                Doctors can interact with patients and do related treatment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="appointmnet-section p-t-100 p-b-100 mb-5 mt-5" id="appointment-section">
        <div class="container">
            <div class="bg-primary border-bmr-100 appointmnet-section__inner-block">
                <div class="row align-items-center">
                    <div class="col-lg-6 align-self-end d-none d-lg-block">
                        <img src="https://infycare.infyom.com/assets/front/images/appointment.png"
                            alt="Book An Appointment" class="img-fluid object-image-cover" />
                    </div>
                    <div class="col-lg-6 contact-form p-5">
                        <h2 class="pb-2 text-white text-center mb-4 pb-3">Book An Appointment</h2>
                        <form method="POST" action="{{ route('appointmentbook') }}">
                            @csrf
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                            <div class="row">
                                <div class="col-lg-6 p-1">
                                    <div class="contact-form__input-block">
                                        <input name="first_name" type="text"
                                            class="form-control required form-control-transparent"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                @if ($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                                <div class="col-lg-6 p-1">
                                    <div class="contact-form__input-block">
                                        <input type="text" name="last_name"
                                            class="form-control required form-control-transparent"
                                            placeholder="Last Name">
                                    </div>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <div class="col-lg-6 p-1">
                                    <div class="contact-form__input-block">
                                        <input type="email" name="email"
                                            class="form-control required form-control-transparent" placeholder="Email">
                                    </div>
                                </div>

                                @if ($errors->has('doctor'))
                                    <span class="text-danger">{{ $errors->first('doctor') }}</span>
                                @endif
                                <div class="col-lg-6 p-1">
                                    <div class="contact-form__input-block">
                                        <select class="form-select form-control-transparent" data-control="select2"
                                            id="frontDoctorId" name="doctor">
                                            <option selected="selected" value="">Select Doctor</option>
                                            <option value="govind gurjar">govind gurjar</option>
                                            <option value="Hacked TurkHacks">Hacked TurkHacks</option>
                                            <option value="Dk Patel">Dk Patel</option>
                                            <option value="Preston Cooley">Preston Cooley</option>
                                        </select>
                                    </div>
                                </div>
                                @if ($errors->has('slot'))
                                    <span class="text-danger">{{ $errors->first('slot') }}</span>
                                @endif
                                <div class="col-lg-6 p-1">
                                    <div class="contact-form__input-block">
                                        <select class="form-select form-control-transparent" data-control="select2"
                                            id="frontDoctorId" name="slot">
                                            <option selected="selected" value="">Select slot</option>
                                            <option value="1">Slot 09:00 to 11:00</option>
                                            <option value="2">Slot 12:00 to 2:00</option>
                                            <option value="3">Slot 03:00 to 05:00</option>
                                            <option value="4">Slot 06:00 to 07:00</option>
                                        </select>
                                    </div>
                                </div>

                                @if ($errors->has('date'))
                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                @endif
                                <div class="col-lg-6 p-1">
                                    <div class="" style="background: #2c3e4e">
                                        <input type="text" name="date" id="datepicker" width="276"
                                            class="form-control" placeholder="Select Date" autocomplete="true">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center mt-4">
                                    <button type="submit" class="btn btn-light">Appointment Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
@endsection
