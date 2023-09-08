
# Nome do serviço que você deseja executar o comando
SERVICE_NAME = my-service

# Comando que você deseja executar no serviço
COMMAND = npm test

# Iniciar o ambiente com Docker Compose
start:
	docker-compose up -d
	composer install
	cp .env.example .env

# Executar o comando no serviço especificado
exec:
	docker-compose exec $(SERVICE_NAME) $(COMMAND)

# Parar o ambiente com Docker Compose
stop:
	docker-compose down
