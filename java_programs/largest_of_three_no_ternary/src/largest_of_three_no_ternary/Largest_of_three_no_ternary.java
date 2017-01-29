/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package largest_of_three_no_ternary;

/**
 *
 * @author kmalviya
 */
public class Largest_of_three_no_ternary {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int a=5,b=6,c=7;
     int big  = a>=b ? (a>=c?a:c) : (b>=c?b:c) ; 
     System.out.println("Biggest number is = " + big);
             
 }
    
}
