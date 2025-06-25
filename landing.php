<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University Hostel Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/big/icon.png">
    <style>
    body,
    * {
        font-family: Arial, sans-serif;


    }

    .navbar {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .carousel-item {
        position: relative;
    }

    .carousel-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Dark overlay */
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        z-index: 2;
    }

    .carousel-item img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    #features {
        background: #f8f9fa;
        /* Light background for contrast */
    }

    .feature-card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
    }

    .feature-icon {
        font-size: 40px;
        color: #c2c2;
        /* Bootstrap primary color */
    }

    .card:hover {
        transform: scale(1.05);
        transition: 0.3s ease-in-out;
    }

    .gallery img {
        transition: transform 0.3s;


    }



    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .gallery img:hover {
        transform: scale(1.1);
    }



    footer {
        background: #222;
    }

    .preview-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/big/icon.png" alt="logo" srcset=""> HOSTEL HUB
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rooms">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
                       <li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="position-relative">
        <div id="hostelCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/3.jpg" class="d-block w-100" alt="Hostel Image 1">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="fw-bold">Welcome to Our Premium Hostel</h2>
                        <p class="lead">Experience comfort and convenience like never before.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/2.jpg" class="d-block w-100" alt="Hostel Image 2">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="fw-bold">Modern & Affordable Living</h2>
                        <p class="lead">Find your perfect space with us.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/4.jpg" class="d-block w-100" alt="Hostel Image 3">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="fw-bold">A Home Away from Home</h2>
                        <p class="lead">Enjoy comfort, security, and community.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hostelCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hostelCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <section id="features" class="py-5 text-center bg-light">
        <div class="container">
            <h2 class="fw-bold text-dark">Key Features</h2>
            <p class="lead text-muted">Discover the benefits of staying with us</p>
            <div class="row mt-5">
                <div class="col-md-4 mb-2 mb-3">
                    <div class="feature-card">
                        <i class="fas fa-calendar-check feature-icon"></i>
                        <h4 class="fw-bold mt-3">Online Booking</h4>
                        <p class="text-muted">Reserve your hostel room from anywhere, anytime.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="feature-card">
                        <i class="fas fa-lock feature-icon"></i>
                        <h4 class="fw-bold mt-3">Secure Payments</h4>
                        <p class="text-muted">Pay your hostel fees securely through our platform.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-headset feature-icon"></i>
                        <h4 class="fw-bold mt-3">Student Support</h4>
                        <p class="text-muted">24/7 support for all hostel-related servicing queries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="rooms" class="py-4 bg-light text-center">
        <div class="container">
            <h2>Hostels</h2>

            <div class="row mt-4" id="hostel-list">
                <!-- Hostels will be loaded here dynamically -->

            </div>
        </div>
    </section>

    <section id="gallery" class="py-4 text-center">
        <div class="container">
            <h2 class="fw-bold text-secondary">Room Gallery</h2>
            <div class="row mt-4 gallery">
                <div class="col-md-3 col-6 mb-3">
                    <img src="assets/images/110.jpg" class="img-fluid rounded preview-img" alt="Gallery Image 1"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-img="assets/images/110.jpg">
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <img src="assets/images/56.jpg" class="img-fluid rounded preview-img" alt="Gallery Image 2"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-img="assets/images/56.jpg">
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <img src="assets/images/220.jpg" class="img-fluid rounded preview-img" alt="Gallery Image 3"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-img="assets/images/220.jpg">
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <img src="assets/images/7.jpg" class="img-fluid rounded preview-img" alt="Gallery Image 4"
                        data-bs-toggle="modal" data-bs-target="#imageModal" data-img="assets/images/7.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" class="img-fluid rounded" src="" alt="Preview">
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const previewImages = document.querySelectorAll(".preview-img");
        const modalImage = document.getElementById("modalImage");

        previewImages.forEach(img => {
            img.addEventListener("click", function() {
                const imgSrc = this.getAttribute("data-img");
                modalImage.setAttribute("src", imgSrc);
            });
        });
    });
    </script>

    <footer class="bg-dark text-white  py-4">
        <div class="container">
            <div class="row">
                <!-- Contact Us Section -->
                <div class="col-md-4 mb-3">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-phone-alt"></i> +223 234 567 890</p>
                    <p><i class="fas fa-envelope"></i> info@hostelmanagement.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Hostel Street, Accra,Ghana</p>
                </div>



                <!-- Social Media -->
                <div class="col-md-4 mb-3">
                    <h5>Follow Us</h5>
                    <div>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="col-md-4 mb-3">
                    <h5>Our Location</h5>
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9170296813314!2d-122.08424968531078!3d37.4219997798255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDI1JzEwLjMiTiAxMjLCsDA1JzAyLjAiVw!5e0!3m2!1sen!2sus!4v1616161616161!5m2!1sen!2sus"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

            <hr class="my-3 border-light">
            <p class="mb-0">&copy; 2025 University Hostel Management. All rights reserved.</p>
        </div>
    </footer>
    <!-- Font Awesome for Icons (Make sure to include this in your project) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script src="hostel.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const hostelList = document.getElementById("hostel-list");

        hostels.forEach(hostel => {
            const hostelCard = document.createElement("div");
            hostelCard.classList.add("col-md-4", "mb-3");

            hostelCard.innerHTML = `
                    <div class="card shadow-lg">
                        <a href="room-details.php?id=${hostel.id}">
                            <img src="${hostel.image}" class="card-img-top" alt="${hostel.name}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">${hostel.name}</h5>
                           <h5 class="card-title">${"⭐".repeat(hostel.rating)}${hostel.rating} </h5>
                            
                    </div>
                `;

            hostelList.appendChild(hostelCard);
        });
    });
    </script>

</body>

</html>