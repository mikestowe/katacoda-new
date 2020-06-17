apt install apache2 -y

sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt install php7.3 php7.3-common php7.3-opcache php7.3-cli php7.3-gd php7.3-curl php7.3-mysql

service apache2 start
cd /var/www/html
rm index.html