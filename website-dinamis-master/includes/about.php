<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Saya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Portfolio Section -->
    <section id="portfolio" class="container py-5">
        <h2 class="text-center mb-4">Proyek Saya</h2>
        <div class="row">
            <?php
            // Array proyek dengan data dinamis
            $projects = [
                [
                    "title" => "Program Kasir",
                    "image" => "assets/images/ss9.png",
                    "description" => "Program Kasir",
                    "link" => "https://github.com/romirahmanw112/program-kasir-uas.git"
                ],

            ];

            // Menampilkan setiap proyek dalam array
            foreach ($projects as $project) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="' . $project["image"] . '" class="card-img-top" alt="' . $project["title"] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $project["title"] . '</h5>
                            <p class="card-text">' . $project["description"] . '</p>
                            <a href="' . $project["link"] . '" class="btn btn-danger" target="_blank">Lihat Detail</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>