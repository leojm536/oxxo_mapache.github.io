<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web con Menú</title>
    <style>
        /* Reset de estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        /* Contenedor principal */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            border-bottom: 2px solid #666;
        }
        
        /* Menú de navegación */
        nav {
            text-align: center;
            margin-bottom: 20px;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        
        nav ul li a {
            color: #333;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        nav ul li a:hover {
            background-color: #666;
            color: #fff;
        }
        
        /* Contenido */
        .content {
            padding: 20px;
        }
        
        /* Pie de página */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Página Web</h1>
    </header>
    
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        
        <div class="content">
            <h2>Bienvenido a Mi Página Web</h2>
            <p>Este es un contenido de ejemplo para mostrar cómo se estructura una página web básica con un menú de navegación.</p>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 Mi Página Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
