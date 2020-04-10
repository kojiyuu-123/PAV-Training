chmod 775 "bash_file_5.sh"

# clone repositories
repos_str="https://github.com/kojiyuu-123"
url_array=(${repos_str}/bash_file.git ${repos_str}/bash_file_2.git ${repos_str}/bash_file_3.git ${repos_str}/bash_file_4.git)

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
	./${j}/*.sh
	echo -e ""
done

