<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
<header class="bg-dark text-light">
    <div class="container">
        <h1><?php echo EncodingHelper::isotoutf("İREM NUR GÖÇER"); ?></h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
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
        <?php foreach($blog as $blogid => $blogValue) { ?>
        <div class="col-md-6">
            <button class="post-button">
                <h2><?=EncodingHelper::isotoutf($blogValue["title"])?></h2>
                <p><?=EncodingHelper::isotoutf($blogValue["abstract"])?></p>
            </button>
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
