<?php 

$apiMusic = [
  [
    'title' => 'New Jersey',
    'author' => 'Bon Jovi',
    'year' => 1988,
    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
    'genre' => 'Rock'
  ],
  [
    'title' => 'Live at Wembley 86',
    'author' => 'Queen',
    'year' => 1992,
    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
    'genre' => 'Pop'
  ],
  [
    'title' => 'Ten\'s Summoner\'s Tales',
    'author' => 'Sting',
    'year' => 1993,
    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
    'genre' => 'Pop'
  ],
  [
    'title' => 'Steve Gadd band',
    'author' => 'Steve Gadd Band',
    'year' => 2018,
    'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
    'genre' => 'Jazz'
  ],
  [
    'title' => 'Brave new World',
    'author' => 'Iron Maiden',
    'year' => 2000,
    'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
    'genre' => 'Metal'
  ],
  [
    'title' => 'One more car, one more rider',
    'author' => 'Eric Clapton',
    'year' => 2002,
    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
    'genre' => 'Rock'
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>PHP Ajax Dischi</title>
</head>
<body>
  <header class="p-3">
  <img class="logo" src="./assets/spotify_logo.svg" alt="Spotify Logo" />
  </header>
  <main>
    <div class="container">
      <div class="row justify-content-center py-5">

        <?php
        foreach ( $apiMusic as $key => $value ){
        ?>       
          <div class="col col-2">
            <div class="card p-3">
              <div class="image">
              <img class="img-fluid" src="<?php echo $value['poster']; ?>" alt="Poster" />
              </div>
              <div class="title">
              <h4 class="text-center text-white text-uppercase fs-5">
                <?php 
                echo $value['title']; 
                ?>
              </h4>
              </div>
              <div class="author">
              <span>
                <?php 
                echo $value['author']; 
                ?>
              </span>
              </div>
              <div class="year">
              <span>
                <?php 
                echo $value['year']; 
                ?>
              </span>    
              </div>
            </div>
          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </main>
</body>
</html>

<style>
  header {
    height: 80px;
    background-color: #2e3a46;
  }

  .logo {
    height: 100%;
  }

  main {
    min-height: calc(100vh - 80px);
    background-color: #1e2d3b;
  }

  .card {
  width: 180px;
  height: 320px;
  margin-top: 16px;
  background-color: rgba(255, 255, 255, 0.088);
  text-align: center;
  }

  .image {
    margin-bottom: 16px;
  }

  .title {
    color: white;
  }

  .author,
  .year {
    color: gray;
  }
</style>