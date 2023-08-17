# need to be implemented
sy=$1
ey=$2
fname="/home/seeker/projects/eaadhar_password_cracker_web/userfiles/"$3
/home/seeker/projects/eaadhar_password_cracker_web/password_cracker_executables/aadharpassgen $sy $ey
res=$?
if [ $res -eq 57 ]; then
    pdfcrack -q --wordlist=/home/seeker/projects/eaadhar_password_cracker_web/password_cracker_executables/aadharpassword.txt $fname
fi
return 11