/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package factorial_of_number;

/**
 *
 * @author kmalviya
 */
public class Factorial_of_number {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int n = 7;
        int fact = 1;
        int i = 1;
        while(i <= n){
        fact = fact*i;
        i++;
    
    }
        System.out.println("factorial of number is "+ fact);
    }
    
}
