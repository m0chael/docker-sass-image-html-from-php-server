FROM php:7.4-cli

COPY . /app

WORKDIR /app

CMD ["php", "run.php"] 