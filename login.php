<!DOCTYPE html>
<html>
<head>
	<title>Mon fichier PHP avec CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="fichier.css">
  <!-- Font Awesome -->
  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
 


<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Log in</h2>
            <form method="POST" action="login1.php">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              


<!-- email -->
<div class="form-outline mb-4">
  <input type="email" id="form7Example1" class="form-control" name="email"/>
  <label class="form-label" for="form7Example1"> Email</label>
</div>
<!-- password -->
<div class="form-outline mb-4">
  <input type="password" id="form7Example1" class="form-control" name="password" />
  <label class="form-label" for="form7Example1">password</label>
</div>



              

              <!-- Submit button -->
              <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-block mb-4" >
               Log in
              </button>
              <button type="submit" name="submit1" value="Submit" class="btn btn-primary btn-block mb-4" >
               Sign in
              </button>

            
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</body>
</html>

