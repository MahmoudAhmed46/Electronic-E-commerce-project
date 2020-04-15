package project_java;
import java.util.Scanner;
import static project_java.student.getdata;
import static project_java.student.lenStudent;

public class courses 
{
    
String name;
String code;
int hours;
float score;
static courses []getCourses;
static int lenCourses=0;
  static int sumHours=0;
 static float sumPoint=0;
courses(int size)
{
 getCourses=new courses[size];
lenCourses=size;
}
 
public static  void get_Data_Courses()
{
  
   
Scanner s=new Scanner(System.in);
  //int sumhours=0;
    for(int i=0;i<lenCourses;i++)
    {
       
      System.out.println("Enter Name of course"+(i+1));  
      getCourses[i].name=s.next();
      System.out.println("Enter Code of course"+(i+1));
      getCourses[i].code=s.next();
      System.out.println("Enter num_hours of course"+(i+1));
      getCourses[i].hours=s.nextInt();
      sumHours+=getCourses[i].hours;
    }
     
    
 
}


public static void scores()
    {
        Scanner s=new Scanner(System.in);
        
    for (int i=0;i<lenCourses;i++)
    {
           
                getCourses[i].score = s.nextFloat();
                if (getCourses[i].score >= 90) 
                {
                    getdata[i].point = 4.0f;
                } 
                else if (getCourses[i].score >= 85 && getCourses[i].score <= 89) 
                {
                    getdata[i].point = 3.7f;
                }
                else if (getCourses[i].score >= 80 && getCourses[i].score <= 84) 
                {
                    getdata[i].point = 3.3f;
                }
                
                else if (getCourses[i].score >= 75 && getCourses[i].score <= 79) 
                {
                   getdata[i].point = 3.0f;
                }
                   else if (getCourses[i].score >= 70 && getCourses[i].score <= 74) 
                   {
                    getdata[i].point = 2.7f;
                } 
                else if (getCourses[i].score >= 65 && getCourses[i].score <= 69) 
                {
                    getdata[i].point = 2.3f;
                } 
                else if (getCourses[i].score >= 60 && getCourses[i].score <= 64) 
                {
                    getdata[i].point = 2.0f;
                } 
                else if (getCourses[i].score >= 55 && getCourses[i].score <= 59) 
                {
                    getdata[i].point = 1.7f;
                } 
                else if (getCourses[i].score >= 50 && getCourses[i].score <= 54) 
                {
                    getdata[i].point = 1.3f;
                } 
                else if (getCourses[i].score >= 45 && getCourses[i].score <= 49) 
                {
                    getdata[i].point = 1.0f;
                } 
                else {
                    getdata[i].point = 0.0f;
                }
    }
           
    }
    

public static float GPA()
{
   
    
        for (int j=0;j<lenCourses;j++) 
        {
            sumPoint += getdata[j].point * getCourses[j].hours;

        }
        
return sumPoint/sumHours;



}

public static void display()
{
    System.out.print("Name");
    for(int i=0;i<lenStudent;i++)
    {
        System.out.println((getdata[i].name));
    }
    
for(int j=0;j<lenCourses;j++)
{
  System.out.print((getCourses[j].name)+"     ");
    
}



    
    
}





}