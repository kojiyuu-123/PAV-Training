#Using commands
chmod 777 "bash_file_2/bash_file_2.sh"

#Open VS Code
#code -n

#check running processes
#ps -e |grep shutter
#kill [Process ID]

#make multi-layer directry
mkdir -p tmp/tmp1/tmp2/tmp3/tmp4/tmp5

#rename tmp3 to tmp3-sub
mv tmp/tmp1/tmp2/tmp3 tmp/tmp1/tmp2/tmp3-sub

#shutdown and restart
#shutdown -r

#after changed the directry to archive file, changed to zip file.
tar -cf tmp/tmp1/tmp2.tar tmp/tmp1/tmp2; gzip tmp/tmp1/tmp2.tar
#tar -czvf tmp2.tgz tmp2
 
#make tar file
tar -cvf tmp/tmp1/tmp2/tmp3.tar tmp/tmp1/tmp2/tmp3-sub

#resister linux command（ll）
alias ll='ls -la'

#make text file named test.txt
echo "If the first character is a - the item is a file, if it is a d the item is a directory. The rest of the string is three sets of three characters. From the left, the first three represent the file permissions of the owner, the middle three represent the file permissions of the group and the rightmost three characters represent the permissions for others. In each set, an r stands for read, a w stands for write, and an x stands for execute.">tmp/test.txt

