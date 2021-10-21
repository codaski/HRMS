# HRMS - Laravel Jetstream Livewire.

Use the following code to clone the project into your local server:

<code>git clone git@github.com:codaski/HRMS.git hrms</code>

<code>cd hrms</code> go to the project folder after finishing the clone.

You may change <code>hrms</code> with your project folder name.
Edit your .env file with your database information such as database name/user/password

<code>npm install && npm run dev</code> install packages and compile resources into public folder

Then

<code>composer update -w</code> This will update your Project with latest packages updates

#Running the database migration.
to install the database tables into your database run with <code>php artisan migrate</code>

in case of running an existing database run the following command <code>php artisan migrate:fresh</code>

#Running the database migration with seeding a test content.
to install the database tables into your database run with <code>php artisan migrate --seed</code>

in case of running an existing database run the following command <code>php artisan migrate:fresh --seed</code>
