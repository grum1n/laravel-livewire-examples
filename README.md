
#   branch: test2-dependent-dropdown-product

    php artisan livewire:layout

    php artisan make:model Category -m

    php artisan make:model Subcategory -m

    php artisan make:model Product -m

    php artisan migrate

    php artisan make:livewire CategorySubcategory

    php artisan make:seeder CategorySeeder
    	
    php artisan make:seeder SubcategorySeeder

    php artisan db:seed --class=CategorySeeder

    php artisan db:seed --class=SubcategorySeeder

#   Install

    composer require livewire/livewire

#   Livewire examples

#   https://livewire.laravel.com/