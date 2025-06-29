<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
    <header>
        <h1>Chantal Jaskulla</h1>
        <p>Fachinformatikerin für Anwendungsentwicklung</p>
    </header>

    <nav class="navbar">
        <ul>
        <li><a href="index.php">Start</a></li>
            <li><a href="/sites/aboutme.php">Über mich</a></li>
            <li><a href="/sites/cv.php">Lebenslauf</a></li>
            <li><a href="/sites/contact.php">Kontakt</a></li>
        </ul>
    </nav>

    <div class="content">
        <div id="welcome" class="section">
            <h2>Herzlich Willkommen auf meiner Homepage!</h2>
            <p>Diese Homepage gilt als Portfolio meiner Person, angrenzend zu meinen Bewerbungsunterlagen.</p>
            <p>Schauen Sie sich gerne um und entdecken Sie weitere Projekte auf meinem Github Account: ...</p>
        </div>

        <div id="guestbook" class="section">
            <h2>Gästebuch</h2>
            <p>In diesem Bereich kann eine Nachricht hinterlassen werden, die in der Datenbank gespeichert wird.</p>
            <p>Angezeigt werden die folgenden zehn Einträge, die zuletzt eingegangen sind.

            <h3>Einträge</h3>
            <p>...</p>
            <p>...</p>
            <p>...</p>

            <h3>Gästebucheintrag verfassen</h3>
            <form method="post" action="$_SERVER['PHP_SELF']">
                <label for="name">Name:</label><br>
                <input id="name" name="name" type="text">
                <br>
                <label for="message">Nachricht:</label><br>
                <textarea id="message" name="message"></textarea>
                <br><br>
                <input type="submit" name="submit">
            </form>
            <br><br>

            <?php
if(isset($_POST['submit']))
{
    if(isset($_POST['name']) || isset($_POST['message']))
    {
        $name = $_POST['name'];
        $message = $_POST['message'];

        echo "Name: ";
        echo $name;
        echo "<br>";
        echo "Nachricht: ";
        echo $message;
    }
}

?>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Chantal Jaskulla</p>
    </footer>

</body>
</html>
