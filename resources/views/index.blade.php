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

<style>
    #loader {
      width: 70px;
      height: 70px;
      animation: loading 2s linear infinite;
    }

    .loader-logo {
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

    .navbar-brand {
      font-size: 1.4em;
    }
    .navbar-dark .navbar-nav a.nav-link {
      color: #ffffff;
      font-size: 1.1em;
    }
    .dropdown-menu {
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      border: none;
      border-radius: 0;
      padding: 0.7em;
    }
    @media only screen and (min-width: 992px) {
      .dropdown:hover .dropdown-menu {
        display: flex;
      }
      .dropdown-menu.show {
        display: flex;
      }
    }
    .dropdown-menu ul {
      list-style: none;
      padding: 0;
    }
    .dropdown-menu li .dropdown-item {
      color: gray;
      font-size: 1em;
      padding: 0.5em 1em;
    }
    .dropdown-menu li .dropdown-item:hover {
      background-color: #f1f1f1;
    }
    /* .dropdown-menu li:first-child a {
      font-weight: bold;
      font-size: 1.1em;
      text-transform: uppercase;
      color: #516beb;
    } */
    .dropdown-menu li:first-child a:hover {
      background-color: #f1f1f1;
    }
    @media only screen and (max-width: 992px) {
      .dropdown-menu.show {
        flex-wrap: wrap;
        max-height: 350px;
        overflow-y: scroll;
      }
    }
    @media only screen and (min-width: 992px) and (max-width: 1140px) {
      .dropdown:hover .dropdown-menu {
        width: 40vw;
        flex-wrap: wrap;
      }
    }

    .dropdown-menu {
      border-radius: 0;
      border: none;
      padding: 0.5em;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
    }
    .dropdown-menu ul {
      list-style: none;
      padding: 0;
    }

    .dropdown-menu li a {
      color: gray;
      padding: 0.5em 1em;
    }
    /* .dropdown-menu li:first-child a {
      font-weight: bold;
      font-size: 1.1em;
      color: #516beb;
    } */
    @media screen and (min-width: 993px) {
      .dropdown:hover .dropdown-menu {
        display: flex;
      }
      .dropdown-menu.show {
        display: flex;
      }
    }
    @media screen and (max-width: 992px) {
      .dropdown-menu.show {
        max-height: 60vh;
        overflow-y: scroll;
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="row text-center">
                        <div id="chartdiv"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-6 col-md-6 p-4">
                        <div class="">
                          <!-- <h2><a onclick="countryAsia()">Asia Pacific</a></h2> -->
                          <a
                            class="btn btn-secondary dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            Asia Pacific
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Australia</a></li>
                            <li><a class="dropdown-item" href="#">China</a></li>
                          </ul>
            
                          <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            Europe
                          </a>
                          <div class="dropdown-menu">
                            <ul>
                              <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                              <li><a class="dropdown-item" href="#">Austria</a></li>
                              <li><a class="dropdown-item" href="#">Belgium</a></li>
                              <li><a class="dropdown-item" href="#">Denmark</a></li>
                              <li><a class="dropdown-item" href="#">Finland</a></li>
                              <li><a class="dropdown-item" href="#">France</a></li>
                              <li><a class="dropdown-item" href="#">Germany</a></li>
                            </ul>
                            <ul>
                              <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                              <li><a class="dropdown-item" href="#">Iceland</a></li>
                              <li><a class="dropdown-item" href="#">Italy</a></li>
                              <li><a class="dropdown-item" href="#">Liechtenstein</a></li>
                              <li><a class="dropdown-item" href="#">Luxembourg</a></li>
                              <li><a class="dropdown-item" href="#">Netherlands</a></li>
                              <li><a class="dropdown-item" href="#">Norway</a></li>
                            </ul>
                            <ul>
                              <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                              <li><a class="dropdown-item" href="#">Portugal</a></li>
                              <li><a class="dropdown-item" href="#">Spain</a></li>
                              <li><a class="dropdown-item" href="#">Sweden</a></li>
                              <li><a class="dropdown-item" href="#">Switzerland</a></li>
                              <li><a class="dropdown-item" href="#">United Kingdom</a></li>
                            </ul>
                          </div>
                         
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    {{-- <img src="{{ asset('europe-icon-3.jpg') }}" class="img-fluid" alt=""> --}}
                    <h2><a onclick="countryEurope()">Europe</a></h2>
                </div>
                <div class="col-md-4">
                    {{-- <img src="{{ asset('southeast-asia-icon-4.jpg') }}" class="img-fluid" alt=""> --}}
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

          /**
           * ---------------------------------------
           * This demo was created using amCharts 5.
           *
           * For more information visit:
           * https://www.amcharts.com/
           *
           * Documentation is available at:
           * https://www.amcharts.com/docs/v5/
           * ---------------------------------------
           */

          // Create root element
          // https://www.amcharts.com/docs/v5/getting-started/#Root_element
          var root = am5.Root.new("chartdiv");

          // Set themes
          // https://www.amcharts.com/docs/v5/concepts/themes/
          root.setThemes([am5themes_Animated.new(root)]);

          // Create the map chart
          // https://www.amcharts.com/docs/v5/charts/map-chart/
          var chart = root.container.children.push(
              am5map.MapChart.new(root, {
                  panX: "rotateX",
                  panY: "translateY",
                  projection: am5map.geoMercator()
              })
          );

          var cont = chart.children.push(
              am5.Container.new(root, {
                  layout: root.horizontalLayout,
                  x: 20,
                  y: 40
              })
          );

          // Add labels and controls
          cont.children.push(
              am5.Label.new(root, {
                  centerY: am5.p50,
                  text: "Map"
              })
          );

          var switchButton = cont.children.push(
              am5.Button.new(root, {
                  themeTags: ["switch"],
                  centerY: am5.p50,
                  icon: am5.Circle.new(root, {
                      themeTags: ["icon"]
                  })
              })
          );

          switchButton.on("active", function() {
              if (!switchButton.get("active")) {
                  chart.set("projection", am5map.geoMercator());
                  chart.set("panY", "translateY");
                  chart.set("rotationY", 0);
                  backgroundSeries.mapPolygons.template.set("fillOpacity", 0);
              } else {
                  chart.set("projection", am5map.geoOrthographic());
                  chart.set("panY", "rotateY");

                  backgroundSeries.mapPolygons.template.set("fillOpacity", 0.1);
              }
          });

          cont.children.push(
              am5.Label.new(root, {
                  centerY: am5.p50,
                  text: "Globe"
              })
          );

          // Create series for background fill
          // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
          var backgroundSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {}));
          backgroundSeries.mapPolygons.template.setAll({
              fill: root.interfaceColors.get("alternativeBackground"),
              fillOpacity: 0,
              strokeOpacity: 0
          });

          // Add background polygon
          // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
          backgroundSeries.data.push({
              geometry: am5map.getGeoRectangle(90, 180, -90, -180)
          });

          // Create main polygon series for countries
          // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
          var polygonSeries = chart.series.push(
              am5map.MapPolygonSeries.new(root, {
                  geoJSON: am5geodata_worldLow
              })
          );

          // Create line series for trajectory lines
          // https://www.amcharts.com/docs/v5/charts/map-chart/map-line-series/
          var lineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
          lineSeries.mapLines.template.setAll({
              stroke: root.interfaceColors.get("alternativeBackground"),
              strokeOpacity: 0.3
          });

          // Create point series for markers
          // https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
          var pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
          var colorset = am5.ColorSet.new(root, {});

          pointSeries.bullets.push(function() {
              var container = am5.Container.new(root, {
                  tooltipText: "{title}",
                  cursorOverStyle: "pointer"
              });

              container.events.on("click", (e) => {
                  window.location.href = e.target.dataItem.dataContext.url;
              });



              var circle = container.children.push(
                  am5.Circle.new(root, {
                      radius: 4,
                      tooltipY: 0,
                      fill: colorset.next(),
                      strokeOpacity: 0
                  })
              );


              var circle2 = container.children.push(
                  am5.Circle.new(root, {
                      radius: 4,
                      tooltipY: 0,
                      fill: colorset.next(),
                      strokeOpacity: 0,
                      tooltipText: "{title}"
                  })
              );

              circle.animate({
                  key: "scale",
                  from: 1,
                  to: 5,
                  duration: 600,
                  easing: am5.ease.out(am5.ease.cubic),
                  loops: Infinity
              });
              circle.animate({
                  key: "opacity",
                  from: 1,
                  to: 0.1,
                  duration: 600,
                  easing: am5.ease.out(am5.ease.cubic),
                  loops: Infinity
              });

              return am5.Bullet.new(root, {
                  sprite: container
              });
          });

          var cities = [
              {
                  title: "Kuala Lumpur",
                  latitude: 3.1289,
                  longitude: 101.7216,
                  url: "https://testweb2.vanwardintl.com/main2"
              }
          ];

          for (var i = 0; i < cities.length; i++) {
              var city = cities[i];
              addCity(city.longitude, city.latitude, city.title, city.url);
          }

          function addCity(longitude, latitude, title, url) {
              pointSeries.data.push({
                  url: url,
                  geometry: {
                      type: "Point",
                      coordinates: [longitude, latitude]
                  },
                  title: title
              });
          }

          // Make stuff animate on load
          chart.appear(1000, 100);


      }); // end am5.ready()
  </script>
    
    </html>