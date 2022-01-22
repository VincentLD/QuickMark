
## Commencer lancer l'appli:
1) Installez toutes les dépendances de Laravel: `$ composer install`
2) Créer un fichier ~/.env ainsi qu'un fichier /database/database.sqlite
3) Génerer une clé d'application: `$ php artisan key:generate`
4) Dans le fichier .env, renseignez juste cette ligne `DB_CONNECTION=sqlite`
5) Peuplez la base de données: `$ php artisan migrate:fresh --seed` 

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
