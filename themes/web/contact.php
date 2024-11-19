<?php
    echo $this->layout("_theme");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Oficina de Hardware</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Estilos básicos */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #6A1B9A; /* Cor de fundo roxa */
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        h1 {
            margin: 0;
            font-size: 2rem;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            text-align: center;
        }

        .contact-container h2 {
            color: #6A1B9A; /* Cor roxa para os títulos */
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .contact-info {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }

        .contact-info p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
        }

        .contact-info ul li {
            margin: 1rem 0;
            font-size: 1.1rem;
        }

        .contact-info ul li i {
            margin-right: 10px;
            color: #6A1B9A; /* Cor roxa para os ícones */
        }

        .social-media {
            margin-top: 2rem;
        }

        .social-media a {
            color: #6A1B9A; /* Cor roxa para os links */
            font-size: 1.5rem;
            margin: 0 1rem;
            text-decoration: none;
        }

        .social-media a:hover {
            color: #9C4D97; /* Roxo mais claro no hover */
        }

        /* Formulário de Contato */
        .contact-form {
            margin-top: 3rem;
            width: 100%;
            max-width: 800px;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color: #6A1B9A; /* Cor de fundo roxa */
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2rem;
            width: 100%;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #9C4D97; /* Roxo mais claro no hover */
        }
    </style>
</head>
<body>
    <header>
        <h1>Oficina de Hardware - Contato</h1>
    </header>

    <div class="contact-container">
        <h2>Entre em Contato Conosco</h2>
        <p>Se você tiver qualquer dúvida ou precisar de mais informações sobre nossas oficinas de hardware, estamos aqui para ajudar! Escolha a forma que for mais conveniente para você.</p>

        <!-- Informações de Contato -->
        <div class="contact-info">
            <h3>Informações de Contato</h3>
            <p>Você pode nos contatar através dos seguintes canais:</p>
            <ul>
                <li><i class="fa fa-envelope"></i> E-mail: <a href="mailto:contato@oficinadehardware.com">contato@oficinadehardware.com</a></li>
                <li><i class="fa fa-phone"></i> Telefone: (11) 1234-5678</li>
                <li><i class="fa fa-map-marker"></i> Endereço: Rua das Tecnologias, 123, São Paulo, SP</li>
            </ul>




    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
