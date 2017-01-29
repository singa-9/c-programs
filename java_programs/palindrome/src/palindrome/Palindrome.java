/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package palindrome;

/**
 *
 * @author kmalviya
 */
public class Palindrome {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int a =626;
        int temp = a;
        int c=0;
        int r = 0;
        while(a>0){
        r= a%10;
        c=c*10+r;
        a=a/10;
        
        }
        if(temp == c){
        System.out.println("Number is a palindrome");
        }
        else{
        System.out.println("Number is not a palindrome");
        }
    }
    
}
