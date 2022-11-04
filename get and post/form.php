<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário com PHP</h1>
    <hr>
    <form action="receive_form.php" method="post">
        <label for="">Nome</label><br>
        <input type="text" name="nome" id="nome"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br><br>

        <fieldset>
            <legend>Área de interesse</legend>
            <input type="checkbox" name="interesse[]" id="" value="informatica"> Informática <br>
            <input type="checkbox" name="interesse[]" id="" value="esporte"> Esporte <br>
            <input type="checkbox" name="interesse[]" id="" value="compras"> Compras <br>
            <input type="checkbox" name="interesse[]" id="" value="moda"> Moda <br>
            <input type="checkbox" name="interesse[]" id="" value="ciencia"> Ciência <br>
            <input type="checkbox" name="interesse[]" id="" value="religiao"> Religião <br>
        </fieldset>
        <br>

        <label for="">Onde conheceu?</label><br>
        <select name="onde_conheceu" id="">
            <option value="">Selecione</option>
            <option value="google">Google</option>
            <option value="amigos">Amigos</option>
            <option value="tv">TV</option>
        </select>
        <br><br>

        <label for="">Mensagem</label><br>
        <textarea name="mensagem" id="" cols="30" rows="10"></textarea>
        <br><br>

        <fieldset>
            <legend>Redirecionar para: </legend>
            <input type="radio" name="redirecionar" id="" value="home"> Home <br>
            <input type="radio" name="redirecionar" id="" value="contatos"> Contatos <br>
        </fieldset>

        <hr>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>