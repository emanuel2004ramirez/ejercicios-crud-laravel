# Inventario

Aplicacion sencilla de inventario hecha con Laravel y MySQL.

## Instalacion

Se necesita PHP 8.2, Composer, Node.js y MySQL.

```bash
composer install
npm install
copy .env.example .env
php artisan key:generate
```

## Configurar MySQL

Primero crear una base de datos llamada `inventario`. Luego poner estos datos en el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventario
DB_USERNAME=root
DB_PASSWORD=
```

Cambiar el usuario y contrasena si su MySQL tiene otros datos.

## Migraciones y datos

```bash
php artisan migrate
php artisan db:seed
```

Tambien se puede hacer todo de nuevo con:

```bash
php artisan migrate:fresh --seed
```

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
