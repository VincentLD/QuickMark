
## Comment lancer l'appli:
1) Installer toutes les dépendances de Laravel: `$ composer install`
2) Créer un fichier ~/.env ainsi qu'un fichier /database/database.sqlite
3) Générer une clé d'application: `$ php artisan key:generate`
4) Dans le fichier .env, renseigner cette ligne: `DB_CONNECTION=sqlite`
5) Peupler la base de données: `$ php artisan migrate:fresh --seed` 

## Identifiants
###### ADMIN
login: `v@v.v`<br />
password: `v`

###### GUEST
login: `g@g.c` <br />
password: `g`


![screenshot](https://github.com/VincentLD/QuickMark/blob/master/public/images/Capture%20d%E2%80%99%C3%A9cran%202022-01-22%20%C3%A0%2016.15.34.png)

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
