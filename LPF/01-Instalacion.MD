# LARAVEL


## Instalar laravel
```bash
    composer create-project --prefer-dist laravel/laravel raiz "10.*"
```

### configurar '.env'
```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crud00
    DB_USERNAME=dev
    DB_PASSWORD=159357QWERTY
```

## Migraciones laravel
```bash
    php artisan serve
```


Parece que has subido un archivo relacionado con tu proyecto de Laravel. Si deseas implementar autenticación de usuarios en tu aplicación, puedo guiarte en cómo hacerlo utilizando Laravel Breeze o Laravel Jetstream, que son dos formas comunes para manejar la autenticación de manera rápida.

Por ejemplo, si deseas utilizar Laravel Breeze, aquí están los pasos básicos:

1. **Instala Laravel Breeze**:
   Desde la terminal en el directorio raíz de tu proyecto, ejecuta:
   ```bash
   composer require laravel/breeze --dev
   ```

2. **Genera la autenticación básica**:
   Luego, para instalar las vistas de autenticación básicas, ejecuta:
   ```bash
   php artisan breeze:install
   ```

3. **Instala las dependencias de npm**:
   ```bash
   npm install && npm run dev
   ```

4. **Migra la base de datos**:
   Asegúrate de que tu archivo `.env` esté configurado correctamente para la base de datos, y luego migra las tablas necesarias:
```bash
    php artisan migrate
```

Esto te generará rutas y vistas para el registro, inicio de sesión y recuperación de contraseñas.

Si prefieres usar Jetstream o necesitas ayuda con la estructura actual de tu proyecto, solo avísame y lo configuramos.

# Tailwind


## Instalar tailwind
```bash
    npm install -D tailwindcss postcss autoprefixer flowbite
    npx tailwindcss init -p
```

## configurar


### raiz/tailwind.config.js
```js
    /** @type {import('tailwindcss').Config} */
    export default {
        content: [
            './resources/views/**/*.blade.php',
            './resources/js/**/*.vue',
            './node_modules/flowbite/**/*.js', // Agrega esta línea
        ],
        theme: {
            extend: {},
        },
        plugins: [
            require('flowbite/plugin') // Agrega esta línea
        ],
    }
```

### raiz/resources/css/app.css
```css
    @tailwind base;
    @tailwind components;
    @tailwind utilities;
```

### raiz/resources/js/app.js
```js
    import './bootstrap';
    // resources/js/app.js
    import 'flowbite';
```

## Copilacion
copilar con laravel vite

```bash
    npm install
    npm run dev
```
