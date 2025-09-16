import java.util.Scanner;

public class state {

    public static void main(String[] args) {

        Scanner value = new Scanner(System.in);

        System.out.println("inter a marks of 1st course");
        int mark1 = value.nextInt();
        if (mark1 > 70) {
            System.out.println("you are a win");
        }

        else {
            System.out.println("you are a fail");
        }

    }

}