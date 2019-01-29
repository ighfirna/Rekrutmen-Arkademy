import java.util.*;
class persegi_panjang {
	public static void main(String[] args) {
		int x=5;
		for (int i=1;i<=5;i++){
            for(int j=4;j>=i;j--){
                System.out.print("*");
            }
            for(int k=1;k<=i;k++){ 
                System.out.print("*");
            }
            System.out.println();
        }
}
}