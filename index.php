<?php include './database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>phpMessage</title>
  <link rel="stylesheet" href="css/style.css">
  </head>
<body>
  <header>
    <div class="container flex-row-center">
      <h1 class="border-left">phpMessage</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="messages-container">

        <ul class="messagers flex-col-center">
          <?php while ( $row = mysqli_fetch_assoc($results) ) : ?>
          
            <li class="<?php echo $row['id']?> message border-left"><span><?php echo $row['time']; ?> | </span><?php echo $row['user']; ?> | <?php echo $row['message']; ?></li>

          <?php endwhile; ?> 
        </ul>

      </div>
    </div> 

    <div class="container">
      <div class="form-container">

        <form class="flex-row-center" method="POST" action="process.php">

          <input id="name" type="text" name="user" placeholder="Enter your name..."/>
          <input id="message" type="text" name="message" placeholder="Enter your message..."/>
          <input id="submit" type="submit" name="submit" value="Send Message" />

        </form>

      </div>
    </div> 
  </main>
</body>
</html>