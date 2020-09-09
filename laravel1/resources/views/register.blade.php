<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <p>First Name :</p>
        <input type="text" name="first-name" id="">

        <p>Last Name :</p>
        <input type="text" name="last" id="last">

        <p>Gender :</p>
        <input type="radio" name="Gender"> Male <br>
        <input type="radio" name="Gender"> Famale <br>
        <input type="radio" name="Gender"> Other <br>

        <p>Nationality :</p>
        <select>
            <option>Indonesian</option>
            <option>Malasyian</option>
            <option>Japanese</option>
            <option>American</option>
        </select>

        <p>Language Spoken :</p>
        <input type="checkbox" name="bahasa">Bahasa Indonesia<br>
        <input type="checkbox" name="bahasa">English<br>
        <input type="checkbox" name="bahasa">Other<br>

        <p>Bio :</p>
        <textarea cols="30" rows="10"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>
</body>

</html>