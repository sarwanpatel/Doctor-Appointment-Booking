<footer class="bg-dark text-center text-white">
    <div class="container p-4 pb-0">
        <section class="mb-4">
            <a class="btn btn-light btn-floating m-1" href="{{ route('home') }}">Home</a>
            <a class="btn btn-light btn-floating m-1" href="{{ route('team') }}">Our Team</a>
            <a class="btn btn-light btn-floating m-1" href="{{ route('about') }}">About</a>
            <a class="btn btn-light btn-floating m-1" href="{{ route('service') }}">Service</a>

            <a class="btn btn-light btn-floating m-1" href="{{ route('home') }}#appointment-section">Book An
                Appointment</a>
            <a class="btn btn-light btn-floating m-1" href="{{ route('registration') }}">Registration</a>
            <a class="btn btn-light btn-floating m-1" href="{{ route('login') }}">Login</a>
        </section>
        <section class="">
            <form action="">
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example2" class="form-control" />
                            <label class="form-label" for="form5Example2">Email address</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Subscribe
                        </button>
                    </div>
                </div>
            </form>
        </section>

    </div>


    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="#">Doctor</a>
    </div>
</footer>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
