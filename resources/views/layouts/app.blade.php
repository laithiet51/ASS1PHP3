<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        .news-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .news-thumbnail {
            height: 250px;
            object-fit: cover;
        }
        .news-thumbnail1 {
            height: 650px;
            object-fit: cover;
        }
        .news-thumbnail2 {
    width: 64px;
    height: 64px;
    object-fit: cover; 
}
h1 {
    text-align: center; /* căn giữa nội dung */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* chọn font chữ */
    font-size: 2.5rem; /* kích cỡ chữ */
    font-weight: bold; /* độ đậm của chữ */
    color: #333; /* màu chữ */
    margin-top: 20px; /* khoảng cách phía trên */
    margin-bottom: 20px; /* khoảng cách phía dưới */
}


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       @include('layouts.partial.head')
    </nav>
       <!-- Header -->
<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        @include('layouts.partial.header')
    </div>
</header>

    @yield('content')


 <!-- Footer -->
<footer class="bg-dark text-white pt-4">
    @include('layouts.partial.footer')
</footer>

<!-- Bootstrap and FontAwesome scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
