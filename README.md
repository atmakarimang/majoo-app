# Majoo App

![Majoo Indonesia](https://user-images.githubusercontent.com/91459125/142714473-e2370762-eba2-4faa-bed0-f99970e7d7a9.png)

## Entity Relationship Diagram (ERD)

![ERD](https://user-images.githubusercontent.com/91459125/142714174-418830ba-37a7-42c4-bc07-90564c487132.jpg)

## Data Manipulation Language


## Activity Diagrams

1. Login

![Activity Diagram Login](https://user-images.githubusercontent.com/91459125/142714197-46af5e84-5fee-4bd3-b416-5fe14ab31a70.jpg)

2. Add Product

![Activity Diagram Add Product](https://user-images.githubusercontent.com/91459125/142714304-33bdf9a4-10ef-41f6-91be-11d90b187ce2.jpg)

3. Add Product Category

![Activity Diagram Add Product Category](https://user-images.githubusercontent.com/91459125/142714313-1f23bf13-1935-490a-a990-8dc1cfd82256.jpg)

4. Update Product Category

![Activity Diagram Update Product Category](https://user-images.githubusercontent.com/91459125/142714319-e1d21710-f44f-4afe-92d4-4e32137c9674.jpg)

5. Delete Product Category

![Activity Diagram Delete Product Category](https://user-images.githubusercontent.com/91459125/142714322-2fac6fb3-f045-4ea3-b04a-a8cebc053128.jpg)

## Use Case Diagrams

![Use Case](https://user-images.githubusercontent.com/91459125/142714373-903eea81-8f9d-4c6d-9098-9a4a64c25a68.jpg)

### Cara Instalasi

1. Clone Project
2. Masuk Folder hasil Clone tadi dan Rename .env.example menjadi .env
3. Edit file .env mulai dari DB_CONNECTION sampai DB_PASSWORD sesuai dengan database yg digunakan, tambahkan FILESYSTEM_DRIVER=public ke baris paling bawah file .env
4. Buka terminal dan pastikan sudah mengarah ke folder majoo-app, ketik php artisan migrate:fresh --seed, jika prosesnya sudah selesai, ketik php artisan storage:link
5. Jika step 4 sudah selesai, jalankan program dengan perintah php artisan serve

*berikut untuk file .sql nya jika diperlukan : [db-majoo.zip](https://github.com/atmakarimang/majoo-app/files/7573977/db-majoo.zip)

