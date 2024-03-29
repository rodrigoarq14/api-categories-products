# RESTful API - CRUD Categories and Products

By 👨‍💻 [rodrigoarq14](https://github.com/rodrigoarq14)

## Project Status

In development. 🚀

## Technologies Used 📋

* `Programming Language`
    * `PHP`: 8.2.17
* `Framework`
    * `Laravel`: 11
* `Database`
    * `MySQL || MariaDB`

## Steps to Start the Project 🚶


### 1. Clone the GitHub repository of the project

```bash
git clone https://github.com/rodrigoarq14/api-categories-products.git
```

### 2.- Install project dependencies

``` bash
composer install
```

### 3.- Configure the .env file according to your preference.

### 4.- Run Migrations.

``` bash
php artisan migrate
```

### 5.- Run Seeders (Optional).

``` bash
php artisan db:seed
```

### 6.- Start the Laravel local server to test the application

``` bash
php artisan serve
```

## Additional Information

### Frontend Project in React

In addition to the RESTful API, there is a frontend project developed in React that serves as a user interface to consume this API. You can find the repository of the project at the following link:

[Project Repository](https://github.com/rodrigoarq14/categories-products-react)

### Postman Requests Collection

En la raíz de este proyecto, encontrarás un archivo JSON que contiene una colección de solicitudes de Postman. Esta colección proporciona una serie de solicitudes predefinidas que puedes importar en la herramienta Postman para probar fácilmente la API RESTful de Categorías y Productos. La colección incluye solicitudes para operaciones CRUD (Crear, Leer, Actualizar, Eliminar) tanto para categorías como para productos.

If you want to test the API requests using Postman, you can import this JSON file into your Postman instance and start making requests to the API immediately.