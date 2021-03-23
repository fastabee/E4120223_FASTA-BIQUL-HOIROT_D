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
public class tugas5 {
    public static void main(String[] args){
        String[] menu = {"Soft drinks", "Mix juice", "Nescafe", "Soda milk", "Tea"};
        System.out.println("                   CAFE CERIA");
        System.out.println("                  ANEKA MINUMAN");
        stripLine();
        
        System.out.println("                  SPECIAL MENU :");
        for (int i = 1; i <= 5; i++){
            System.out.println("                 " + i + ".  " + menu[i-1]);
        }
        stripLine();
        
        Scanner scan = new Scanner(System.in);
        System.out.print("Masukkan nama pembeli : ");
        String name = scan.nextLine();
        System.out.println("");
        
        System.out.print("Silahkan masukkan pilihan anda : ");
        int chMenu = scan.nextInt();
        switch (chMenu){
            case 1:
                System.out.println("Minuman yang anda pesan adalah Soft drinks");
                break;
            case 2:
                System.out.println("Minuman yang anda pesan adalah Mix juice");
                break;
            case 3:
                System.out.println("Minuman yang anda pesan adalah Nescafe");
                break;
            case 4:
                System.out.println("Minuman yang anda pesan adalah Soda milk");
                break;
            case 5:
                System.out.println("Minuman yang anda pesan adalah Tea");
                break;
            default:
                System.out.println("Nomor yang anda masukkan salah!");
        }
        
        System.out.println("Pesanan akan segera kami antar");
        System.out.println("Terima kasih " + name + " telah berkunjung di Cafe Ceria");
    }
    static void stripLine(){
        String line;
        line = "------------------------------------------------";
        System.out.println(line);
    }
}
