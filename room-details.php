<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/big/icon.png">
</head>
<style>
.thumbnail {
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin: 5px;
    border-radius: 5px;
    cursor: pointer;
    border: 2px solid #dee2e6;
}

.thumbnail:hover {
    border-color: #0d6efd;
}

.review-card {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

#room-image {
    width: 400px;
    height: 300px;
    object-fit: cover;
    border-radius: 5px;
    border: 2px solid #dee2e6;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://hostelhub.thsite.top/landing.php">
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
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <!-- Image and Gallery Section -->
            <div class="col-md-6">
                <img id="room-image" src="" alt="Room Image" class="img-fluid rounded shadow-lg main-image">
                <div id="gallery" class=" mt-3 flex-wrap"></div>
            </div>

            <!-- Room Details Section -->
            <div class="col-md-6">
                <h2 id="room-title" class="mb-3 text-primary"></h2>
                <p id="room-description" class="text-muted"></p>
                <div id="room-prices"></div> <!-- Container for multiple prices -->
                <p><strong>Occupation:</strong> <span id="room-occupation"></span></p>
                <p><strong>Availability:</strong> <span id="room-availability"></span></p>
                <p><strong>Rating:</strong> <span id="room-rating"></span></p>

                <!-- Book Now Button -->
                <a href="index.php" class="btn btn-success w-100 shadow-sm">Book Now</a>

                <!-- Payment Methods -->
                <div class="mt-3">
                    <p class="mb-1"><strong>We Accept:</strong></p>
                    <div class="d-flex flex-wrap">
                        <img src="assets/images/vsa.png" alt="Visa" class="me-3 mb-2" style="height:50px;">
                        <img src="assets/images/momo.png" alt="Mastercard" class="me-3 mb-2" style="height:50px;">
                        <img src="assets/images/payl.png" alt="Mobile Money" class="me-3 mb-2" style="height:50px;">
                        <img src="assets/images/ms.jpeg" alt="PayPal" class="me-3 mb-2" style="height:50px;">
                    </div>
                </div>
            </div>



        </div>

        <!-- Reviews Section -->
        <div class=" mt-5">
            <h3 class="text-primary">Reviews</h3>
            <div id="reviews-list" class="list-group"></div>

            <!-- Add Review Form -->
            <div class="mt-4">
                <h5>Add a Review</h5>
                <form id="review-form">
                    <div class="mb-2">
                        <input type="text" id="reviewer-name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-2">
                        <select id="review-rating" class="form-control" required>
                            <option value="">Select Rating</option>
                            <option value="5">⭐⭐⭐⭐⭐ (5 Stars)</option>
                            <option value="4">⭐⭐⭐⭐ (4 Stars)</option>
                            <option value="3">⭐⭐⭐ (3 Stars)</option>
                            <option value="2">⭐⭐ (2 Stars)</option>
                            <option value="1">⭐ (1 Star)</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <textarea id="review-comment" class="form-control" placeholder="Your Review" rows="3"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        </div>

    </div>


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

    <script src="hostel.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const params = new URLSearchParams(window.location.search);
        const roomId = parseInt(params.get("id"));

        const hostel = hostels.find(h => h.id === roomId);

        if (hostel) {
            loadRoomDetails(hostel);
            loadGallery(hostel);
            loadReviews(hostel);
        } else {
            document.querySelector(".container").innerHTML =
                "<h3 class='text-danger text-center'>Room not found</h3>";
        }

        // Handle Review Submission
        document.getElementById("review-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const name = document.getElementById("reviewer-name").value.trim();
            const rating = parseInt(document.getElementById("review-rating").value);
            const comment = document.getElementById("review-comment").value.trim();

            if (!name || !rating || !comment) return;

            addReviewToPage(name, rating, comment);

            // Clear form
            document.getElementById("review-form").reset();
        });
    });

    function loadRoomDetails(hostel) {
        document.getElementById("room-title").textContent = hostel.name;
        document.getElementById("room-image").src = hostel.image;
        document.getElementById("room-description").textContent = hostel.description;
        document.getElementById("room-occupation").textContent = hostel.occupation;
        document.getElementById("room-availability").textContent = hostel.availability;
        document.getElementById("room-rating").innerHTML = "⭐".repeat(Math.round(hostel.rating));

        const roomPricesContainer = document.getElementById("room-prices");

        // ✅ Ensure the container exists before modifying it
        if (!roomPricesContainer) {
            console.error("Missing #room-prices in HTML");
            return;
        }

        roomPricesContainer.innerHTML = ""; // Clear previous prices

        console.log("roomPrice Data:", hostel.roomPrice); // Debugging line

        if (hostel.roomPrice) {
            if (Array.isArray(hostel.roomPrice)) {
                // ✅ Handle array case
                hostel.roomPrice.forEach(room => {
                    const priceItem = document.createElement("p");
                    priceItem.innerHTML =
                        `<strong>${room.type}:</strong> <span class="text-success">${room.price}</span>`;
                    roomPricesContainer.appendChild(priceItem);
                });
            } else if (typeof hostel.roomPrice === "object") {
                // ✅ Handle single object case
                roomPricesContainer.innerHTML =
                    `<p><strong>${hostel.roomPrice.type}:</strong> <span class="text-success">${hostel.roomPrice.price}</span></p>`;
            } else {
                roomPricesContainer.innerHTML = "<p class='text-muted'>No price details available.</p>";
            }
        } else {
            console.error("roomPrice is undefined for hostel:", hostel);
            roomPricesContainer.innerHTML = "<p class='text-muted'>No price details available.</p>";
        }
    }

    function loadGallery(hostel) {
        const galleryDiv = document.getElementById("gallery");

        if (!galleryDiv) {
            console.error("Missing #gallery in HTML");
            return;
        }

        galleryDiv.innerHTML = ""; // ✅ Prevent duplicate images

        hostel.gallery.forEach(image => {
            const imgThumbnail = document.createElement("img");
            imgThumbnail.src = image;
            imgThumbnail.classList.add("thumbnail");
            imgThumbnail.onclick = function() {
                document.getElementById("room-image").src = image;
            };
            galleryDiv.appendChild(imgThumbnail);
        });
    }

    function loadReviews(hostel) {
        const reviewsList = document.getElementById("reviews-list");

        if (!reviewsList) {
            console.error("Missing #reviews-list in HTML");
            return;
        }

        reviewsList.innerHTML = ""; // ✅ Clear existing reviews to avoid duplicates

        if (hostel.reviews && hostel.reviews.length > 0) {
            hostel.reviews.forEach(review => {
                addReviewToPage(review.name, review.rating, review.comment);
            });
        } else {
            reviewsList.innerHTML = "<p class='text-muted'>No reviews yet. Be the first to leave one!</p>";
        }
    }

    function addReviewToPage(name, rating, comment) {
        const reviewsList = document.getElementById("reviews-list");

        if (!reviewsList) {
            console.error("Missing #reviews-list in HTML");
            return;
        }

        const reviewItem = document.createElement("div");
        reviewItem.classList.add("review-card");
        reviewItem.innerHTML = `
        <h6 class="mb-1">${name}</h6>
        <p class="mb-1 text-warning">${"⭐".repeat(rating)}</p>
        <p class="mb-0">${comment}</p>
    `;
        reviewsList.appendChild(reviewItem);
    }
    </script>

</body>

</html>