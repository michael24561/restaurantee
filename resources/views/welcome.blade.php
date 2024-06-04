<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Fabulosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FDF5E6; /* Color de fondo principal */
            color: #333; /* Color de texto principal */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 32px;
            color: #FF4500; /* Color del título principal */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            color: #FF4500; /* Color del enlace del menú */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #FF6347; /* Color del enlace del menú al pasar el ratón */
        }

        .card {
            background-color: #FFF8DC; /* Color de fondo de las tarjetas */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            font-size: 24px;
            font-weight: bold;
            color: #FF4500; /* Color del título de la tarjeta */
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            line-height: 1.6;
            color: #666; /* Color del texto de la tarjeta */
            margin-bottom: 20px;
        }

        .card a {
            color: #FF4500; /* Color del enlace de la tarjeta */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .card a:hover {
            color: #FF6347; /* Color del enlace de la tarjeta al pasar el ratón */
        }

        footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #CCC;
            font-size: 14px;
            color: #999; /* Color del texto del pie de página */
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Restaurante Fabulosa</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="card">
                <h2>Bienvenido a Restaurante Fabulosa</h2>
                <p>Somos un restaurante dedicado a ofrecerte experiencias gastronómicas únicas. Desde nuestro delicioso menú del día hasta nuestros servicios de reservaciones y organización de eventos, nos esforzamos por hacer que tu visita sea inolvidable.</p>
                <p>Con ingredientes frescos y de la mejor calidad, nuestro equipo de chefs expertos prepara cada plato con pasión y creatividad para que disfrutes de sabores auténticos y deliciosos.</p>
                <p>Ya sea que estés buscando un lugar para disfrutar de una comida tranquila con amigos o para celebrar un evento especial, estamos aquí para atenderte con la hospitalidad y el ambiente acogedor que nos distingue.</p>
                <a href="#">Ver Menú</a>
            </div>

            <div class="card">
                <h2>Nuestro Menú</h2>
                <p>Descubre una amplia selección de platos exquisitos, desde entradas hasta postres. Explora nuestras opciones para satisfacer tus antojos y deleitar tu paladar.</p>
                <a href="#">Explorar Menú</a>
            </div>

            <div class="card">
                <h2>Reservaciones</h2>
                <p>Garantiza tu lugar en nuestro restaurante reservando una mesa con anticipación. Disfruta de una comida sin preocupaciones y déjanos consentirte con nuestro servicio excepcional.</p>
                <a href="#">Hacer Reserva</a>
            </div>

            <div class="card">
                <h2>Eventos Especiales</h2>
                <p>Celebra tus momentos especiales con nosotros. Desde cumpleaños hasta reuniones corporativas, nuestro equipo está preparado para ofrecerte un servicio personalizado y una experiencia inolvidable.</p>
                <a href="#">Más Información</a>
            </div>
        </main>

        <footer>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
</body>

</html>
