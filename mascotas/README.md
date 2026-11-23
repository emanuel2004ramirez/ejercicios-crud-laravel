# Registro de mascotas

Aplicacion sencilla para iniciar sesion y administrar mascotas de una veterinaria.

## Instalacion

Se necesita PHP 8.2, Composer, Node.js y MySQL.

```bash
composer install
npm install
copy .env.example .env
php artisan key:generate
```

## Configurar MySQL

Crear una base de datos llamada `mascotas_laravel`. Despues configurar el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mascotas_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Si MySQL tiene contrasena se debe escribir en `DB_PASSWORD`.

## Migraciones y seeding

```bash
php artisan migrate
php artisan db:seed
```

Para crear todo otra vez desde cero:

```bash
php artisan migrate:fresh --seed
```

El seeder crea el administrador y diez mascotas de prueba.

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
