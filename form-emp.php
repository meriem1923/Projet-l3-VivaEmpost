<!DOCTYPE html>
<html lang="en">
<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        body{
        height: 160svh ;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 10px;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(115deg, #b1c8fa 10%, #fabbbb 90%);
        background-size: cover; /* Set the desired size */
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
        .container{
        max-width: 800px;
        background: #fff;
        width: 700px;
        padding: 25px 40px 10px 40px;
        margin-bottom: 30px;
        margin-top: 30px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        top: 1%;
        position: relative;
        }
        .container .text{
        text-align: center;
        font-size: 41px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        background: -webkit-linear-gradient(right, #0022ff, #ea0101, #0022ff, #ea0101);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }
        .container form{
        padding: 30px 0 0 0;
        }
        .container form .form-row{
        display: flex;
        margin: 32px 0;
        }
        form .form-row .input-data{
        width: 100%;
        height: 40px;
        margin: 0 20px;
        position: relative;
        }
        .container .form-row .input-data .date-label{
            position: absolute;
            margin-bottom: 20px;
        }
        form .form-row .textarea{
        height: 70px;
        }
        .input-data input,
        .textarea textarea{
        display: block;
        width: 100%;
        height: 100%;
        border: none;
        font-size: 17px;
        border-bottom: 2px solid rgba(0,0,0, 0.12);
        }
        .input-data input:focus ~ label, .textarea textarea:focus ~ label,
        .input-data input:valid ~ label, .textarea textarea:valid ~ label{
        transform: translateY(-20px);
        font-size: 14px;
        color: #3498db;
        }
        .textarea textarea{
        resize: none;
        padding-top: 10px;
        }
        .input-data label{
        color: #09436a;
        position: absolute;
        pointer-events: none;
        bottom: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        }
        .textarea label{
        width: 100%;
        bottom: 40px;
        background: #fff;
        }
        .input-data .underline{
        position: absolute;
        bottom: 0;
        height: 2px;
        width: 100%;
        }
        .input-data .underline:before{
        position: absolute;
        content: "";
        height: 2px;
        width: 100%;
        background: #3498db;
        transform: scaleX(0);
        transform-origin: center;
        transition: transform 0.3s ease;
        }
        .input-data input:focus ~ .underline:before,
        .input-data input:valid ~ .underline:before,
        .textarea textarea:focus ~ .underline:before,
        .textarea textarea:valid ~ .underline:before{
        transform: scale(1);
        }
        .submit-btn .input-data{
        overflow: hidden;
        height: 45px!important;
        width: 25%!important;
        }
        .submit-btn .input-data .inner{
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(right, #6778eb, #f06969, #6778eb, #f06969);
        transition: all 0.4s;
        }
        .submit-btn .input-data:hover .inner{
        left: 0;
        }
        .submit-btn .input-data input{
        background: none;
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        position: relative;
        z-index: 2;
        }

        @media (max-width: 700px) {
        .container .text{
            font-size: 30px;
        }
        .container form{
            padding: 10px 0 0 0;
        }
        .container form .form-row{
            display: block;
        }
        form .form-row .input-data{
            margin: 35px 0!important;
        }
        .submit-btn .input-data{
            width: 40%!important;
        }
        }
    </style>
<head>
    <meta charset="UTF-8">
    <title>Sign Up Formulaire</title>
</head>
<body>
    <div class="container">
        <div class="text">inscription </div>
        <form action="form-emp2.php" method="post" enctype="multipart/form-data">
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
                    <label for="Date_naissance" class="date-label">Date de naissance </label>
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

             <!--  <div class="form-row submit-btn">
                <div class="input-data">
                    <input type="submit" value="Submit" name="Submit">-->
                    <div class="form-row submit-btn" style="margin-bottom: 10px;">
                        <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" value="Submit" name="Submit" >
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>