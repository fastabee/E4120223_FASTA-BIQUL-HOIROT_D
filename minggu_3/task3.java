/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tugas;

/**
 *
 * @author fastabee
 */
public class tugas3 {
    public static void main(String[] args){
        int[][] data = {{5, 6, 1, 7}, {8, 1, 2, 9}, {5, 4, 7, 1}, {8, 3, 7, 5}};
        for(int i = 0; i < 4; i++){
            for(int j = 0; j < 4; j++){
                System.out.print(data[i][j] + " ");
            }
            System.out.println("");
        }
    }
}
