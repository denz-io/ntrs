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

Download or run "git clone https://github.com/denzdacs/pos-ems.git" in terminal.
Please refer to Laravel documentation if this is your first time to use Laravel.

For SMS messeging to work you need to add your Nexmo credentials in the .env file.

Once your local environemnt is setup properly got to project directory and the following:

-php artisan key:generate 
-php artisan migrate 
-php artisan server

## Collaborators

- Demate, Kent
- Floro, Kristine Joy
- Aljo, Jessa
- Nillos, Noelyn
- Badon, Robert Roy
- Apolan, Marlou

## Powered By Laravel

https://laravel.com/

