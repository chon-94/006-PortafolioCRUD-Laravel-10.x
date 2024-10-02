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

# Breeze

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

### CRUD

php artisan make:model Card -mcr
