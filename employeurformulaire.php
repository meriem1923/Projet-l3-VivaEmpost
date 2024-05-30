<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <title>Sign Up Formulaire</title>
</head>
<body>
    <div class="container">
        <div class="text">inscription </div>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Nom" id="Nom" required>
                    <div class="underline"></div>
                    <label for="Nom">Nom</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Prenom" id="Prenom" required>
                    <div class="underline"></div>
                    <label for="Prenom">Prenom</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="date" name="Date_naissance" id="Date_naissance" required>
                    <div class="underline"></div>
                    <label for="Date_naissance">Date naissance</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Langue_metrise" id="Langue_metrise" required>
                    <div class="underline"></div>
                    <label for="Langue_metrise">Langue metrise</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="addresse" id="addresse" required>
                    <div class="underline"></div>
                    <label for="addresse">Adresse</label>
                </div>
                <div class="input-data">
                    <input type="email" name="Email" id="Email" required>
                    <div class="underline"></div>
                    <label for="Email">Email</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="tel" name="Num_telp" id="Num_telp" required>
                    <div class="underline"></div>
                    <label for="Num_telp">Num telp</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Diplome" id="Diplome" required>
                    <div class="underline"></div>
                    <label for="Diplome">Diplome</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Sexe" id="Sexe" required>
                    <div class="underline"></div>
                    <label for="Sexe">Sexe</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Taille" id="Taille" required>
                    <div class="underline"></div>
                    <label for="Taille">Taille</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Situation_fam" id="Situation_fam" required>
                    <div class="underline"></div>
                    <label for="Situation_fam">Situation fam</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="user" id="user" required>
                    <div class="underline"></div>
                    <label for="user">User</label>
                </div>
                <div class="input-data">
                    <input type="password" name="password" id="password" required>
                    <div class="underline"></div>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="file" name="image" id="image" accept="image/*">
                    <div class="underline"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <textarea name="nous_contacter" rows="8" cols="80" required></textarea>
                    <div class="underline"></div>
                    <label for="nous_contacter">Nous contacter</label>
                </div>
            </div>
            <div class="form-row submit-btn">
                <div class="input-data">
                    <input type="submit" value="Submit" name="Submit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
