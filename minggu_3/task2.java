/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tugas;

import java.util.Scanner;

/**
 *
 * @author fastabee
 */
public class tugas2 {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        System.out.print("Masukkan panjang array: ");
        int arLength = scan.nextInt();
        
        int[] data = new int[arLength]; 
        
        for (int z = 0; z < arLength; z++){
            int dataNumb = (int)(Math.random()*9+1);
            data[z] = dataNumb;
            
            System.out.print(data[z] + " ");
        }
    } 
}
