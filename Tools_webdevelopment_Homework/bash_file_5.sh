chmod 777 "bash_file_5.sh"

# clone repositories
url_array=(https://github.com/kojiyuu-123/bash_file.git https://github.com/kojiyuu-123/bash_file_2.git https://github.com/kojiyuu-123/bash_file_3.git https://github.com/kojiyuu-123/bash_file_4.git)

for i in ${url_array[@]};
do
	git clone ${i}
done

# fetch all repositories
array=(bash_file bash_file_2 bash_file_3 bash_file_4)
for j in ${array[@]};
do
	cd ${j}
	git checkout master
	git pull origin master
	cd ../
	./${j}/bash_file*.sh
	echo -e ""
done

