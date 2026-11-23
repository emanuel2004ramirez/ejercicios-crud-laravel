# Registro de estudiantes

Aplicacion sencilla para iniciar sesion y administrar estudiantes con Laravel y MySQL.

## Instalacion

Se necesita PHP 8.2, Composer, Node.js y MySQL.

```bash
composer install
npm install
copy .env.example .env
php artisan key:generate
```

## Base de datos MySQL

Crear una base de datos llamada `estudiantes_laravel`. Despues configurar esto en `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=estudiantes_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Si MySQL tiene otra contrasena se debe colocar en `DB_PASSWORD`.

## Migraciones y seeding

```bash
php artisan migrate
php artisan db:seed
```

Para borrar las tablas y cargar todo otra vez:

```bash
php artisan migrate:fresh --seed
```

El seeder crea el usuario administrador y diez estudiantes de prueba.

## Ejecutar

En una terminal:

```bash
php artisan serve
```

En otra terminal:

```bash
npm run dev
```

Abrir `http://127.0.0.1:8000`.

## Credenciales

- Usuario: `admin`
- Contrasena: `12345678`
