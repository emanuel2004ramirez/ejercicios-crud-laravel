# Sistema de tareas con Laravel

Aplicación web para administrar tareas mediante un CRUD protegido con autenticación.

## Funcionalidades

- Inicio y cierre de sesión.
- Rutas protegidas con el middleware `auth`.
- Listado de tareas.
- Creación, edición y eliminación de tareas.
- Validación de formularios.
- Mensajes de confirmación después de cada operación.

## Tecnologías

- PHP 8.2
- Laravel 12
- MySQL
- Blade

## Instalación

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Configura la conexión a MySQL en `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tareas_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Ejecuta las migraciones y crea el usuario de prueba:

```bash
php artisan migrate
php artisan db:seed --class=UsuarioDemo
```

Inicia el servidor:

```bash
php artisan serve
```

## Usuario de prueba

- Usuario: `admin`
- Contraseña: `12345678`

## Rutas principales

| Método | Ruta | Descripción |
|---|---|---|
| GET | `/login` | Formulario de inicio de sesión |
| POST | `/login` | Autenticar usuario |
| GET | `/tarea` | Listar tareas |
| GET | `/tarea/create` | Formulario para crear una tarea |
| POST | `/tarea` | Guardar una tarea |
| GET | `/tarea/{id}/edit` | Formulario para editar una tarea |
| PUT | `/tarea/{tarea}` | Actualizar una tarea |
| DELETE | `/tarea/{tarea}` | Eliminar una tarea |
| POST | `/logout` | Cerrar sesión |

## Campos de una tarea

- Título
- Descripción
- Responsable
- Estado: pendiente, en progreso o completada
- Fecha límite
