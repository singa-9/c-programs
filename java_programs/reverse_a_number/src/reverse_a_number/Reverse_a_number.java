/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reverse_a_number;

/**
 *
 * @author kmalviya
 */
public class Reverse_a_number {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
      int a = 632;
      int r = 0;
      int n = 0;
      while(a > 0){
      r = a%10;
      n = n*10 + r;
      a = a/10;
      
      }
      
      System.out.println("Reversed number is = "+ n);
      
    }
    
}
