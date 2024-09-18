clear
echo -n "Enter 1st number: "
read f_no
echo -n "Enter 2nd number: "
read s_no

mul=`expr $f_no \* $s_no` 
sum=$((f_no+s_no))
sum1=`expr $f_no + $s_no`

echo "Sum of $f_no and $s_no: "$sum
echo "Sum of $f_no and $s_no: "$sum1
echo "multiplication of $f_no and $s_no: "$mul
