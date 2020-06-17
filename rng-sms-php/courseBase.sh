apt install apache2 -y
sudo apt-get install php -y
sudo apt-get install php-curl -y

service apache2 start
cd /var/www/html
rm index.html