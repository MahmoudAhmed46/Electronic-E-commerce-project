package project_java;
import java.util.Scanner;
public class GradingSystem 
{
    public static void main(String[] args) 
    {
     int n;
Scanner s=new Scanner(System.in);
student []Array_student;     
 courses []Array_courses;
    System.out.println("Enter number of student");
        int num_student=s.nextInt();
Array_student=new student[num_student];
   System.out.println("Enter number of courses");
        int num_courses=s.nextInt();
        Array_courses=new courses[num_courses]; 

do
{
    System.out.println("please Enter number 1 to Add list of student");
    System.out.println("please Enter number 2 to Add list of courses");
    System.out.println("please Enter number 3 to  Add Score of courses");
    System.out.println("please Enter number 4 to  to show totl_GPA");
     System.out.println("please Enter number 5 to  to show list");
    System.out.println("please Enter number 0 to finish process");
    System.out.println("please Select option");
    n=s.nextInt();
   
             
           
         switch (n) {
             case 1:
             for(int i=0;i<num_student;i++)   
             {
                Array_student[i]=new student(num_student);
             }
       
                 student.getData();
                 break;
             case 2:
                 for(int j=0;j<num_courses;j++)
                 {
                     Array_courses[j]=new courses(num_courses);
                 }         courses.get_Data_Courses();
                 break;
             case 3:
                 for(int i=0;i<num_student;i++)
                 {
                     Array_student[i]=new student(num_student);
                 }         for(int i=0;i<num_courses;i++)
                 {
                     Array_courses[i]=new courses(num_courses);
                 }         courses.scores();
                 break;
             case 4:
                 for(int i=0;i<num_student;i++)
                 {
                     Array_student[i]=new student(num_student);
                 }         for(int i=0;i<num_courses;i++)
                 {
                     Array_courses[i]=new courses(num_courses);
                 }         for(int i=0;i<num_student;i++){
                     float totalGPA=courses.GPA();
                     System.out.println("total GPA of "+Array_student[i].name+" = "+totalGPA);
                 }             break;
             case 5:
                 for(int i=0;i<num_student;i++)
                 {
                     Array_student[i]=new student(num_student);
                 }         for(int i=0;i<num_courses;i++)
                 {
                     Array_courses[i]=new courses(num_courses);
                 }         courses.display();
                 break;
             default:
                 break;
         }

}
while(n>0);
        
        
        
        
    }

}
