<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Kontaktujte nás</title>
    <link rel="stylesheet" href="style.css">
<body>
<section>
    <form action="contact-send.php" method="post">
        <div class="row">
            <div class="name-second">
            <label for="name">Meno<span>*</span></label>
            <input type="text" placeholder="Jan..." id="name" required name="name">
            </div>
            <div class="name-second">
            <label for="second-name">Priezvisko<span>*</span></label>
            <input type="text" placeholder="Hruštička..." id="second-name" required name="second-name">
            </div>
        </div>
        <label for="mail">E-mail<span>*</span></label>
        <input type="email" placeholder="example@gmail.com..." id="mail" required name="email">
        <label for="tel">Tel.číslo</label>
        <input type="text" placeholder="0900 000 000..." id="tel" name="tel" maxlength="10">
        <div class="question"><p>Ste občanom daného mesta ?<span>*</span></p>
            <div class="row-radio">
                <input type="radio" id="question-yes" value="Áno" name="live-city" required>
                <label for="question-yes">Áno</label>
            </div>
            <div class="row-radio">
            <input type="radio" id="question-no" value="Nie" name="live-city" required>
            <label for="question-no">Nie</label>
            </div>
        </div>
        <label for="note">Vaša poznámka</label>
        <textarea name="note" id="note" cols="30" rows="10" placeholder="Vaša poznámka..."></textarea>
        <button>Odoslať</button>
    </form>
</section>
</body>
</html>
