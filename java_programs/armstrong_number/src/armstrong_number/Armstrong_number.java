/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package armstrong_number;

/**
 *
 * @author kmalviya
 */
public class Armstrong_number {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       int n = 1634;
       int c = 0, temp ,a;
       temp = n;
       while(n>0){
       a = n%10;
       n = n/10;
       c=c+(a*a*a*a);
       }
       if(temp == c){
       System.out.println("Number is Armstrong!");
       }
       else{
       System.out.println("Number is not Armstrong!");
       }
    }
    
}
