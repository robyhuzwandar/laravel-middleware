# PMB dan PSB Pompes Al-Aziziyah Kapek

# Important
    if you are going "composer install" that will be change redirect login. so, 
    you must change redirect manualy in "AuthenticatesUsers"

# Install
    - composer install
    - change .env-example to .env and set database user then password
    - php artisan migrate
    - php artisan db:seed >> the default seeder can look at database/seeds/UserSeeder.php
    - php artisan key:generate

# Admin LTE Template 2.3.4
    download and copy :
        - bower_components
        - dist
        - plugins
    
       to public/asset/ >> if asset doesn't exist creat it.
