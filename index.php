<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <?php include('php/nav.php'); ?>

     <div class="content">
        <div class="contentgroup">
            <div>
                <i class="fa-solid fa-hand-holding-heart fa-10x"></i>
            </div>

            <div id="welcome" class="section">
                <h2>Herzlich Willkommen auf meiner Homepage!</h2>
            <p>Diese Homepage gilt als Portfolio meiner Person, angrenzend zu meinen Bewerbungsunterlagen.</p>
            <p>Schauen Sie sich gerne um und entdecken Sie weitere Projekte auf meinem Github Account: ...</p>
            </div>
        </div>

        <div class="contentgroup">
            <div>
                <i class="fa-solid fa-address-book fa-10x"></i>
            </div>
        
            <div id="guestbook" class="section">
                <h2>Gästebuch</h2>
            <p>In diesem Bereich kann eine Nachricht hinterlassen werden, die in der Datenbank gespeichert wird.</p>
            <p>Angezeigt werden die folgenden zehn Einträge, die zuletzt eingegangen sind (wenn vorhanden).

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
            <p><?php include('php/guestbook_entries.php');?></p>
           
        
          </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Chantal Jaskulla</p>
    </footer>

</body>
</html>
