#!/usr/bin/env bash

apt-get install -y python-software-properties
add-apt-repository -y ppa:ondrej/php
apt-get update -y

apt-get install curl
debconf-set-selections <<< 'mysql-server-5.7 mysql-server/root_password password my-vagrant-password'
debconf-set-selections <<< 'mysql-server-5.7 mysql-server/root_password_again password my-vagrant-password'
echo "Installing mysql-server 5.7 with my-vagrant-password as root password"
apt-get -y install mysql-server-5.7

# for tests
#mysql -u root -e "create database \`vagrant-laskukierros_test\`;" -pmy-vagrant-password

#cd ~
#wget http://selenium-release.storage.googleapis.com/3.7/selenium-server-standalone-3.7.1.jar -O selenium-server-standalone.jar
#java -jar selenium-server-standalone.jar >/dev/null 2&>1

#sudo apt-get -y install chromium-browser
#CHROME_DRIVER_VERSION=`curl -sS chromedriver.storage.googleapis.com/LATEST_RELEASE`
# tests end


apt-get install -y apache2

a2enmod ssl
a2enmod rewrite

apt-get install -y php7.1 libapache2-mod-php7.1 php7.1-cli php7.1-common php7.1-mbstring php7.1-gd php7.1-intl php7.1-xml php7.1-mysql php7.1-mcrypt php7.1-zip php7.1-curl

#copy apache2 sites files
cp /vagrant/.vagrant/apache2/sites-available/* /etc/apache2/sites-available
a2ensite hello-world
a2dissite 000-default
service apache2 restart

# install nodejs
#curl -sL https://deb.nodesource.com/setup_9.x | sudo -E bash -
#apt-get install -y nodejs

# initialize laskukierros
#cp /vagrant/.vagrant/parameters.yml /vagrant/app/config
#cd /vagrant/
#php composer.phar install
#php bin/console doctrine:database:create
#php bin/console doctrine:schema:update --force

# these are not working on Windows 10 with the NFS
# npm install -g webpack
# npm install
# npm run release
#printf "\n\nIf you are using Windows 10 and NFS, remember to execute 'npm install -g webpack', 'npm install' and 'npm run release' to prepare the JS files\n\n"







