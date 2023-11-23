# Golden Soft API

Welcome to the Golden Soft API! This API provides endpoints for managing technicians and their services (register,login,logout)".

## Getting Started

To set up and test the API, follow these steps:

1. Run the migrations and seed the database:
   ```bash
   php artisan migrate
   php artisan db:seed

Start the Laravel development server:
php artisan serve

Compile your assets:
npm run dev

you can open : http://127.0.0.1:8000/ , and set the registered technician as 'approved'.

you can use (apiRequests.http) in main directory to make api calls:

Register Technician:

POST http://localhost:8000/api/technician/register
Accept: application/json
Content-Type: application/json

{
   "f_name": "محمد",
   "l_name": "صقور",
   "email": "sakkour89@gmail.com",
   "password": "123456",
   "mobile": "+963 988 644406",
   "city": "Tartous",
   "personal_image": "images/techs/u_image_12",
   "bank": "بنك بيمو",
   "iban": "GB29 RBOS 6016 1331 9268 19",
   "location": "سوريا",
   "residency_image": "images/techs/u_image_13",
   "skills": [
       {"service_id": 1 , "service_name": "تركيب مغسلة عادي"},
       {"service_id": 2 , "service_name": "تركيب مغسلة دولاب أو رخام"}
   ]
}

--------------

Login Technician:

POST http://localhost:8000/api/technician/login
Accept: application/json
Content-Type: application/json

{
    "mobile": "+963 988 644406",
    "password": "123456"
}

--------------

Logout Technician:

POST http://localhost:8000/api/technician/logout
Accept: application/json
Authorization: Bearer 2|sHH6UWj0ET7Il6KsKAzqg6dBuqgXkQ71Uh23ZDnBacabbd8e

----------------------------------------------------------------------------
Technician response example : 
{
  "user": {
    "f_name": "محمد",
    "l_name": "صقور",
    "email": "sakkour89@gmail.com",
    "mobile": "+963 988 644406",
    "city": "Tartous",
    "personal_image": "images\/techs\/u_image_12",
    "bank": "بنك بيمو",
    "iban": "GB29 RBOS 6016 1331 9268 19",
    "location": "سوريا",
    "residency_image": "images\/techs\/u_image_13"
  },
  "token": "2|sHH6UWj0ET7Il6KsKAzqg6dBuqgXkQ71Uh23ZDnBacabbd8e",
  "services": [
    {
      "service_id": 1,
      "service_name": "تركيب مغسلة عادي",
      "sub_cat": "المغاسل",
      "main_cat": "السباكة"
    },
    {
      "service_id": 2,
      "service_name": "تركيب مغسلة دولاب أو رخام",
      "sub_cat": "المغاسل",
      "main_cat": "السباكة"
    }
  ]
}


