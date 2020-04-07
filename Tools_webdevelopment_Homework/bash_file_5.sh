chmod 777 "bash_file_5.sh"

array=(bash_file/bash_file.sh bash_file_2/bash_file_2.sh bash_file_3/bash_file_3.sh bash_file_4/bash_file_4.sh)

for i in ${array[@]}
do
	./$i
	echo -e ""
done

git fetch origin
