# Golden Soft API

Welcome to the Golden Soft API! This API provides endpoints for managing technicians and their services (register,login,logout)".

## Getting Started

To set up and test the API, follow these steps:

1. Run the migrations and seed the database:
   ```bash
   php artisan migrate
   php artisan db:seed

2. Start the Laravel development server:
   ```bash
   php artisan serve

  
3. Compile your assets:
   ```bash
   npm run dev


## you can open :
     ```bash
     http://127.0.0.1:8000/

and set the registered technician as 'approved'.


you can use (apiRequests.http) in main directory to make api calls:
  ```bash
  Technician response example : 
    {
      "user": {
        "f_name": "محمد",
        "l_name": "أحمد",
        "email": "abcdefg@gmail.com",
        "mobile": "+963 999 112233",
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


