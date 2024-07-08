# Model Controller

Chiamare il database fornito, utilizzando l’ORM di Laravel.

## Descrizione

-   Creare un nuovo progetto Laravel

-   Tramite phpMyAdmin creare un nuovo database laravel_model_controller

-   Importare nel database la tabella movies in allegato

-   Inserire le credenziali per il database nel file .env

-   Creare un model Movie

```bash
  php artisan make:model Movie
```

-   Creare un controller che gestirà la rotta '/'

```bash
  php artisan make:controller Guest/PageController
```

-   All’interno della funzione index() del controller, recuperare tutti i film dal database e passarli alla view, che quindi li visualizzerà a schermo, tramite delle card.

## Bonus:

Stilare il layout nei dettagli con Sass
