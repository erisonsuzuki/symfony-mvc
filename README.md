## Commands

#### Build
npm run build

#### Start server
php -S 0.0.0.0:8123 -t public

#### All availables commands
php bin/console

#### Create controller
php bin/console make:controller {{name}}

#### Create entity
php bin/console make:entity {{name}}

### Database

#### Create migration
php bin/console make:migration

#### Run migration
php bin/console doctrine:migrations:migrate

#### Run SQL

php bin/console doctrine:query:sql {{query}}