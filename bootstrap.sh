#!/usr/bin/env bash

# update / upgrade
sudo apt-get update
sudo apt-get -y upgrade

sudo add-apt-repository ppa:ondrej/php
sudo apt-get update

# install php 7.1
sudo apt-get install -y php7.1 php7.1-xml php7.1-cli php7.1-pgsql php7.1-curl php7.1-gd php7.1-intl php7.1-zip php7.1-mbstring

# install git
sudo apt-get -y install git

# install Composer
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# alias

echo "
alias ..='cd ../'
alias ...='cd ../../'
alias ....='cd ../../../'
alias .....='cd ../../../../'
" > /home/vagrant/.bash_profile