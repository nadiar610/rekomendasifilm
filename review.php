<!DOCTYPE html>
<html lang="id">
<head>
<head>
    <meta charset="UTF-8">
    <title>Review Rekomendasi</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/review.css">    


</head>
<body>
   <!-- sidebar start-->
   <nav class="main-menu">
    <ul>
        <li><a href="index.php"><i class="fa fa-home nav-icon"></i><span class="nav-text">Home</span></a></li>
        <li class="has-dropdown">
            <a href="index.php"><i class="fa fa-film nav-icon"></i><span class="nav-text">Rekomendasi</span></a>
            <ul class="dropdown">
                <li><a href="movie.php">Movie</a></li>
                <li><a href="series.php">Series</a></li>
            </ul>
        </li>
        <li><a href="review.php"><i class="fa fa-star nav-icon"></i><span class="nav-text">Review</span></a></li>
    </ul>
    <ul class="logout">
        <li><a href="profile.php"><i class="fa-solid fa-user nav-icon"></i><span class="nav-text">Profile</span></a></li>
        <li><a href=""><i class="fa fa-right-from-bracket nav-icon"></i><span class="nav-text">Logout</span></a></li>
    </ul>
</nav>

<h2>Review Rekomendasi yang Telah Ditonton</h2>
<div class="table-container">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Review</th>
            <th>Rating</th>
        </tr>
            <tr>
                <td>1</td>
                <td>Harry Potter</td>
                <td>Alur cerita nya bagus</td>
                <td>10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Coco</td>
                <td>Animasi nya keren, lagu nya bagus</td>
                <td>10</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dr Romantic</td>
                <td>Cocok untuk yang suka medis</td>
                <td>10</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Dr John</td>
                <td>Dapet pengetahuan medis baru</td>
                <td>10</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
            </tr>
    </table>
</div>


<!-- Footer -->
<footer>
      <div class="col">
        <div class="social">
          <a href="https://www.instagram.com/nadia._.ramadhani_"
            ><i data-feather="instagram"></i
          ></a>
          <a href="#"><i data-feather="twitter"></i></a>
        </div>

        <div class="links">
          <a href="index.html">Home</a><br />
          <a href="movie/movie.php">Movie</a><br />
          <a href="series/series/.php">Series</a><br />
          <a href="review.php">Review</a><br />
        </div>
      </div>

      <div class="credit">
        <a href="pengembang.php">Created by <span>Nadia Ramadhani </span> | &copy; 2024. </a>
      </div>

    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
