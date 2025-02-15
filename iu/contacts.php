<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}
.all-content{
  background: #f7f5f2;
}
html::-webkit-scrollbar-track{
  background: transparent;
}

html::-webkit-scrollbar-thumb{
  background: gray;
  border-radius: 10px;
}
html::-webkit-scrollbar{
  width: 10px;
}
.navbar .navbar-nav .nav-item a{
    padding: 15px;
}
.navbar .navbar-nav .nav-but{
    padding: 8px;
}
.nav-link {
  color: #fff; 
  transition: all 0.3s ease-in-out; 
}

.nav-link:hover {
  text-decoration: none; 
  background-color: rgba(31, 226, 47, 0.664); 
  padding: 5px 10px; 
  border-radius: 5px; 
}

.sticky-navbar {
  position: sticky;
  top: 0;
  z-index: 1030; 
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
}
/* contact */
.contact {
  width: 100%;
  background: #f7f5f2;
  padding-top: 70px;
  padding-bottom: 70px; /* Added padding-bottom for spacing */
}

.contact .container {
  width: 100%;
  background: white;
  background: linear-gradient(90deg, white 80%, #b2744c 20%);
  border-radius: 10px;
  display: flex;
  flex-wrap: wrap; /* Added flex-wrap for responsiveness */
  align-items: center; /* Center items vertically */
  justify-content: space-between; /* Add spacing between items */
  padding: 20px; /* Added padding for inner spacing */
}

.heading6 {
  font-size: 30px;
  font-weight: bold;
  margin-top: 70px;
  text-align: center;
}

.heading6 span {
  color: #b2744c;
}

.contact p {
  font-weight: bold;
  font-size: 13px;
  color: black;
}

.contact input {
  width: 100%;
  max-width: 360px; /* Added max-width for larger screens */
  border: none;
  border-bottom: 1px solid;
  margin-bottom: 10px; /* Added margin-bottom for spacing */
}

#contact-btn {
  width: 200px;
  height: 36px;
  border: none;
  background: #b2744c;
  color: white;
  font-weight: bold;
  margin-top: 30px;
  cursor: pointer;
}

#col {
  width: 40%;
  background: black;
  padding: 20px; /* Added padding for inner spacing */
  margin-top: 78px;
  border-radius: 10px; /* Added border-radius for consistent styling */
}

.contact h1 {
  color: white;
  font-size: 25px;
  margin-top: 10px;
  margin-left: 10px;
}

.contact #col p {
  font-size: 15px;
  color: white;
  margin-left: 13px;
  padding-top: 30px;
}

@media screen and (max-width: 766px) {
  .contact .container {
    background: white;
    flex-direction: column-reverse; /* Stack items vertically on smaller screens */
  }
  
  #col {
    width: 100%;
    background: #000000;
    margin-top: 20px; /* Adjusted margin for spacing */
  }
  
  .contact {
    padding-top: 30px;
    padding-bottom: 30px;
  }
}

@media screen and (max-width: 400px) {
  .contact input {
    width: 100%; /* Make input take full width */
  }
}
/* contacts */
/* footer */
footer {
  background: #343434;
  padding-top: 20px;
  color: white; /* Ensure text is visible on dark background */
  font-size: 14px; /* Reduce overall font size */
}
.con {
  max-width: 800px; /* Reduce maximum width */
  margin: auto;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap; /* Allow flex items to wrap on smaller screens */
  padding: 0 10px; /* Add padding for smaller screens */
}
.footer-content {
  flex: 1 1 150px; /* Allow flex items to grow and shrink, with a minimum width */
  margin-bottom: 10px; /* Add margin for spacing between items */
  text-align: center; /* Center text for smaller screens */
}
.footer-content h3 {
  font-size: 16px; /* Reduce font size of headings */
  margin-bottom: 10px;
}
.footer-content p, .footer-content ul {
  margin: auto;
  padding: 5px;
  text-align: center;
}
.footer-content ul {
  padding: 0;
}
.list {
  padding: 0;
}
.list li {
  list-style-type: none;
  padding: 5px;
  position: relative;
  text-align: center;
}
.list li::before {
  content: '';
  position: absolute;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 100%;
  width: 0;
  height: 2px;
  background: #f18930;
  transition-duration: .5s;
}
.list li:hover::before {
  width: 50px;
}
.social-icons {
  text-align: center;
  padding: 0;
}
.social-icons li {
  display: inline-block;
  padding: 3px;
}
.social-icons i {
  color: white;
  font-size: 18px; /* Reduce font size of icons */
}
a {
  text-decoration: none;
  color: inherit; /* Ensure links inherit color */
}
a:hover, .social-icons i:hover {
  color: #f18930;
}
.bottom-bar {
  background: #f18930;
  text-align: center;
  padding: 5px 0; /* Reduce padding */
  margin-top: 20px; /* Reduce margin-top */
}
.bottom-bar p {
  color: #343434;
  margin: 0;
  font-size: 12px; /* Reduce font size */
  padding: 5px;
}
@media screen and (max-width: 767px) {
  .footer-content {
      flex: 1 1 100%; /* Make each footer content take full width on small screens */
  }
  .container {
      flex-direction: column; /* Stack items vertically on small screens */
      align-items: center; /* Center items on small screens */
  }
}
</style>
<body>
<nav class="navbar sticky-navbar navbar-expand-lg navbar-dark bg-success py-1">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand mb-0 h6"><b>Brgy. Camingawan Management System</b></a>
    <a class="navbar-text text-white small">
      <i class="fas fa-phone me-1"></i><b>+63 943 227 2534</b>
    </a>
  </div>
</nav>
<nav class="navbar sticky-navbar navbar-expand-lg navbar-dark bg-secondary py-1">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand mx-5" href="#">
      <img src="img/logo2.png" alt="Logo" width="80" height="70">
    </a>
    <!-- Navbar Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contacts.php">Contacts</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- contact -->
<section class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
       <div class="heading6">Contact <span>Us</span></div>
       <p>Send us a message if you have any inquries width us.!!</p>
       <input class="form-control" type="text" placeholder="Name" aria-label="default input example"><br>
       <input class="form-control" type="email" placeholder="Email" aria-label="default input example"><br>
       <input class="form-control" type="text" placeholder="Number" aria-label="default input example"><br>
       <button id="contact-btn">Send Message</button>
      </div>
      <div class="col-md-5" id="col">
        <h1>Info</h1>
        <p><i class="fa-regular fas fa-envelope"></i> BarangayCamingawan@gmail.com</p>
        <p><i class="fa-solid fas fa-phone"></i> 09092273547</p>
       <p>Location
        We are located at:
        Brgy.Camingawan,Kabankalan, City, Negros Occidental.</p>
      </div>
    </div>
  </div>

</section>
<!-- contact -->
<!-- footer -->
<footer>
    <div class="con">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <ul class="list">
                <li><a href="#">Email:BarangayCamingawan@gmail.com</a></li>
                <li><a href="#">Address:Brgy.Camingawan, Kabankalan, City, Negros Occidental</a></li>
                <li><a href="#">Phone#:09092273547</a></li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>Quick Links</h3>
            <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contacts.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>Fllow Us</h3>
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>  
</footer>
<!--footer -->   
</body>
</html>