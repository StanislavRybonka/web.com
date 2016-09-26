var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.production = true;
elixir(function(mix) {

    /*gulp --production - мінімізує файли на сервері, врахувати,
     що при мінізації не додається розширення min до файлу.
    * */
    mix.styles([
        '/css/main.css'
    ], 'public/styles/base_styles.css', 'public');


    /* Функція забезпечує версіонування, після внесення змін автоматично буде змінюватись
    * хеш в файлі, який ми підключаємо в мастер шаблоні, після змін запустити команду gulp, в терміналі.
    * Папка build,створюється автоматично, після додавання функції.*/
    mix.version('public/styles/base_styles.css');
});
