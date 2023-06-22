<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Vanward International
        </title>  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            #loader {
                width: 70px;
                height: 70px;
                animation: loading 2s linear infinite;
            }

            .loader-logo{
                position: fixed;
                top: 50%;
                left: 50%;
                width: 50%;
                height: auto;
                transform: translate(-50%, -50%);
            }

            @keyframes loading {
                0% {
                    width: 0;
                }
                50% {
                    width: 50%;
                }
                100% {
                    width: 100%;
                }
            }		
        </style>
    </head>
    <body>
        <div class="loading-bar" id="loader">
                <img src="{{ asset('logo.gif') }}" class="loader-logo" >
                <div class="progress"></div>
        </div>
        <div class="col-lg-12 text-center">
            <div class="p-2">
                <img src="{{ asset('logo-1.png') }}" class="img-fluid" alt="" style="width:250px;">
               
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row text-center">
                <div id="chartdiv"></div>
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
        <script>
            document.onreadystatechange = function () {
                if (document.readyState !== "complete") {
                    document.querySelector(
                        "body").style.visibility = "hidden";
                    document.querySelector(
                        "#loader").style.visibility = "visible";
                } else {
                    document.querySelector(
                        "#loader").style.display = "none";
                    document.querySelector(
                        "body").style.visibility = "visible";
                }
            };
        </script>
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
    <!-- Styles -->
<style>
    #chartdiv {
      width: 100%;
      height: 500px;
      max-width: 100%;
    }
    </style>
    
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    
    <!-- Chart code -->
    <script>
    am5.ready(function() {
    
    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");
    
    
    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);
    
    
    // Create the map chart
    // https://www.amcharts.com/docs/v5/charts/map-chart/
    var chart = root.container.children.push(am5map.MapChart.new(root, {
      panX: "rotateX",
      panY: "rotateY",
      projection: am5map.geoOrthographic(),
      paddingBottom: 20,
      paddingTop: 20,
      paddingLeft: 20,
      paddingRight: 20
    }));
    
    
    // Create main polygon series for countries
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow
    }));
    
    polygonSeries.mapPolygons.template.setAll({
      tooltipText: "{name}",
      toggleKey: "active",
      interactive: true
    });
    
    polygonSeries.mapPolygons.template.states.create("hover", {
      fill: root.interfaceColors.get("primaryButtonHover")
    });
    
    
    // Create series for background fill
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
    var backgroundSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {}));
    backgroundSeries.mapPolygons.template.setAll({
      fill: root.interfaceColors.get("alternativeBackground"),
      fillOpacity: 0.1,
      strokeOpacity: 0
    });
    backgroundSeries.data.push({
      geometry: am5map.getGeoRectangle(90, 180, -90, -180)
    });
    
    
    // Create graticule series
    // https://www.amcharts.com/docs/v5/charts/map-chart/graticule-series/
    var graticuleSeries = chart.series.push(am5map.GraticuleSeries.new(root, {}));
    graticuleSeries.mapLines.template.setAll({ strokeOpacity: 0.1, stroke: root.interfaceColors.get("alternativeBackground") })
    
    
    // Rotate animation
    chart.animate({
      key: "rotationX",
      from: 0,
      to: 360,
      duration: 30000,
      loops: Infinity
    });
    
    
    // Make stuff animate on load
    chart.appear(1000, 100);
    
    }); // end am5.ready()
    </script>
    </html>