<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <link href="style.css" rel="stylesheet">
  <script src="ajax.js"></script>
  <title>PHPMailler</title>

</head>

<body>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>
              Bize Ulaşın!</span></h3>

        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
            <div id="mesajsonuc" class="text-center text-success bg-dark lead"></div>
            <div id="formtutucu">
              <div id="mailform"  class="php-email-form">
                <div class="row ">
                  <div class="col form-group">
                    <input type="text" name="isim" class="form-control" id="isim" placeholder="İsim ve Soyisim" required>
                  </div>
                  <div class="col form-group">
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="Mail Adresiniz" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="konu" id="konu" placeholder="Konu" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="mesaj" rows="5" placeholder="Mesaj" required></textarea>
                </div>
                <div class="text-center"><button type="submit" id="gonderbtn">Mesaj Gönder</button></div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>