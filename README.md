
***********
**Instruksi**
***********

- Buat database baru
- Konfigurasi file .env, sesuaikan DB_DATABASE, DB_USERNAME, dan DB_PASSWORD.
- Buka Terminal ketikan php artisan migrate
- Jalankan server dengan mengetik perintah  php -S localhost:8000 -t public

- Buka Postman dan jalankan perintah-perintah berikut :


**Methods**
***********************


GET : [http://localhost:8000/tugas](http://localhost:8000/tugas)

POST : [http://localhost:8000/tugas](http://localhost:8000/tugas)
|Body     |
|---------|
|judul    |
|deskripsi|
|selesai  |

GET : [http://localhost:8000/tasks/1](http://localhost:8000/tasks/1)

PATCH : [http://localhost:8000/tasks/1](http://localhost:8000/tasks/1)
|Body     |
|---------|
|judul    |
|deskripsi|
|selesai  |

DELETE : [http://localhost:8000/tasks/1](http://localhost:8000/tasks/1)


