# Biblioteca

Proyecto hecho en Laravel para manejar los libros de una biblioteca.

## Instalacion

Se ocupa tener PHP 8.2, Composer, Node.js y MySQL.

```bash
composer install
npm install
copy .env.example .env
php artisan key:generate
```

## Configurar MySQL

Primero crear una base de datos llamada `biblioteca`. Luego en el archivo `.env` poner esto:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=biblioteca
DB_USERNAME=root
DB_PASSWORD=
```

Si su MySQL tiene contraseña, se coloca en `DB_PASSWORD`.

## Migraciones y datos

Para crear las tablas y meter los datos de prueba:

```bash
php artisan migrate --seed
```

Si se quiere borrar y volver hacer toda la base de datos:

```bash
php artisan migrate:fresh --seed
```

## Ejecutar

En una terminal:

```bash
php artisan serve
```

Y en otra terminal:

```bash
npm run dev
```

Abrir `http://127.0.0.1:8000` en el navegador.

## Usuario administrador

- Usuario: `admin`
- Contraseña: `12345678`

