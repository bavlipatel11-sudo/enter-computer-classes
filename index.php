<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Enter Computer Classes</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
body{
  margin:0;
  font-family:Poppins,sans-serif;
  background:#f5f9ff;
}

header{
  background:linear-gradient(135deg,#0b74de,#0056b3);
  color:white;
  padding:15px 40px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}

header h2{margin:0}

nav a{
  color:white;
  margin-left:20px;
  text-decoration:none;
  font-weight:500;
}

.hero{
  text-align:center;
  padding:80px 20px;
  background:linear-gradient(135deg,#e3f2fd,#ffffff);
}

.hero h1{font-size:40px}
.hero p{color:#555}

.btn{
  background:#0b74de;
  color:white;
  padding:12px 25px;
  border-radius:30px;
  text-decoration:none;
  display:inline-block;
  margin-top:15px;
}

.section{
  padding:50px 20px;
  max-width:1100px;
  margin:auto;
}

.cards{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:20px;
}

.card{
  background:white;
  padding:20px;
  border-radius:15px;
  box-shadow:0 5px 15px rgba(0,0,0,0.1);
  transition:0.3s;
}

.card:hover{
  transform:translateY(-5px);
}

.filter{
  text-align:center;
  margin-bottom:20px;
}

.filter button{
  margin:5px;
  padding:8px 15px;
  border:none;
  border-radius:20px;
  background:#0b74de;
  color:white;
  cursor:pointer;
}

footer{
  background:#0b74de;
  color:white;
  text-align:center;
  padding:20px;
}

input,select{
  width:100%;
  padding:10px;
  margin:8px 0;
  border-radius:8px;
  border:1px solid #ccc;
}
</style>
</head>

<body>

<header>
<h2>Enter Computer Classes</h2>
<nav>
<a href="#courses">Courses</a>
<a href="#about">About</a>
<a href="#contact">Contact</a>
</nav>
</header>

<!-- HERO -->
<section class="hero">
<h1>Learn Computer Skills from Basic to Advanced</h1>
<p>Job-ready courses with practical training</p>
<a class="btn" href="https://wa.me/9104625810">Enroll Now</a>
</section>

<!-- COURSES -->
<section class="section" id="courses">
<h2 style="text-align:center;">Our Courses</h2>

<div class="filter">
<button onclick="filterCourse('all')">All</button>
<button onclick="filterCourse('basic')">Basic</button>
<button onclick="filterCourse('advance')">Advance</button>
</div>

<div class="cards" id="courseList">

<div class="card basic">
<h3>CCC</h3>
<p>Govt Approved Course</p>
<p>Duration: 2-3 Months</p>
<p>Fees: ₹5000</p>
</div>

<div class="card basic">
<h3>Basic Computer</h3>
<p>MS Office + Internet</p>
<p>Duration: 2 Months</p>
<p>Fees: ₹3500</p>
</div>

<div class="card advance">
<h3>Tally + GST</h3>
<p>Accounting Training</p>
<p>Duration: 2 Months</p>
<p>Fees: ₹6000</p>
</div>

<div class="card advance">
<h3>DTP</h3>
<p>Photoshop, CorelDraw</p>
<p>Duration: 3 Months</p>
</div>

<div class="card advance">
<h3>ADHN</h3>
<p>Hardware & Networking</p>
</div>

</div>
</section>

<!-- ABOUT -->
<section class="section" id="about">
<h2>About Us</h2>
<p>
At Enter Computer Classes, we provide practical and job-oriented computer education.
We offer courses like CCC, Tally, DTP, and more with experienced trainers and small batches.
</p>
</section>

<!-- FEATURES -->
<section class="section">
<h2>Why Choose Us</h2>
<div class="cards">
<div class="card">100% Practical Training</div>
<div class="card">Job Assistance</div>
<div class="card">Flexible Timing</div>
<div class="card">Affordable Fees</div>
</div>
</section>

<!-- TESTIMONIALS -->
<section class="section">
<h2>Student Reviews</h2>
<div class="cards">
<div class="card">"Best institute for learning computers!"</div>
<div class="card">"Very supportive teachers."</div>
<div class="card">"Got job after Tally course."</div>
</div>
</section>

<!-- CONTACT -->
<section class="section" id="contact">
<h2>Contact Us</h2>

<form onsubmit="sendWhatsApp(event)">
<input type="text" id="name" placeholder="Your Name" required>
<input type="text" id="phone" placeholder="Phone Number" required>

<select id="course">
<option>CCC</option>
<option>Basic Computer</option>
<option>Tally</option>
<option>DTP</option>
<option>ADHN</option>
</select>

<button class="btn">Submit</button>
</form>

<br>

<iframe src="https://maps.google.com/maps?q=botad&t=&z=13&ie=UTF8&iwloc=&output=embed"
width="100%" height="250"></iframe>

</section>

<footer>
<p>📍 Opposite ICICI Bank, Pashwanath Complex, Botad</p>
<p>📞 +91 9104625810</p>
</footer>

<script>
function filterCourse(type){
  let cards=document.querySelectorAll(".card");
  cards.forEach(c=>{
    if(type==="all" || c.classList.contains(type)){
      c.style.display="block";
    } else {
      c.style.display="none";
    }
  });
}

function sendWhatsApp(e){
  e.preventDefault();

  let name=document.getElementById("name").value;
  let phone=document.getElementById("phone").value;
  let course=document.getElementById("course").value;

  let msg=`Name: ${name}%0APhone: ${phone}%0ACourse: ${course}`;
  window.open(`https://wa.me/919104625810?text=${msg}`);
}
</script>

</body>
</html>
