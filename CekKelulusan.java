import java.util.Scanner;

public class CekKelulusan {
    public static void main(String[] args) {
        // Membuat objek Scanner untuk menerima input dari keyboard
        Scanner input = new Scanner(System.in);

        System.out.println("=== PROGRAM CEK KELULUSAN MAHASISWA ===");
        
        // Input Nama
        System.out.print("Masukkan Nama Mahasiswa: ");
        String nama = input.nextLine();

        // Input Nilai Ujian
        System.out.print("Masukkan Nilai Ujian (0-100): ");
        int nilai = input.nextInt();

        System.out.println("\n=== HASIL EVALUASI ===");
        System.out.println("Nama: " + nama);
        System.out.println("Nilai: " + nilai);

        // Logika Percabangan Perhitungan Nilai
        if (nilai >= 75 && nilai <= 100) {
            System.out.println("Status: LULUS (Nilai Baik)");
        } else if (nilai >= 0 && nilai < 75) {
            System.out.println("Status: TIDAK LULUS (Silakan Remedial)");
        } else {
            System.out.println("Status: ERROR (Input nilai tidak valid!)");
        }
        
        System.out.println("=====================================");
        input.close();
    }
}
