#!/bin/bash
echo "Nhap mot so nguyen n:"
read n

for((i=1;i<=n;i++));
do
sudo useradd USER_"$i"
echo "USER_"$i":123456" | sudo chpasswd
done
