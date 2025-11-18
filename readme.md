# Start all services in background
docker-compose up -d

# View all containers
docker-compose ps

# Stop services
docker-compose down

# Restart services
docker-compose restart

# Access the Laravel app container
docker-compose exec app bash

# Rebuild and start (if you changed Dockerfile)
docker-compose up -d --build