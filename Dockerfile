# Usar uma imagem base com PHP e Apache
FROM php:8.0-apache

# Instalar dependências necessárias para extensões PHP
RUN apt-get update && \
    apt-get install -y libxml2-dev && \
    docker-php-ext-install xml

# Configurar o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Copiar todos os arquivos do projeto para o diretório de trabalho
COPY . /var/www/html

# Ajustar permissões de arquivos
RUN chown -R www-data:www-data /var/www/html

# Expor a porta 80 para acessar a aplicação
EXPOSE 80

# Reiniciar o Apache para aplicar configurações
CMD ["apache2-foreground"]
