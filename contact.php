<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contact-sent.php" method="POST">
        <div>
            <label for="name">Vārds</label>
            <input type="text" name="name" id="name" required />
        </div>

        <div>
            <label for="email">E-pasts</label>
            <input type="email" name="email" id="email" required />
        </div>

        <div>
            <label for="story">Atsauksme</label>
            <textarea id="story" name="story" rows="5" cols="33">
                Jūsu atsauksmes teksts
            </textarea>
        </div>

        <div>
            <input type="submit" value="Nosūtīt" />
        </div>
    </form>
</body>
</html>
