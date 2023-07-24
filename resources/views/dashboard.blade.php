@extends('layout.master2')

{{-- @push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush --}}

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        html,
        body {
            font-family: 'Poppins', sans-serif;
            /* Use Poppins as the default font */
        }

        /* Adjust the position and appearance of the overlay */
        .card.card-features {
            position: relative;
            overflow: hidden;
        }

        .card.card-features .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 1);
            /* White overlay with opacity 1 (fully opaque) */
            color: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            /* Start with 0 opacity to make the overlay invisible by default */
            transition: opacity 0.3s ease;
        }

        /* Show the overlay on hover */
        .card.card-features:hover .overlay {
            opacity: 1;
            /* Set opacity to 1 on hover to make the overlay fully opaque */
        }

        /* Style the text inside the overlay */
        .card.card-features .overlay h5,
        .card.card-features .overlay p {
            margin: 0;
            padding: 8px;
            text-align: center;
        }

        /* ------------------------CAROUSEL------------------------- */

        /* -----------------------CONTACT US----------------- */
        /* Style for the "Contact Us" section */
        #contact-us {
            background-color: #57B4D4;
            /* Background color similar to the color of a diamond in Minecraft */
            color: #fff;
            /* Text color for the section content */
            padding: 40px 0;
        }

        /* Style for the form inputs and button */
        .form-control {
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-primary-contact {
            background-color: #fff;
            /* Button background color */
            color: #57B4D4;
            /* Button text color */
            border-color: #57B4D4;
            /* Button border color */
        }

        .btn-primary-contact:hover {
            background-color: #57B4D4;
            /* Button background color on hover */
            color: #fff;
            /* Button text color on hover */
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="home">
        <div class="d-flex" style="height: 100vh;background: rgb(21,91,255); background: linear-gradient(135deg, rgba(21,91,255,1) 0%, rgba(82,179,255,1) 40%, rgba(0,212,255,1) 100%);">
            <div class="row d-flex justify-content-start p-4 ">
                <div class="col-8 align-self-center pl-4">
                    <div class="row pl-3">
                        <h1 class="col-12 font-weight-bold text-white mt-4 text-center" style="font-size: 90pt">
                            All-in-One
                            IT Control Center
                        </h1>
                        <span class="col-12 h4 font-weight-bold text-white mt-4">
                            A comprehensive web-based solution to make your IT management simpler and more efficient.
                        </span>
                        <span class="col-12 h4 font-weight-bold text-white mt-0">
                            Get It Now!
                        </span>
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-primary btn-large  shadow   "
                                style="width: 50%; height: 8vh;"><span
                                    class="h5 d-flex justify-content-center mt-3 h-100">Click Here</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="" id="logo">
                        <img src="{{ url('https://placehold.co/550x550') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-padurus">
        <div class="row p-3" style="height: 90vh">
            <div class="col-3 d-flex align-self-center justify-content-end">
                <div data-aos="zoom-out-right">
                    <h1>About PADURUS</h1>
                </div>
            </div>
            <div class="col-9 d-flex align-self-center" style="border-left: 3px solid blue">
                <div data-aos="zoom-out-left">
                    <h5>PADURUS is an integrated IT management solution designed to address the challenges faced by IT
                        solutions
                        providers when monitoring and managing networks, IT devices, and servers across various platforms.
                        The
                        platform offers a centralized and remote-access web-based control center, empowering users to easily
                        monitor, manage, and troubleshoot networks and servers. With an intuitive graphical user interface,
                        automation tools, and real-time alerts, PADURUS streamlines IT management tasks, enabling users to
                        focus
                        on other critical aspects of their growing businesses. In summary, PADURUS simplifies IT management,
                        improves productivity, and ensures seamless control over IT operations</h5>
                </div>
            </div>
        </div>

    </section>

    <section id="features">
        <div class="row" style="height: 95vh">
            <div class="col-1"></div>
            <div class="col-10 " style="height: 95vh">
                <div class="mt-4" style="height: 90vh; background-color: rgb(233, 233, 233);">
                    <div class="row  mb-5" style="height: 10vh">
                        <div class="col-lg-12 col-sm-12 align-self-center">
                            <div data-aos="fade-right">
                                <h1 class="text-center">Tools for teams, from startups to large businesses</h1>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <div class="row " style="height: 50vh">
                            <div class="col-sm-12 d-flex justify-content-around align-self-center">
                                <div class="card card-features mb-4"
                                    style="size: 18rem;width: 18rem; transition: transform 0.5s, opacity 0.5s;">
                                    <img src="{{ url('https://placehold.co/270x270') }}" class="card-img-top img-fluid"
                                        alt="#">
                                    <div class="overlay">
                                        <h5><b>Experience the power of a fully integrated 4-in-1 control system that
                                                streamlines
                                                your IT
                                                solutions. Say goodbye to scattered tools and embrace seamless
                                                management.</b></h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><b>Fully Integrated</b></h5>
                                    </div>
                                </div>
                                <div class="card card-features mb-4">
                                    <img src="{{ url('https://placehold.co/270x270') }}" class="card-img-top img-fluid"
                                        alt="#">
                                    <div class="overlay">
                                        <h5><b>Control your IT operations from anywhere with our accessible web-based
                                                center. Say
                                                hello
                                                to easy monitoring and management on-the-go.
                                            </b></h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><b>Remotely Accessible</b></h5>
                                    </div>
                                </div>
                                <div class="card card-features mb-4">
                                    <img src="{{ url('https://placehold.co/270x270') }}" class="card-img-top img-fluid"
                                        alt="#">
                                    <div class="overlay">
                                        <h5><b>Transition from complex scripts to user-friendly visuals. Our functional
                                                interface
                                                empowers you to simplify IT tasks and navigate with ease.
                                            </b></h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><b>Functional Interface</b></h5>
                                    </div>
                                </div>
                                <div class="card card-features mb-4">
                                    <img src="{{ url('https://placehold.co/270x270') }}" class="card-img-top img-fluid"
                                        alt="#">
                                    <div class="overlay">
                                        <h5><b> Stay one step ahead with real-time alerts on network status changes. Receive
                                                immediate
                                                notifications to ensure a responsive and secure IT environment.</b></h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><b>Real-time Alerts</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </section>

    <section id="price-plan">
        <div class="row" style="height: 90vh;">
            <div class="col-1"></div>
            <div class="col-10">
                    <div class="row align-item-center" style="height: 50vh">
                        <div class="col-4" style="height: 50vh">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="400">
                                <div class="card"
                                    style="height: 50vh; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1), -4px 0px 8px rgba(0, 0, 0, 0.1);">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1>Plan title</h1>
                                            </div>
                                            <div class="col-12">RM Price/mo</div>
                                            <div class="col-12">
                                                <button class="btn btn-primary">Buy now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div class="card"
                                    style="height: 50vh; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1), -4px 0px 8px rgba(0, 0, 0, 0.1);">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1>Plan title</h1>
                                            </div>
                                            <div class="col-12">RM Price/mo</div>
                                            <div class="col-12">
                                                <button class="btn btn-primary">Buy now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <div class="card" style="height: 50vh; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1), -4px 0px 8px rgba(0, 0, 0, 0.1);">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1>Plan title</h1>
                                            </div>
                                            <div class="col-12">RM Price/mo</div>
                                            <div class="col-12">
                                                <button class="btn btn-primary">Buy now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-1"></div>
        </div>
    </section>

    <section id="dashboard">
        <div class="col-12">
            <h1 class="text-center">Look how cool our system is</h1>
        </div>
        <div class="row" style="height: 90vh;">
            <div class="col-6 d-flex justify-content-end">
                <div data-aos="fade-down-right" data-aos-duration="500">
                    <img src="{{ url('https://placehold.co/700x400') }}" alt="">
                </div>
            </div>
            <div class="col-6">
                <div data-aos="fade-down-left" data-aos-duration="500">
                    <img src="{{ url('https://placehold.co/700x400') }}" alt="">
                </div>
            </div>
            <div class="col-6  d-flex justify-content-end">
                <div data-aos="fade-top-right" data-aos-duration="500">
                    <img src="{{ url('https://placehold.co/700x400') }}" alt="">
                </div>
            </div>
            <div class="col-6">
                <div data-aos="fade-top-left" data-aos-duration="500">
                    <img src="{{ url('https://placehold.co/700x400') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact Us</h2>
                    <p>Feel free to get in touch with us. We are here to help!</p>

                    <!-- Contact Information -->
                    <h4>Contact Information</h4>
                    <p>Address: 123 Main Street, City</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Email: info@example.com</p>

                    <!-- Contact Form -->
                    
                </div>
                <div class="col-md-6">
                    <h4>Contact Form</h4>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-contact">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function() {
            // Initialize Bootstrap tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });
        // ---------------------CAROUSEL----------------------------

        // ---------------------SECTION ANIMATION-------------------
        // Function to check if the about section is in the viewport
    </script>
@endsection


{{-- @push('plugin-scripts')
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush --}}

{{-- @push('custom-scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush --}}
