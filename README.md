# PHP Front Base

## Resources

- Alpine JS
- Axios
- Laravel Mix

## Install

- Install vendor files (dev)
```
composer update
```

- Install vendor files (production)
```
composer install --no-dev --optimize-autoloader
```

- Install npm files (dev)
```
npm install
```

- Install npm files (production)
```
npm install --production
```

## Commands

- Run PHP server
```
php -S 0.0.0.0:8080 -t public/
```

- Watcher compiler
```
npm run watch
```

- Compile resources for dev
```
npm run dev
```

- Compile resources for production
```
npm run prod
```