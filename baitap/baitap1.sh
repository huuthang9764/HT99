#! /bin/bash
echo "nhap 1 so nguyen n:"
if ($n > 0)
then
	read n
	for ((c=1;c<=$n;c++))
		do
		sudo useradd -m -d /home/"USER_"$c -s /bin/bash "USER_"$c
		sudo passwd "USER_"$c <<<"123456"$'\n'"123456"
	done
fi
