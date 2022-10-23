<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="main-navbar">
        <ul class="main-navbar-links">
            <li><a class="main-navbar-link" style="text-decoration:none" href="index.php">Home</a></li>
            <li><a class="main-navbar-link" style="text-decoration:none" href="despre-noi.php">Despre noi</a></li>
            <li><a class="main-navbar-link" style="text-decoration:none" href="contact.php">Contact</a></li>
        </ul>
        <img class="phone_pic" src="https://i.pinimg.com/originals/a8/17/78/a817789a91d8a7ee24dc36d8989cf8c2.png" alt="">
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner main-carousel">
          <div class="carousel-item active">
            <div style="background-image:url(https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80);"></div>
          </div>
          <div class="carousel-item">
            <div style="background-image: url(https://images.unsplash.com/photo-1515343480029-43cdfe6b6aae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80);"></div>
          </div>
          <div class="carousel-item">
            <div style="background-image: url(https://images.unsplash.com/photo-1601933973783-43cf8a7d4c5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);"></div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <article>
        <section class="main-info py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="text-center" >
                            <h1>Arta de a cauta informatii in Google!</h1>
                            <h2>Curs revolutionar</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Pellentesque nec urna sit amet sapien dignissim volutpat. Proin vitae lacus leo. 
                                Aenean tristique quis orci vitae facilisis. Curabitur laoreet nisi elit, vel dignissim mauris 
                                vulputate id. 
                                Nam hendrerit sem non odio tincidunt accumsan. Integer vitae enim nisi. 
                                Mauris et imperdiet eros. Aliquam in libero orci. Praesent id scelerisque nisl, 
                                non gravida purus.
                            </p>
                            <button type="button" class="btn btn-primary">Inscrie-te acum</button>
                            <button type="button" class="btn btn-outline-secondary">Cere detalii</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="features py-5">
            <div class="container">
                <div class="row">
                   <div class="col-sm-12 col-md-4 text-center my-3">
                    <img class="google_img" src="https://www.webpresencesolutions.net/files/2020/06/Reasons-Google-Search-Results-Vary-SQ-3.png" 
                        alt="">
                        <h4>Performanta</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center my-3">
                    <img class="google_img" src="https://www.webpresencesolutions.net/files/2020/06/Reasons-Google-Search-Results-Vary-SQ-3.png" 
                        alt="">
                        <h4>Siguranta in ziua de maine</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center my-3">
                        <img class="google_img" src="https://www.webpresencesolutions.net/files/2020/06/Reasons-Google-Search-Results-Vary-SQ-3.png" 
                        alt="">
                        <h4>Dublarea venitului</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>  
                </div>
               
            </div>
            
         </section>
    </article>
    <div class="container">
        <div class="row">
            <?php $x=1; $txt= "Participanți la modulul" ?>
            <div class="col-sm-6 col-md-3 p-2">
                <h3><?php $a=1200; echo $a ?></h3>
                <?php echo $txt." ".$x++?>
            </div>
            <div class="col-sm-6 col-md-3 p-2">
                <h3><?php $b=5653; echo $b ?></h3>
                <?php echo $txt." ".$x++ ?>
            </div>
            <div class="col-sm-6 col-md-3 p-2">
                <h3><?php $c=10345; echo $c ?></h3>
                <?php echo $txt." ".$x++ ?>
            </div>
            <div class="col-sm-6 col-md-3 p-2">
                <h3><?php $sum=$a + $b + $c; echo $sum ?></h3>
                Numarul total de participanti
            </div>
        </div>
    </div>

    <footer>
        <div class="py-5">
        <img class="footer_img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/2560px-Flag_of_Romania.svg.png" 
        alt="">
        <form action="" method="get">
            <label for="email">Aboneaza-te la newsletter</label>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Adresa de email.." aria-label="Adresa de email.." aria-describedby="btnGroupAddon">
                        <div class="input-group-text btn btn-primary" id="btnGroupAddon">Trimite</div>
                    </div>
                </div>
            </div>
        </form>
        <br> © Toate drepturile rezervate!
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>  
</body>
</html>