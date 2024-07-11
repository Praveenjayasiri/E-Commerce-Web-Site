# E-Commerce Web App

This is an E-Commerce Web Application built using Laravel. The application allows users to purchase items, add them to their cart, and for admins to manage items and view purchases.

## Current Status

The application is currently under maintenance. New features and improvements are being added regularly.

## Features

### User Features
- **Browse Items**: Users can browse through a wide range of products.
- **Add to Cart**: Users can add items to their cart for later purchase.
- **Purchase Items**: Users can complete their purchases by checking out the items in their cart.

### Admin Features
- **View Purchases**: Admins can view the details of all purchases made by users.
- **Update Items**: Admins can update the details of the items available in the store.
- **Manage Inventory**: Admins can add new items to the store and manage existing inventory.

## Getting Started

To get started with the application, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Praveenjayasiri/E-Commerce-Web-Site.git
   cd E-Commerce-Web-Site
   ```
2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```
3. **Set up the environment variables:**
Copy the .env.example file to .env and configure your database and other settings.
    ```bash
    cp .env.example .env
    ```
4. **Generate application key:**
    ```bash
    php artisan key:generate
    ```
5. **Run migrations:**
    ```bash
    php artisan migrate
    ```
6. Serve the application:
    
    ```bash
    php artisan serve
    ```
    
## Contributing
We welcome contributions to improve the application. If you find a bug or have a feature request, please open an issue or submit a pull request.

## License
This project is open-source and available under the MIT License.

## Contact
For any inquiries or support, please contact the project maintainer at [praveen.p.jayasiri@gmail.com].
