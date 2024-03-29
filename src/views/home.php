<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iremnurgocer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>
<header class="bg-dark text-light">
    <div class="container">
        <h1><a href="/" class="link"><?php echo "İREM NUR GÖÇER"; ?></a></h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link link" href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="jumbotron text-center">
    <div class="container">
        <h2>Software Developer</h2>
        <p>Welcome to my personal website.</p>
    </div>
</section>

<main class="container">
    <section class="row">
        <?php foreach($blogs as $blogsid => $blogsValue) { ?>
        <div class="col-md-6 blogs-div">
            <a href="blog?id=<?= $blogsid ?>" class="blogs-link">
                <h2 class="text-center"><?=EncodingHelper::isotoutf(EncodingHelper::utftoiso($blogsValue["title"]))?></h2>
                <p class="text-center"><?=EncodingHelper::isotoutf(EncodingHelper::utftoiso($blogsValue["abstract"]))?></p>
            </a>
        </div>
        <?php } ?>
    </section>
</main>



<footer class="bg-dark text-light text-center py-4 mt-4">
    <div class="container">
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
