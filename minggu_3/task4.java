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
public class tugas4 {
    static void stripLine(){
        String line;
        line = "------------------------------------------------------------";
        System.out.println(line);
    }
    public static void main(String[] args){
        String[] header = {
            "               Kharisma Agung Plaza < KAP >",
            "                 Promo Belanja Berhadiah",
            "           Khusus Pembelian 5 Barang Pertama",
            "             Dengan Hatga minimum Rp 10000,00"
        };
        stripLine();
        for(String headTitle : header){
            System.out.println(headTitle);
        }
        stripLine();
        Scanner scan = new Scanner(System.in);
        System.out.print("Masukkan nama Pembeli: ");
        String name = scan.nextLine();
        System.out.println("");
        
        int sumPrice = 0;
        for(int i = 1; i <= 5; i++){
            System.out.print("Masukkan harga barang ke-" + i + ":     ");
            int price = scan.nextInt();
            sumPrice += price;
        }
        System.out.println("Total harga pembelian atas nama " + 
            name + " adalah Rp. " + sumPrice);
        
        System.out.println("");
        if (sumPrice > 10000){
            System.out.println("Selamat....");
            System.out.println("Anda mendapatkan hadiah 1 buah mug cantik");
        }
        System.out.println("");
        stripLine();
        System.out.println("                       Terima Kasih");
        System.out.println("         Anda sudah belanja di Kharisma Agung Plaza");
    }   
}
