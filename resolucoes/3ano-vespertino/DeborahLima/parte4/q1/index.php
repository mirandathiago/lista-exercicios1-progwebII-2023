<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Formulário de Frutas</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Entre em contato</h2>
            <form action="resposta.php" method="post">
                <label>Nome:
                    <input type="text" id="nome" name="nome" required>
                </label>

               <fieldset>
                    <legend>Selecione suas frutas favoritas:</legend>
                    <div>
                        <input type="checkbox" id="banana" name="frutas[]" value="Banana">
                        <label for="banana">Banana</label>
                    </div>

                    <div>
                        <input type="checkbox" id="morango" name="frutas[]" value="Morango">
                        <label for="morango">Morango</label>
                    </div>

                    <div>
                        <input type="checkbox" id="uva" name="frutas[]" value="Uva">
                        <label for="uva">Uva</label>
                    </div>

                    <div>
                        <input type="checkbox" id="abacaxi" name="frutas[]" value="Abacaxi">
                        <label for="abacaxi">Abacaxi</label>
                    </div>

                    <div>
                        <input type="checkbox" id="laranja" name="frutas[]" value="Laranja">
                        <label for="laranja">Laranja</label>
                    </div>

                    <div>
                        <input type="checkbox" id="manga" name="frutas[]" value="Manga">
                        <label for="Manga">Manga</label>
                    </div>

                    <div>
                        <input type="checkbox" id="kiwi" name="frutas[]" value="Kiwi">
                        <label for="kiwi">Kiwi</label>
                    </div>

                    <div>
                        <input type="checkbox" id="tangerina" name="frutas[]" value="Tangerina">
                        <label for="tangerina">Tangerina</label>
                    </div>
                </fieldset>

                <button name="enviar"> Enviar </button>
            </form>
        </div>      
    </div>
</body>
</html>
