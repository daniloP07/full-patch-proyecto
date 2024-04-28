<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .stars i {
            color: #ffd700;
        }
        
        .stars i.checked {
            color: #ffdb58;
        }
    </style>
</head>
<body>
    @include('navbar')

    <center><h1>Los mejores bares de garzon huila</h1></center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://cdn.forbes.co/2020/02/sofitel-legend-santa-clara-outdoor-pool.jpg">
                    <p>Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="stars">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.678a0e2cd5edd9728adc166a454bdd4d?rik=dDjH8V8YHAkAjA&pid=ImgRaw&r=0">
                    <p>Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="stars">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg">
                    <p>Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="stars">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/16/1a/ea/54/hotel-presidente-4s.jpg">
                    <p>Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="stars">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.kayak.com.co/news/wp-content/uploads/sites/180/2023/08/THEME_HOTEL_SIGN_FIVE_STARS_FACADE_BUILDING_GettyImages-1320779330-3.jpg">
                    <p>Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="stars">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.kayak.com.co/news/wp-content/uploads/sites/180/2023/08/THEME_HOTEL_SIGN_FIVE_STARS_FACADE_BUILDING_GettyImages-1320779330-3.jpg">
                    <p>Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="stars">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const stars = document.querySelectorAll('.fa-star');
        const starsContainer = document.querySelector('.stars');

        stars.forEach(function(star, index) {
            star.addEventListener('click', function() {
                clearStars();
                for (let i = 0; i <= index; i++) {
                    stars[i].classList.add('checked');
                }
            });

            star.addEventListener('mouseover', function() {
                highlightStars(index);
            });

            star.addEventListener('mouseout', function() {
                clearStars();
                for (let i = 0; i <= index; i++) {
                    if (stars[i].classList.contains('checked')) {
                        stars[i].classList.remove('checked');
                    }
                }
            });
        });

        function clearStars() {
            stars.forEach(function(star) {
                star.classList.remove('checked');
            });
        }

        function highlightStars(index) {
            clearStars();
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add('checked');
            }
        }
    });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

