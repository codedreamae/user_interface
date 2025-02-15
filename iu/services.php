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
/* Services */
.top-cards {
  width: 100%;
  background: #f7f5f2;
  font-family: 'Roboto', sans-serif;
  padding: 50px 0;
}

.heading2 {
  color: black;
  text-align: center;
  font-size: 30px;
  font-weight: bold;
}

.heading2 span {
  color: #b2744c;
}

.top-cards .container {
  margin-top: 30px;
}

.top-cards .card {
  border-radius: 10px;
  transition: 0.5s;
  cursor: pointer;
  overflow: hidden;
  position: relative;
}

.top-cards .card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
  position: relative;
}

/* Blur effect on top half */
.top-cards .card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 50%; /* Covers the top half */
  background: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
  backdrop-filter: blur(10px); /* Blur effect */
  z-index: 1; /* Layer above the image */
}

.top-cards .card h3 {
  color: black;
  padding: 10px;
  text-align: center;
  font-size: 25px;
  position: relative; /* Ensure it stays above the blur */
  z-index: 2;
}

.top-cards .card:hover {
  transform: translateY(-10px);
}

@media screen and (max-width: 767px) {
  .top-cards .row {
    justify-content: center;
  }
}

@media screen and (max-width: 500px) {
  .top-cards .row {
    justify-content: center;
  }
}

@media screen and (max-width: 370px) {
  .top-cards .row {
    justify-content: center;
  }
  .top-cards .card h3 {
    font-size: 14px;
    padding: 5px 10px;
  }
}
/* Services */
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
/* footer */
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
<!-- services -->
<section class="top-cards">
  <div class="heading2">Ser<span>vices</span></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card text-center">
          <img src="img/clearance.jpg" style="height:15%" class="card-img-top" alt="Barangay Clearance">
          <div class="blur-overlay"></div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card text-center">
          <img src="img/certification.jpg" style="height:15%" class="card-img-top" alt="Barangay Certification">
          <div class="blur-overlay"></div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card text-center">
          <img src="img/residency.jpg" style="height:15%" class="card-img-top" alt="Certificate of Residency">
          <div class="blur-overlay"></div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0 mt-4">
        <div class="card text-center">
          <img src="img/indigency.jpg" style="height:15%" class="card-img-top" alt="Certificate of Indigency">
          <div class="blur-overlay"></div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0 mt-4">
        <div class="card text-center">
          <img src="img/Business Permit.jpg" style="height:15%" class="card-img-top" alt="Business Permit">
          <div class="blur-overlay"></div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0 mt-4">
        <div class="card text-center">
          <div class="blur-effect">
            <img src="img/indigency.jpg" style="height:15%" class="card-img-top" alt="Summon Certificate">
            <div class="blur-overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- appoinment -->
<section class="appointment-form my-5">
  <div class="container">
    <div class="heading2 text-center mb-4">Create Appointment Certificate</div>
    <form id="appointmentForm" class="p-4 border rounded">
      <div class="form-group">
        <label for="service"> Certification</label>
        <select class="form-control" id="service" name="service" required>
          <option value="">-- Select Service --</option>
          <option value="Barangay Clearance">Barangay Clearance</option>
          <option value="Barangay Certification">Barangay Certification</option>
          <option value="Residency Certificate">Residency Certificate</option>
          <option value="Indigency Certificate">Indigency Certificate</option>
          <option value="Business Permit">Business Permit</option>
          <option value="Summon Report">Summon Report</option>
        </select>
      </div>
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="service">Purok</label>
        <select class="form-control" id="service" name="service" required>
          <option value="">-- Select Service --</option>
          <option value="Barangay Clearance">Barangay Clearance</option>
          <option value="Barangay Certification">Barangay Certification</option>
          <option value="Residency Certificate">Residency Certificate</option>
          <option value="Indigency Certificate">Indigency Certificate</option>
          <option value="Business Permit">Business Permit</option>
          <option value="Summon Report">Summon Report</option>
        </select>
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
      </div>
      <div class="form-group">
        <label for="appointmentDate">Appointment Date</label>
        <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
      </div>
      <div class="form-group">
        <label for="remarks">Remarks</label>
        <textarea class="form-control" id="remarks" name="remarks" rows="2" placeholder="Additional details (optional)"></textarea>
      </div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Submit Appointment</button>
      </div>
    </form>
    <div id="appointmentOutput" class="mt-4"></div>
  </div>
</section>

<script>
  document.getElementById('appointmentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const service = document.getElementById('service').value;
    const fullName = document.getElementById('fullName').value;
    const purok = document.getElementById('purok').value;
    const age = document.getElementById('age').value;
    const appointmentDate = document.getElementById('appointmentDate').value;
    const remarks = document.getElementById('remarks').value;

    const output = `
      <div class="alert alert-success">
        <h5>Appointment Details</h5>
        <p><strong>Service:</strong> ${service}</p>
        <p><strong>Full Name:</strong> ${fullName}</p>
        <p><strong>Purok:</strong> ${purok}</p>
        <p><strong>Age:</strong> ${age}</p>
        <p><strong>Appointment Date:</strong> ${appointmentDate}</p>
        <p><strong>Remarks:</strong> ${remarks || "None"}</p>
      </div>
    `;

    document.getElementById('appointmentOutput').innerHTML = output;
  });
</script>
<!-- appoinment -->
<!-- services -->
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