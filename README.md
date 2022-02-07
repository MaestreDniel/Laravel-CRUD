## Práctica CRUD en Laravel

Es una pequeña aplicación que permite insertar músicos, consultarlos, actualizarlos y eliminarlos.

- [Despliegue en servidor remoto](http://dmaestre.ifc33b.cifpfbmoll.eu/Laravel-CRUD/public).

### Login/Registro

Debes crear tu usuario y loguearte para poder interactuar con el CRUD. Una vez hecho, el dashboard te dará la bienvenida. Fíjate arriba en el menú de navegación: hay una pestaña que dice <b>Formulario CRUD</b>, allí puedes entrar al crud. Sigue las instrucciones y accederás a la tabla de músicos.

### .env (Nos lo piden)

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:xFODOEai6GtbOhadA8F8+00RSSPiVjoAfDPDZrveRcQ=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=51.178.152.213
DB_PORT=5432
DB_DATABASE=maestre-musicos-practica-crud
DB_USERNAME=dmaestre_usr
DB_PASSWORD=abc123.

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=public
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=sendgrid 

#MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=dmaestre@cifpfbmoll.eu
MAIL_FROM_NAME="Daniel Maestre"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```