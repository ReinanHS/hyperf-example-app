init:
	echo "Start"
up:
	docker compose up
down:
	docker compose down -v
php:
	docker exec -it hyperf-example-app bash
