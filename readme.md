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

Then login with:
  - Email: admin@thorntonlodge.com
  - Password: admin123 - but on test site passord is 'password'

  INSERT INTO `users` (`name`, `email`, `password`, `created_at`, `updated_at`)
  VALUES (
      'Admin',
      'admin@thorntonlodge.com',
      '$2y$10$e0MYzXyjpJS7Pd0RVvHwHezZP/qK3G0V/ZsLnNseFnBnMUJPFSFLu',
      NOW(),
      NOW()
  );