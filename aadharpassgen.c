#include<stdio.h>
#include<stdlib.h>
int main(){
char s[26]={'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'};
int syear,eyear;
FILE *file;
file=fopen("aadharpassword.txt","w");
printf("Enter The Starting Year for password combination: ");
scanf("%d",&syear);
printf("Enter the Ending year: ");
scanf("%d",&eyear);
/*I'm not an effecient programmer! XD*/
for(int i=0;i<26;i++){
for(int j=0;j<26;j++){
for(int k=0;k<26;k++){
for(int l=0;l<26;l++){
for(int x=syear;x<=eyear;x++){
if(i==j && i==k){
continue;
}else if(i==j && k==l){
continue;
}
fprintf(file,"%c%c%c%c%d\n",s[i],s[j],s[k],s[l],x);
}}}}}
printf("Writed password in file 'aadharpassword.txt' successfully!\n");
fclose(file);
}
