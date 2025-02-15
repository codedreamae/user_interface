<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="sytle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
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

<!-- home section -->
<section class="home">
    <div class="content">
        <h1>Welcome To Barangay <br> Camingawan.!!</h1>
        <i> <p>Treat people the way you 
           <br> like to be treated.!! 
        </p></i>
    </div>
</section>
<!-- home section -->
<!-- about section -->
<div class="about" id="about">
  <div class="container">
    <div class="heading">About <span>Us</span></div>
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <img src="img/background.png">
        </div>
      </div>
      <div class="col-md-7">
        <div>
          <h6><strong>MISSION</strong></h6>
          <i><p>Through the cooperation of people and leaders from various sectors, linking local, provincial, national, and other agencies. Providing adequate quality basic social services and appropriate education and training for people in the barangay.</p></i>
        </div>
        <div>
          <h6><strong>VISION</strong></h6>
          <i><p>A progressive Barangay where people are organized, cooperative, and unified; with significant development, sufficient income, food security, green and clean environment, and restored ecological balance. An intelligent and God-fearing population.</p></i>
        </div>
        <div>
          <h6><strong>GOALS & OBJECTIVES</strong></h6>
          <i><p>
            1. Enhance sector capacities within the Barangay.<br>
            2. Implement diverse livelihood projects for economic development.<br>
            3. Restore and conserve the environment.<br>
            4. Create a permanent Barangay site with community improvement facilities.<br>
            5. Provide adequate and quality basic social services delivery system.
          </p></i>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- about section -->
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
        <li>Email: BarangayCamingawan@gmail.com</li>
        <li>Address: Brgy. Camingawan, Kabankalan City</li>
        <li>Phone#: 09092273547</li>
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
      <h3>Follow Us</h3>
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