@extends('layouts.app')

@section('content')
    <div class="container">
        <header style="background-color: #FDF5E6; padding: 20px;">
            <h1 style="font-size: 32px; color: #FF4500;">Restaurante Fabulosa</h1>
            <nav>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex;">
                    <li style="margin-right: 20px;"><a href="#" style="color: #FF4500; text-decoration: none; transition: color 0.3s ease;">Inicio</a></li>
                    <li style="margin-right: 20px;"><a href="#" style="color: #FF4500; text-decoration: none; transition: color 0.3s ease;">Menú</a></li>
                    <li style="margin-right: 20px;"><a href="#" style="color: #FF4500; text-decoration: none; transition: color 0.3s ease;">Reservaciones</a></li>
                    <li style="margin-right: 20px;"><a href="#" style="color: #FF4500; text-decoration: none; transition: color 0.3s ease;">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="card" style="background-color: #FFF8DC; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2); transition: box-shadow 0.3s ease;">
                <h2 style="font-size: 24px; font-weight: bold; color: #FF4500; margin-bottom: 10px;">Menú del Día</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #666; margin-bottom: 20px;">Descubre nuestro delicioso menú del día, preparado con los ingredientes más frescos y de la mejor calidad.</p>
                <a href="#" style="color: #FF4500; text-decoration: none; transition: color 0.3s ease;">Ver Menú</a>
            </div>

            <div class="card" style="background-color: #FFF8DC; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2); transition: box-shadow 0.3s ease;">
                <h2 style="font-size: 24px; font-weight: bold; color: #FF4500; margin-bottom: 10px;">Reservaciones</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #666; margin-bottom: 20px;">Reserva una mesa en nuestro acogedor restaurante y disfruta de una experiencia gastronómica inolvidable.</p>
                <a href="#" style="color: #FF4500; text-decoration: none; transition: color 0.3s ease;">Hacer Reserva</a>
            </div>

            <div class="card" style="background-color: #FFF8DC; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2); transition: box-shadow 0.3s ease;">
                <h2 style="font-size: 24px; font-weight: bold; color: #FF4500; margin-bottom: 10px;">Eventos Especiales</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #666; margin-bottom: 20px;">Celebra tus momentos especiales con nosotros. Ofrecemos servicios de catering y organización de eventos a medida.</p>
                <a href="#" style="color: #FF4500; text-decoration: none; transition: color 0.3s ease;">Más Información</a>
            </div>
        </main>

        <footer style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #CCC; font-size: 14px; color: #999; text-align: center;">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
@endsection
