chmod 755 "bash_file_4/bash_file_4.sh"

#count the word,"character" in this text.
echo -n "The number of the word \"character\" = "
grep -o character tmp/test.txt|wc -l

