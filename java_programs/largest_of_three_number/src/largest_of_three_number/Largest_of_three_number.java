/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package largest_of_three_number;

/**
 *
 * @author kmalviya
 */
public class Largest_of_three_number {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int a=50, b=6, c=60;
        if(a>=b && a>=c){
        System.out.println("largest is a = "+ a);
        }
        else if(b>=a && b>=c){
        System.out.println("largest is b = "+ b);
        }
        else if(c>=a && c>=b){
        System.out.println("largest is c = "+ c);
        }
        
    }
    
}
