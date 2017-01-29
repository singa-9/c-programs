/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package fibonacci_series;

/**
 *
 * @author kmalviya
 */
public class Fibonacci_series {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
      int n1 = 0;
      int n2 = 1;
      int n3 =0;
      int len = 9;
      int i = 1;
       System.out.print(" "+ n1 + " ");
       System.out.print(" "+ n2 + " ");
      while(i< len){
          n3 = n1+n2;
      System.out.print(" "+ n3 + " ");
      n1 = n2;
      n2 = n3;
      i++;
      }
    }
    
}
