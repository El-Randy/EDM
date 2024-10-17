<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vitok</title>
  <link rel="stylesheet" href="../lib/css/my.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kapanggal x Virtucio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#section1">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <main  >
    <section id="section1">
        <div id="main-content">
          <h1>Welcome Devils</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, officia.</p>
          <a href="" class="btn btn-primary px-5">Learn More</a>
        </div>
    </section>


    <section id="about" class="mt-5">
      <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="card">
            <img src="https://img.freepik.com/free-photo/handsome-young-businessman-suit_273609-6513.jpg" width="200" height="200">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus saepe, nisi mollitia fugit commodi quibusdam iure pariatur harum culpa deserunt!
              </p>
              <button class="btn btn-secondary">More..</button>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
        <img src="https://img.freepik.com/free-photo/handsome-young-businessman-suit_273609-6513.jpg" alt=""  width="200" height="200">
         <p>
         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores maxime, quas minima quos officia sed et quasi vel tempora necessitatibus.
         </p>
         <button class="btn btn-secondary">More..</button>
        </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
       <div class="card">
       <img src="https://img.freepik.com/free-photo/handsome-young-businessman-suit_273609-6513.jpg" alt=""  width="200" height="200">
       <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex beatae fuga atque. Cupiditate distinctio sapiente et nulla, delectus mollitia nemo.</p>
       <button class="btn btn-secondary">More..</button> 
      </div>
        </div>
      </div>
      </div>
    </section>


    <section id="contact" >
      <div class="container mt-5">
        <form action="" id="contactForm" class="card mt-5">
          <h1 class="text-center">Contact Form</h1>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
            </div>
            <div class="col-12">
              <label for="comment" class="form-label mt-2">Comment</label>
              <textarea name="" id="comment" class="form-control" placeholder="Type here your fucking concern..."></textarea>
            </div>
            
          </div>
          <div class="text-center">
          <a href="" class="btn btn-success " id="contactButton">Send</a>
          </div>
        </form>
      </div>
    </section>
  </main>

</body>
</html>