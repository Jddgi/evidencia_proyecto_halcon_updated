#Evidence 2
Description
REST API developed in Laravel for user and order management.

The backend includes:

Users CRUD
Orders CRUD
User status management
Soft Delete for orders
Search orders by invoice
Archived orders endpoint
Available Endpoints
USERS
GET /api/users
Retrieve all users including active and inactive users.

GET /api/users/{id}
Retrieve a specific user.

POST /api/users
Create a new user.

PUT /api/users/{id}
Update a user's information.

DELETE /api/users/{id}
Change user status to inactive.

ORDERS
GET /api/orders
Retrieve all orders ordered from newest to oldest.

GET /api/orders/{id}
Retrieve a specific order.

GET /api/orders/invoice/{invoice}
Search an order by invoice number.

POST /api/orders
Create a new order.

PUT /api/orders/{id}
Update an existing order or change its status.

DELETE /api/orders/{id}
Archive an order using logical deletion.

GET /api/orders/archived
Retrieve archived orders.

Technologies Used
Laravel 11
PHP
MySQL
Postman
Git
GitHub

Author
Juan de Dios Guzmán Isaías