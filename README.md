# I don't know, where do you want to go?
Tutorial application for PHP users' group

## Code Progression Outline
- Hello, World
    - String Literal
    - Variable
        - with Concat
        - `{ }` in string
        - `"` vs. `'`
    - Arrays
        - Numeric 0 index
        - Associative (hash table)
        - Direct access
        - foreach loop
    - Acquire name from HTTP
        - URL with `$_GET`
        - `$_POST`
        - `$_REQUEST`
    - Functions
        - `getNameFromUrl()`
    - HTML
        - Simple HTML
        - `<?php`
        - `<?=`
        - `?>`
        - `foreach` in template syntax
        - HTML Form
            - `$_POST` example
            - `$_GET` example
        - Injection examples
            - anchor in anchor
            - PHP `filter_*` functions
            - `htmlspecialchars()`
- PSR-4 and Namespaces
    - Directory to Namespace mapping
    - composer vendor directory
    - Auto loading and `dump-autoload`
    - composer.json
        - `psr-4` key and `src/` directory
        - `require` and `require-dev`
- Separation of Concerns
    - Move HTTP related function to proper namespace/directory
    - Domain vs. protocol
- MySQL Schema
    - phpMyAdmin
    - SQL
- PHP Data Objects (PDO)
    - DSN (Data Source Name)
        - protocol (mysql:)
        - host (host=localhost)
        - database name (dbname=idk)
    - Exceptions
        - try/catch
        - `getMessage()`
        - Security implications
    - `fetchAll` vs. looping with `fetch`
    - `prepare` and `execute`
    - Fetch Types
        - `PDO::FETCH_ASSOC`
        - `PDO::FETCH_OBJ`
        - `PDO::FETCH_CLASS`
    - Params in prepared statements
- Refactor
    - Configuration options
        - Pure PHP file
        - YAML, ini, JSON
        - Library (DotEnv)
        - Security implications
            - Code repository
            - Example file
    - Practical Classes
        - Connection Class
            - `static` factory method (`make()`)
            - Depends on `Config` class instance
            - Add `PDO::ERROR_EXCEPTION`
        - Models
            - Shared base class
            - Connection as a dependency
            - Add `singleton` to `Connection`
- Login
    - PHP Sessions
        - Cookies
        - File storage on server
        - Token
        - `session_*`
        - Session variables
        - Security implications
            - Canary values
            - CSRF
    - Form
        - CSRF
        - `https`/TLS
        - Persisting values
            - Checking with `$_POST`
            - Injection implications
- Routing
    - Require a file based on path returned by a function/method
    - Controllers