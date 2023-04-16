<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: black;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  color:white;
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

/*----- footer section -----*/
        
.footer {
            width: 100%;
            text-align: center;
            padding: 30px 0;
            background: black;
        }
        
        .footer h4 {
            margin-bottom: 25px;
            margin-top: 20px;
            font-weight: 600;
        }
        
        footer p {
            color: white;
        }
        
        .icons .fa {
            color: #ffffff;
            margin: 0 13px;
            cursor: pointer;
            padding: 18px 0;
        }
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>PROGRAM MISATA & SEKOLAH SANTAI</h1>
<hr>

<h2>Our Programs</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, quo error quibusdam reiciendis fuga itaque?</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="./images/wisata1.jpg" alt="Mountains" style="width:100%">
      <h3>Program-1</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="./images/wisata2.jpg" alt="Lights" style="width:100%">
      <h3>Program-2</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
      <h3>Program-3</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
      <h3>Program-4</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="/w3images/p3.jpg" alt="Bear" style="width:100%">
  <h3>Our Service</h3>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
</div>

<!-- END MAIN -->
</div>

<!------------- Footer ------------>
<section class="footer">
        <h3 style="color: white; padding-top: 30px;">SEKOLAHSANTAI.com</h3>
        <p><b>The Best & The Greatest Story Telling Website for Kids:</b></p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
        <p style="padding-bottom: 30px;">Made with <i class="fa fa-heart-o"></i> by Akhsan Nasution</p>
    </section>


</body>
</html>

