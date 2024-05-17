<?php
//session elindítása
//import

//új felhasználó
//megfelelő session leolvasása (felhAzon lekérdezése)

//ha nincs bejelentkezve a felhasználó, akkor a bejelentkezéshez ugorjon!

//url-ben állapottartás: ha rákattintott a kijelentkezésre, akkor
//kijelentkeztetés után ugorjon a bejelentkezés oldalra!
?>

<!DOCTYPE html>
<html lang="hu-HU">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
    </head>
    <body>
        <main>
            <div>
				<!--üdvözlés névvel-->
            </div>
			<div>
				<!--url-ben állapottartás: link a kijelentkezésre-->
                <a href="home.php?q=logout">Kijelentkezés</a>
			</div>
			<?php
                // Feltételezzük, hogy van egy isAdmin() függvény, amely ellenőrzi az admin jogosultságot.
                if ($felh->isAdmin()) {
            ?>
            <div>
                <h1>Hello <?php echo $felh->get_nev($felhAzon); ?>!</h1>
            </div>
            <?php
                }
            ?>
        </main>
    </body>
</html>