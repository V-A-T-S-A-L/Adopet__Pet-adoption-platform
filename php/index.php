<?php 
    session_start();
    include("db.php");

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $ans = mysqli_fetch_assoc($result);
    //echo $user_id;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adopet</title>
        <link rel="icon" type="image/x-icon" href="./img/icon1.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <section id="header">
            <a href="#"><img src="../img/logo.png" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="pet-list.php">Adopt</a></li>
                    <li><a href="events.php">Events</a></li>
                    <?php if($ans['user_type'] == "SHELTER") echo "<li><a href='my_events.php'>My Events</a></li>";?>
                    <li><a href="lost_found.php">Lost & Found</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="donations.php">Donate</a></li>
                    <li><a href="bot.php">Chatbot</a></li>
                    <?php if($ans['pri'] == 1) echo "<li><a href='submit_shelter_request.php'>Shelter Requests</a></li>";?>
                    <?php if($ans['pri'] == 1) echo "<li><a href='dashboard.php'>Dashboard</a></li>";?>
                </ul>
            </div>
            <div id="mobile">
                <a href="#"><i class='bx bx-shopping-bag' ></i></a>
                <i id="bar" class='bx bx-menu'></i>
            </div>
        </section>
        

        <section id="main">
            <p></p>
            <p></p>
            <h4></h4>
            <h2>Welcome to Adopet</h2>
            <h1>"Find Your Forever Friend Today"</h1>
            <p></p>
            <p></p>
            <button class="btn">Adopt Now!</button>
        </section> 



        <section id="product1" class="section-p1">
            <h2>Featured Pets</h2>
            <p>"Your New Best Friend is Waiting."</p>
            <div class="pro-container">
                <div class="pro">
                    <img class="shirt" src="pet-img/f1.jpg" height="60%" alt="">
                    <div class="des">
                        
                        <h5>Bella</h5>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                    </div>
                </div>
                <div class="pro">
                    <img class="shirt" src="pet-img/f2.jpg" alt="">
                    <div class="des">
                        
                        <h5>tommy</h5>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                        
                    </div>
                </div>
                <div class="pro">
                    <img class="shirt" src="pet-img/f3.jpg" height="60%" alt="">
                    <div class="des">
                        
                        <h5>Max</h5>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                        
                    </div>
                </div>
                <div class="pro">
                    <img class="shirt" src="pet-img/f4.jpg" alt="">
                    <div class="des">
                        
                        <h5>bruno</h5>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </section>

        

        <section id="product1" class="section-p1">
            <h2>Reviews</h2>
            <p>"From Shelters to Hearts – Adopt Now!"</p>
            

    <div class="card-container">
        <div class="card">
            <div class="user-profile">
                <img src="img/user1.jpg" alt="User 1" class="profile-img">
                <p class="user-name">Alex J.</p>
            </div>
            <h2>Bella </h2>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">☆</span>
            </div>
            <div class="review">"Bella has been an amazing companion! She's incredibly friendly and loves to play fetch. The only downside is she sheds quite a bit, but her joyful nature more than makes up for it."</div>
        </div>
        <div class="card">
            <div class="user-profile">
                <img src="img/user2.jpg" alt="User 2" class="profile-img">
                <p class="user-name">Jamie L.</p>
            </div>
            <h2>Whiskers </h2>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
            </div>
            <div class="review">"Whiskers is a bundle of personality. She’s affectionate, intelligent, and always curious about what’s happening around her. Her playful antics keep us entertained every day!"</div>
        </div>
        <div class="card" >
            <div class="user-profile">
                <img src="img/user3.jpg" alt="User 3" class="profile-img">
                <p class="user-name">Morgan T.</p>
            </div>
            <h2>Rocky </h2>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">☆</span>
                <span class="star">☆</span>
            </div>
            <div class="review">"Rocky is a colorful and vocal addition to our home. While he’s great at mimicking sounds and can be quite entertaining, he requires a lot of attention and care."</div>
        </div>
        <div class="card">
            <div class="user-profile">
                <img src="img/user4.jpg" alt="User 3" class="profile-img">
                <p class="user-name">Morgan T.</p>
            </div>
            <h2>Rocky </h2>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">☆</span>
                <span class="star">☆</span>
            </div>
            <div class="review">"Rocky is a colorful and vocal addition to our home. While he’s great at mimicking sounds and can be quite entertaining, he requires a lot of attention and care."</div>
        </div>
    </div>
</body>
</html>

<br>
<div class="accordion">
    <div class="accordion-item">
        <button class="accordion-header">
            <span class="accordion-title">What is the adoption process?</span>
            <span class="accordion-arrow">&#9662;</span>
        </button>
        <div class="accordion-content">
            <p>The adoption process involves filling out an application, meeting the pet, and completing an adoption agreement. A home visit may also be required.</p>
        </div>
    </div>
    <div class="accordion-item">
        <button class="accordion-header">
            <span class="accordion-title">What are the adoption fees?</span>
            <span class="accordion-arrow">&#9662;</span>
        </button>
        <div class="accordion-content">
            <p>Adoption fees vary depending on the pet and include costs for vaccinations, spaying/neutering, and microchipping. Please check the pet’s profile for specific fees.</p>
        </div>
    </div>
    <div class="accordion-item">
        <button class="accordion-header">
            <span class="accordion-title">Can I return a pet if it doesn't work out?</span>
            <span class="accordion-arrow">&#9662;</span>
        </button>
        <div class="accordion-content">
            <p>We understand that sometimes adoptions don't work out. If needed, you can return the pet within 30 days. We ask that you contact us to discuss the best steps for the pet’s well-being.</p>
        </div>
    </div>

</div>

    <div class="accordion-item">
        <button class="accordion-header">
            <span class="accordion-title">Are the pets vaccinated and spayed/neutered?</span>
            <span class="accordion-arrow">&#9662;</span>
        </button>
        <div class="accordion-content">
            <p>Yes, all pets available for adoption are vaccinated, spayed/neutered, and microchipped. We ensure they are healthy and ready for their new homes.</p>
        </div>
    </div>
    <div class="accordion-item">
        <button class="accordion-header">
            <span class="accordion-title">How do I prepare my home for a new pet?</span>
            <span class="accordion-arrow">&#9662;</span>
        </button>
        <div class="accordion-content">
            <p>Preparing for a new pet involves creating a safe space, gathering essential supplies, and gradually introducing the pet to their new environment. We provide detailed guidelines to help you prepare.</p>
        </div>
    </div>
    <div class="accordion-item">
        <button class="accordion-header">
            <span class="accordion-title">What should I do if my adopted pet has behavior issues?</span>
            <span class="accordion-arrow">&#9662;</span>
        </button>
        <div class="accordion-content">
            <p>If your pet exhibits behavior issues, please reach out to us. We offer support and resources, including training tips and referrals to professional behaviorists.</p>
        </div>
    </div>
</div>
</div>
</div>
<script src="script.js"></script>
<br>
<br>
<section class="impact-section">
    <h2>Impact</h2>
    <div class="impact-container">
        <div class="impact-item">
            
            <h3>5,000+</h3>
            <p>Dogs Sterilized</p>
        </div>
        <div class="impact-item">
            
            <h3>100,000+</h3>
            <p>Successful rehabilitation surgeries</p>
        </div>
        <div class="impact-item">
            
            <h3>800,000+</h3>
            <p>Meals provided to over 2,000 animals</p>
        </div>
        <div class="impact-item">
            
            <h3>7,000+</h3>
            <p>Vaccinations done</p>
        </div>
        <div class="impact-item">
            
            <h3>200+</h3>
            <p>Awareness sessions conducted</p>
        </div>
        <div class="impact-item">
            
            <h3>20,000+</h3>
            <p>Successful adoptions</p>
        </div>
        <div class="impact-item">
            
            <h3>500,000+</h3>
            <p>Animals medically rehabilitated via our emergency OPD program</p>
        </div>
    </div>
</section>

        

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="../img/logo.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong>Mumbai-400059, Maharashtra</p>
                <p><strong>Phone:</strong> +01 2222 345 / (+91) 0 123 456 789</p>
                <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class='bx bxl-facebook'></i>
                        <i class='bx bxl-twitter' ></i>
                        <i class='bx bxl-instagram' ></i>
                        <i class='bx bxl-pinterest-alt' ></i>
                        <i class='bx bxl-youtube' ></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="#">About us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Help</a>
            </div>

            
            <div class="copyright">
                <p>@2024, Adopet All rights reserved.</p>
            </div>
        </footer>

        <script src="script.js"></script>
    </body>
</html>
