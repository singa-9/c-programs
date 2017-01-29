/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package swap_two_numbers_using_two_variables;

/**
 *
 * @author kmalviya
 */
public class Swap_two_numbers_using_two_variables {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int a = 42, b=33;
        System.out.println("Before swapping numbers ");
        System.out.println( "a = " + a + " b = "+ b);
        a=a+b;
        b=a-b;
        a=a-b;
        System.out.println("After swapping numbers ");
        System.out.println( "a = " + a + " b = "+ b);
        
    }
    
}
