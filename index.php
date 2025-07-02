<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start</title>
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>

  <div class="headergroup">
    <div>
      <img src="img/picture.png" alt="picture">
    </div>
    <header>
      <h1 class="dancing-script">Chantal Jaskulla</h1>
      <p>Fachinformatikerin für Anwendungsentwicklung</p>
    </header>
  </div>

  <nav class="navbar">
    <ul>
      <li><a href="index.html" class="press-start-2p-regular">Start</a></li>
      <li><a href="sites/aboutme.html" class="press-start-2p-regular">Über mich</a></li>
      <li><a href="sites/cv.html" class="press-start-2p-regular">Lebenslauf</a></li>
      <li><a href="sites/contact.html" class="press-start-2p-regular">Kontakt</a></li>
    </ul>
  </nav>

  <div class="content">
    <div class="contentgroup">
      <div>
        <i class="fa-solid fa-hand-holding-heart fa-10x"></i>
      </div>

      <div id="welcome" class="section">
        <h2>Herzlich Willkommen auf meiner Homepage!</h2>
        <p>Gerne durchklicken und sich im Gästebuch verewigen.</p>
        <p>Vielen Dank für deinen Besuch &#128522;</p>
      </div>
    </div>

    <div class="contentgroup">
      <div class="contentimage">
        <i class="fa-solid fa-address-book fa-10x"></i>
      </div>

      <div id="guestbook" class="section">
        <h2>Gästebuch</h2>
        <p>In diesem Bereich kann eine Nachricht hinterlassen werden, die in meiner Datenbank gespeichert und hier angezeigt wird.</p>

        <h3>Gästebucheintrag verfassen</h3>


        <div class="container">
          <form action="php/guestbook_form.php" method="POST">
            <div class="row">
              <div class="col-25">
                <label for="name">Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Ihr Name..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="message">Nachricht</label>
              </div>
              <div class="col-75">
                <textarea id="message" name="message" placeholder="Schreibe etwas.." style="height:200px"></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <input type="submit" value="Absenden">
            </div>
          </form>
        </div>

        <h3>Einträge</h3>
        <p><?php include('php/guestbook_entries.php'); ?></p>


      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Chantal Jaskulla</p>
  </footer>

</body>

</html>