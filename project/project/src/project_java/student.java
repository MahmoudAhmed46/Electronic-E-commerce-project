package project_java;
import java.util.Scanner;

public class student 
{
    String name;
    int ID;
    float point;
    float gpa;
   static student []getdata;
   static int lenStudent=0;
    student(int size)
    {
        getdata=new student[size];
       lenStudent=size; 
    }
   
public static void getData()
{
   Scanner s=new Scanner(System.in);
  for(int i=0;i<lenStudent;i++)
       {
       getdata[i]=new student(lenStudent);
       }
   for(int i=0;i<lenStudent;i++)
   {
       
        System.out.println("Enter name of student"+(i+1));
        getdata[i].name=s.next();
        System.out.println("Enter ID of student"+(i+1));
        getdata[i].ID=s.nextInt();
   }

  
     
}
}








    

