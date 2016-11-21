# Didbot
Self hosted didbot application.

## Quick Start Instructions
Clone the application to your machine and open a terminal in the project root.
- `git clone https://github.com/didbot/didbot.git`
- `cd didbot`

Configure your .env file with a random APP_KEY and your DB credentials.
- `cp .env.example .env`

Install the application dependencies.
- `php composer install`
- `php artisan migrate --seed`
- `php artisan passport:install`

Start the built in php web server.
- `php -S localhost:8000 -t public/`

Open http://localhost:8000/login in your browser and sign in with the credentials created during the artisan migrate --seed command.
- `E-Mail Address: email@example.com`
- `Password: 123`

Navigate to http://localhost:8000/tokens, click on create a new token, and copy it to the DIDBOT_API_TOKEN key in your .env file.
- `DIDBOT_API_TOKEN=[YOUR-API-TOKEN]`

