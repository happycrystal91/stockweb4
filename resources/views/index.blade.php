<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Vanward
        </title>  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    </head>
    <body>
        <div class="col-lg-12 text-center">
            <div class="p-2">
                <img src="{{ asset('main/img/logo-dark.png') }}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <img src="{{ asset('europe-icon-3.jpg') }}" class="img-fluid" alt="">
                    <h2><a onclick="countryEurope()">Europe</a></h2>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('southeast-asia-icon-4.jpg') }}" class="img-fluid" alt="">
                    <h2><a onclick="countryAsia()">Asia Pacific</a></h2>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="col-lg-12" id="countryEurope" style="display: none;">
            <div class="row text-center">               
                <div class="col-md-4">
                    <p>Austria</p>
                    <p>Belgium</p>
                    <p>Denmark</p>
                    <p>Finland</p>
                    <p>France</p>
                    <p>Germany</p>
                </div>
                <div class="col-md-4">
                    <p><a href="{{ url('/main2') }}">Iceland</a></p>
                    <p>Italy</p>
                    <p>Liechtenstein</p>
                    <p>Luxembourg</p>
                    <p>Netherlands</p>
                    <p>Norway</p>
                </div>
                <div class="col-md-4">
                    <p>Portugal</p>
                    <p>Spain</p>
                    <p>Sweden</p>
                    <p>Switzerland</p>
                    <p>United Kingdom</p> 
                </div>    
            </div>
        </div>
        <div class="col-lg-12" id="countryAsia" style="display: none;">
            <div class="row text-center">               
                <div class="col-md-6">
                    <p>Australia</p>
                </div>
                <div class="col-md-6">
                    <p>China</p>
                </div>
            </div>
        </div>
    </body>
    <script>
       function countryEurope() {
        var eur = document.getElementById("countryEurope");
        var asia = document.getElementById("countryAsia");

        if (eur.style.display === "none") {
            eur.style.display = "block";
            asia.style.display = "none";
        } else {
            eur.style.display = "none";
            asia.style.display = "none";
        }
      } 
      function countryAsia() {
        var eur = document.getElementById("countryEurope");
        var asia = document.getElementById("countryAsia");

        if (asia.style.display === "none") {
            eur.style.display = "none";
            asia.style.display = "block";
        } else {
            eur.style.display = "none";
            asia.style.display = "none";
        }
      } 
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>