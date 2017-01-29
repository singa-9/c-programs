/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package swap_two_numbers;

/**
 *
 * @author kmalviya
 */
public class Swap_two_numbers {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int a = 5;
        int b = 6;
        System.out.println("Before swapping numbers ");
        System.out.println( "a = " + a + " b = "+ b);
        int temp;
        temp = a;
        a=b;
        b= temp;
       System.out.println("After swapping numbers ");
        System.out.println( "a = " + a + " b = "+ b);
        
    }
    
}
