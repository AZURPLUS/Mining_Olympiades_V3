.PHONY: up down restart install code_check

# Démarrer les services
up:
	docker compose up

build:
	docker compose up --build

stop:
	docker compose stop

# Arrêter les services
down:
	docker compose down

# Redémarrer les services
restart: down up

# Installer Symfony et ses dépendances
install:
	docker compose exec app composer install

update:
	docker compose exec app composer update

# === PROD ===

prod-build:
	docker compose -f compose.prod.yml build

prod-up:
	docker compose -f compose.prod.yml up -d

prod-deploy: prod-build prod-up

prod-down:
	docker compose -f compose.prod.yml down

APP_CONTAINER = kani_app

# Commande pour exécuter une migration
migration:
	@docker exec -it $(APP_CONTAINER) bash -c "php bin/console make:migration"

# Commande pour exécuter les migrations
migrate:
	@docker exec -it $(APP_CONTAINER) bash -c "php bin/console doctrine:migrations:migrate --no-interaction"
	
mm: migration migrate

cc:
	@docker exec -it $(APP_CONTAINER) bash -c "php bin/console cache:clear"

# Vérifier la qualité du code
code_check:
	docker compose exec -T app vendor/bin/phpcs --standard=PSR12 src/

# Vérifier et corriger automatiquement le code
code_fix:
	docker compose exec app vendor/bin/phpcbf --standard=PSR12 src/

entity:
	@docker exec -it $(APP_CONTAINER) bash -c "php bin/console make:entity $(word 2, $(MAKECMDGOALS))"

%:
	@:

form:
	@docker exec -it $(APP_CONTAINER) bash -c "php bin/console make:form $(word 2, $(MAKECMDGOALS))"

%:
	@:

controller:
	@docker exec -it $(APP_CONTAINER) bash -c "php bin/console make:controller $(word 2, $(MAKECMDGOALS))"

%:
	@:

questions-seed : 
	@docker exec -it $(APP_CONTAINER) bash -c "php bin/console app:evaluation:seed"
%:
	@:
