 #include<stdio.h>
    int main(){
                  int x, y, z ,k;
                  printf(" Enter three Integer numbers for x, y, z ,k : ");
                  scanf("%d %d %d %d", &x, &y, &z ,&k);
                  if((x < y)&&(x < z)&&(x<k))
                  { 
                  printf("\n x is smallest : %d",x);
                  }
                  else if((y<z)&&(y<k))
                 {
                 printf("\n y is smallest : %d",y);
                 }
                 else if (z<k)
                 {
                 printf("\n z is smallest : %d",z);
                 }
                 else
{
printf("\n k is smallest : %d",k);
}
    return(0);
    }
