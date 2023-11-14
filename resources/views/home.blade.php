<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css -->
    <style type="text/css">
      .box {
              width: 400px; /* Lebar kotak */
              height: 500px; /* Tinggi kotak */
              background-color: #f8f9fa; /* Warna latar kotak */
              border-radius: 15px; /* Sudut melengkung */
              box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2); /* Bayangan kotak */
              position: absolute; /* Menggunakan positioning absolute */
              top: 50%; /* Posisi vertikal tengah */
              right: 20%; /* Posisi horizontal tengah */
              transform: translate(50%, -50%); /* Ajustment agar kotak tepat di tengah kanan */
            }

    </style>

    <title>PT Tunas Operasi Prima</title>
    <link rel="shortcut icon" href="{{ asset('TOP.ico') }}">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="TOP.png" alt="Logo" style="height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Service</a>
            <a class="nav-item nav-link" href="#">Company</a>
            <a class="nav-item nav-link" href="#">Blog</a>
            <a class="nav-item nav-link" href="#">Sign In</a>
          </div>
        </div>
      </div>
    </nav>


    <div class="box"></div>



    <script>
      // Hexagon wave with p5.js
      let hexagons = [];
      let cols, rows;
      let hexSize = 30; // Ukuran segi enam

      function setup() {
        createCanvas(windowWidth, windowHeight);
        // Menghitung kolom dan baris berdasarkan ukuran segi enam
        cols = int(width / (hexSize * sqrt(3)*1));
        rows = int(height / (hexSize * 3 / 2*7));

        // Membuat objek segi enam untuk tiap posisi di grid
        for (let i = 0; i < cols; i++) {
          for (let j = 0; j < rows; j++) {
            let x = i * hexSize * sqrt(3);
            let y = hexSize * 3 / 2 * j;

            // Penyesuaian posisi untuk tiap baris yang bergantian
            if (j % 2 == 1) {
              x += (hexSize * sqrt(3)) / 2;
            }

            hexagons.push(new Hexagon(x, y, hexSize));
          }
        }
      }

      function draw() {
        background(255);
        noStroke();
        fill(0, 100, 200, 100); // Warna segi enam

        // Menggambar dan menganimasikan setiap segi enam
        hexagons.forEach(hexagon => {
          hexagon.update();
          hexagon.show();
        });
      }

      // Objek segi enam
      class Hexagon {
        constructor(x, y, s) {
          this.x = x;
          this.y = y;
          this.size = s;
          this.offset = random(TWO_PI); // Fase awal yang acak
        }

        // Update mengubah posisi y berdasarkan noise
        update() {
          let waveSpeed = 0.01; // Kecepatan gelombang
          let waveHeight = 10; // Ketinggian gelombang
          this.y = waveHeight * sin(frameCount * waveSpeed + this.offset) + this.y;
        }

        // Menampilkan segi enam
        show() {
          push();
          translate(this.x, this.y);
          fill(102, 255, 102); // Menggunakan warna hijau cerah
          beginShape();
          for (let i = 0; i < TWO_PI; i += TWO_PI / 3) { // 6 sisi dari segi enam
            let x = this.size * cos(i);
            let y = this.size * sin(i);
            vertex(x, y);
          }
          endShape(CLOSE);
          pop();
        }

      }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>