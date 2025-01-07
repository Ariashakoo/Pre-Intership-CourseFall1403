
برای آپدیت سیستم کامند زیر را وارد میکنیم
sudo apt update

برای آپگرید سیستم :
sudo apt upgrade

برای نصب کرل و گرفتن ورژن کرل :
sudo apt install curl
sudo apt install curl

برای نصب گوگل کروم :
ابتدا با دستور زیر فایل آن را دانلود میکنیم 
curl -O https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb

پس از دانلود با دستور زیر آن را نصب میکنیم :
sudo dpkg -i google-chrome-stable_current_amd64.deb

و برای نمایش نسخه آن :
google-chrome --version