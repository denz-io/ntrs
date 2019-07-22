## About NTRS

NTRS is a registtration system for small public vehicles present in the Philippines, such as tricycles and pedicabs. 
</br>
This was engineered with the specifications required by LGU Naval. 

## Features
- Registration of Operator and Drivers.
- Ability to view information collected.
- Listing of Routes and Brgy addresses.
- You can print out all relevant information presented in tables.
- Ability to renew Operator registration.
- SMS capabilities using NEXMO API

## How to Deploy

Please refer to Laravel documentation if this is your first time to use Laravel.
For SMS messeging to work you need to add your Nexmo credentials in the .env file.
Once your local environemnt is setup properly got to project directory and the following:

- composer install *if you are not using docker you need to install composer first on your local environment*
- update set up your mysql credentials in .env *if you are using docker make sure that your db host is the name of your mysql container the defauly name in docker file is ntrs_mysql*
- php artisan key:generate 
- php artisan migrate 
- php artisan server

## Easy deploy with docker.

Download docker and docker-compose. Once you have those installed simply run docker-compose up inside the project 
directroy, follow the how to deploy instructions above and you shouldnt have any dependancy issues.

## Collaborators

- Demate, Kent
- Floro, Kristine Joy
- Aljo, Jessa
- Nillos, Noelyn
- Badon, Robert Roy
- Apolan, Marlou

## Powered By Laravel

https://laravel.com/

