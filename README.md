## FizzBuzz example with PSR-4 Composer Autoload 
  
PSR-4 Autoloader implementation based on example from [PHP-FIG](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md/)

##### Folder Structure

    .
    ├── src                  # Source files
    ├── tests                # Automated tests 
    ├── composer.json        # Composer file
    ├── composer.lock        
    ├── index.php            # Index file that we call source files
    ├── phpunit.xml          # Phpunit.xml that we use while running tests 
    ├── .gitignore
    └── README.me
    
#### Installation

`git clone https://github.com/onurkayaio/fizzbuzz.git` <br>
`cd fizzbuzz` <br>
`composer install`

#### Run Tests

call `phpunit` in folder.