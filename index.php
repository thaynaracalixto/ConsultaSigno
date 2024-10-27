<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <h1 style="color: black;">Descubra o seu signo:</h1>

    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Informe sua data de nascimento:</label> <br>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="text-center">
    <button type="submit" class="btn" style="background-color: #800000; color: white; border-radius: 25px;">Consultar</button>
</div>

    </form>
</div>
