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
                    <img src="https://media.admagazine.com/photos/62a3907026b4ad1ad6aa97f9/16:9/w_2560%2Cc_limit/drew-beamer-bTN-zKFy9uA-unsplash.jpg">
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
                    <img src="https://ivancotado.es/wp-content/uploads/2012/03/ivan_cotado_sue%C3%B1o_humedo_ourense_03.jpg.webp">
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
                    <img src="https://emmanuelgutierrez.com/wp-content/uploads/2023/10/ideas-negocio-bares-antros.jpg">
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
                    <img src="https://masaya-experience.com/wp-content/uploads/2019/07/apache-1.png">
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
                    <img src="https://media.admagazine.com/photos/634de8d8540cc6f7dcac29e5/16:9/w_2560%2Cc_limit/bar.jpg">
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
