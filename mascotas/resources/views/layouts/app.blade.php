<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de mascotas</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            color: #173b3f;
            background: #eaf7f3;
        }
        .pagina-login {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            background:
                radial-gradient(circle at 15% 20%, #c9eee3 0 90px, transparent 91px),
                radial-gradient(circle at 85% 80%, #d6e9ff 0 120px, transparent 121px),
                #eaf7f3;
        }
        .login-card {
            width: min(100%, 410px);
            padding: 38px;
            border: 1px solid #c8e0da;
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 20px 50px rgba(23, 59, 63, .13);
        }
        .marca {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
        }
        .huella {
            display: grid;
            place-items: center;
            width: 48px;
            height: 48px;
            border-radius: 15px;
            color: white;
            background: #2b8a78;
            font-size: 25px;
        }
        .marca strong { display: block; font-size: 18px; }
        .marca span { color: #668387; font-size: 13px; }
        h1 { margin: 0 0 8px; font-size: 30px; }
        .subtitulo { margin: 0 0 26px; color: #668387; line-height: 1.5; }
        label { display: block; margin: 15px 0 7px; font-size: 14px; font-weight: bold; }
        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #bdd4d0;
            border-radius: 11px;
            outline: none;
            font: inherit;
            color: #173b3f;
            background: #fbfefd;
        }
        input:focus { border-color: #2b8a78; box-shadow: 0 0 0 3px #d8f1ea; }
        button {
            width: 100%;
            margin-top: 23px;
            padding: 14px;
            border: 0;
            border-radius: 11px;
            color: white;
            background: #2b8a78;
            font: bold 15px Arial, sans-serif;
            cursor: pointer;
        }
        button:hover { background: #217364; }
        .errores {
            margin: 0 0 18px;
            padding: 12px 14px 12px 32px;
            border-radius: 10px;
            color: #8f2f2f;
            background: #fff0f0;
            font-size: 14px;
        }
        .contenedor { width: min(1100px, calc(100% - 32px)); margin: 42px auto; }
        .barra { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 24px; }
        .barra h1 { margin: 0; }
        .salir { color: #217364; font-weight: bold; text-decoration: none; }
        .acciones-superiores { display: flex; align-items: center; gap: 14px; }
        .boton-enlace { display: inline-block; padding: 11px 16px; border-radius: 10px; color: white; background: #2b8a78; font-weight: bold; text-decoration: none; }
        .boton-enlace:hover { background: #217364; }
        .mensaje { padding: 13px 16px; margin-bottom: 18px; border-radius: 10px; color: #17604f; background: #d9f3eb; }
        .tabla-contenedor { overflow-x: auto; border: 1px solid #c8e0da; border-radius: 16px; background: white; box-shadow: 0 14px 35px rgba(23, 59, 63, .09); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 16px; border-bottom: 1px solid #e1eeeb; text-align: left; white-space: nowrap; }
        th { color: #ffffff; background: #2b8a78; font-size: 14px; }
        tbody tr:last-child td { border-bottom: 0; }
        tbody tr:hover { background: #f3fbf8; }
        .especie { text-transform: capitalize; }
        .formulario-card { width: min(620px, calc(100% - 32px)); margin: 42px auto; padding: 32px; border: 1px solid #c8e0da; border-radius: 20px; background: white; box-shadow: 0 14px 35px rgba(23, 59, 63, .09); }
        .formulario-card h1 { margin-top: 0; }
        .formulario-card select { width: 100%; padding: 13px 14px; border: 1px solid #bdd4d0; border-radius: 11px; outline: none; font: inherit; color: #173b3f; background: #fbfefd; }
        .formulario-card select:focus { border-color: #2b8a78; box-shadow: 0 0 0 3px #d8f1ea; }
        .regresar { display: inline-block; margin-top: 18px; color: #217364; font-weight: bold; text-decoration: none; }
        @media (max-width: 480px) {
            .login-card { padding: 28px 22px; border-radius: 18px; }
            h1 { font-size: 26px; }
        }
    </style>
</head>
<body>
    @yield('contenido')
</body>
</html>
