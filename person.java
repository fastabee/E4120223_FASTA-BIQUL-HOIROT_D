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
public class Person {
    String name;
    int age;
    
    public Person(String name, int age){
        this.name = name;
        this.age = age;
    }
    public String getName(){
        return name;
    }
    public int getAge(){
        return age;
    }
    public void setAge(int age){
        this.age = age;
    }
    
    public static void main(String[] args){
        String fName, IName, stuStatus;
        int stuId;
        
        fName = "Lisa Palombo";
        IName = "Lisa";
        stuStatus = "Active";
        stuId = 123456789;
        
        System.out.println("Student Name : " + fName);
        System.out.println("IName : " + IName);
        System.out.println("Student Status : " + stuStatus);
        System.out.println("Student ID : " + stuId);
    }
}