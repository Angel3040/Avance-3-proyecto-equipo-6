<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo en Chiapas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Descubre Chiapas</h1>
            <nav>
                <ul>
                    <li><a href="#destinos">Destinos</a></li>
                    <li><a href="#actividades">Actividades</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="destinos" class="section">
        <div class="container">
            <h2>Destinos Populares en Chiapas</h2>
            <p>Chiapas es un estado lleno de maravillas naturales e históricas, perfecto para los amantes de la naturaleza y la cultura.</p>
            <div class="destinos-list">
                <article>
                    <h3>Cañón del Sumidero</h3>
                    <p>Uno de los lugares más emblemáticos de Chiapas, el Cañón del Sumidero ofrece imponentes vistas de acantilados y una rica biodiversidad.</p>
                </article>
                <article>
                    <h3>San Cristóbal de las Casas</h3>
                    <p>Esta ciudad colonial es famosa por su arquitectura, mercados artesanales, y vibrante vida cultural.</p>
                </article>
                <article>
                    <h3>Palenque</h3>
                    <p>Una de las zonas arqueológicas más importantes del mundo maya, con impresionantes pirámides y templos rodeados por la selva.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="actividades" class="section">
        <div class="container">
            <h2>Actividades en Chiapas</h2>
            <p>Chiapas es ideal para actividades al aire libre y experiencias culturales. Aquí tienes algunas opciones para disfrutar al máximo tu visita.</p>
            <ul>
                <li>Navegar por el Río Grijalva en el Cañón del Sumidero</li>
                <li>Visitar las cascadas de Agua Azul</li>
                <li>Explorar los mercados de artesanías en San Cristóbal</li>
                <li>Recorrer las ruinas de Palenque</li>
            </ul>
        </div>
    </section>

    <section id="contacto" class="section">
        <div class="container">
            <h2>Contáctanos</h2>
            <p>¿Tienes alguna pregunta sobre tu viaje a Chiapas? ¡Estamos aquí para ayudarte!</p>
            <form action="#" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Turismo Chiapas. Todos los derechos reservados.</p>