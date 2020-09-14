<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hair Spa Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="nav-bar" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark navbar-custom pt-2">
              <a class="navbar-brand d-flex justify-content-center align-items-center" href="index.php">
                <h4><strong>Hair & Spa Booking</strong></h4>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="#who-we-are">Who we are?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-services">What do we Do!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#my-form">Book an appoinment</a>
                    </li> 
                </ul>
              </div>
            </nav>
          </div>
    </header>

    <section class="section" >
        <h3>Saloon services from home!</h3><br>
        <p>Have too much hair, book salon services from home and go to salon later. Going random now. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ipsum id ducimus reprehenderit quos, odit vitae totam quam recusandae qui error natus libero vel labore nihil placeat, veritatis debitis esse. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet nisi tempore illo asperiores itaque aperiam beatae? Alias, hic ipsa. Rerum maxime nam nulla iure ab beatae porro molestiae libero architecto!</p>
    </section>
    <div class="book-btn">
        <h4>Book an appoinment</h4><br>
        <a class ="book-btn-a" href="#my-form">Book!</a>
    </div>

    <div class="who-we-are" id="who-we-are">        
        <h3>Who we are?</h3><br>     
        <p>Our technicians are professionals going through high quality of training, going random now.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia praesentium facere ut quo voluptatum veritatis a eveniet unde rem, excepturi totam, harum placeat autem hic impedit, voluptas aspernatur laboriosam. Nostrum?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo labore, voluptatum vero, a repudiandae nam debitis, perspiciatis deserunt facilis iste quod officia eveniet temporibus aperiam et quibusdam qui aliquid cumque!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi magni hic fuga voluptas tenetur est quo a, rerum harum, sed at eos quibusdam nisi voluptatum similique error quasi ratione placeat!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus esse autem voluptates inventore iusto accusantium dolorem sint saepe sapiente nostrum, quod officiis sed aperiam dolores mollitia maxime laboriosam fugit newque!
        Book services from here pls.
        </p>
    </div>
    <div class="book-btn">
      <h4>We deliver what our customer wants by our tremendous deliverance!</h4><br>
    </div>

    <div id="our-services">
        <p>What do we Do!</p><br>
        <p id="our-services-p">We provide various services to our customers, As a matter of fact, all our services  provides complete satisfaction to our customers take a look of our services below</p><br>
        <ul class="our-ser-ul">
            <li class="our-ser">Hair Cut</li><br>
            <li class="our-ser">Keratin Treatment</li><br>
            <li class="our-ser">Men's Grooming</li><br>
            <li class="our-ser">Trimming and Conditioning</li><br>
            <li class="our-ser">Hair Mask</li><br>
            <li class="our-ser">Hair Smoothing</li><br>
        </ul>
    </div>

    <div id="my-form">
        <form action="Formdetails.php" method="POST">
            <p>Book an appoinment!</p><br>
          <div class="Form-group">
            <input class="input-box" type="text" name="frname" id="frname" placeholder="Name" required><br><br>
          </div><br>
          <div class="Form-group">
            <input class="input-box" type="email" name="email" id="email" placeholder="Email" required><br><br>
          </div><br>
          <div class="Form-group">
            <input class="input-box" type="number" name="phone" id="phone" placeholder="Phone" required><br><br>
          </div><br>
          <div class="Form-group">
            <input class="input-box" type="datetime-local" name="date" placeholder="date" required><br><br>
          </div><br>
          <div class="Form-group">
            <input class="input-box" type="text" name="services" id="services" placeholder="Mention Your desired Service" required><br><br>
          </div><br>
          <div class="Form-group">
           <button id="submit" type="submit" name="submit">click here to submit</button>
          </div>
          <?php include 'Formdetails.php' ?>
        </form>
     </div>
     
    <div class="scroll-up">
      <a href="#navbar">go up</a>
    </div> 
    <footer><br><br>
        <div class="footer-link">
            <!-- <a href="">facebook</a>
            <a href="">instak</a>
            <a href="">gmail</a> -->
            Hair & Spa Booking
        </div>
        <div class="copyright"><br>
          <p>&copy;2020</p><br>
        </div>        
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>