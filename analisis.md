Tujuan pembuatan tema todolist adalah untuk menampilkan visualisasi jumlah history berdasarkan status, sehingga admin atau user, termasuk user baru, dapat dengan cepat memahami progres dan distribusi tugas.

Manfaat:
- Memberikan insight cepat mengenai jumlah task yang masih pending dan yang sudah selesai.
- Membantu monitoring performa dan workflow harian.
- Mempermudah deteksi bottleneck, misalnya jika banyak tugas yang tertahan di status in_progress.

Implementasi singkat:
- Menggunakan widget Filament ChartWidget (bar chart).
- Query langsung ke tabel task_histories, kemudian group by status dan hitung jumlahnya.
- Hasil visualisasi ditampilkan di dashboard admin panel (app/Filament/Admin/Pages/Dashboard.php).

Keterkaitan data:
Data diambil secara real-time dari relasi antara user, task, dan task history.

Alur kerjanya:
1. User membuat atau mengupdate Task.
2. Task disimpan ke tabel tasks.
3. Task dapat memiliki SubTask (opsional), dengan relasi satu Task memiliki banyak SubTask (disimpan di tabel sub_tasks).
4. Setiap update status Task, sistem mencatat ke tabel task_histories.
   - Kolom: user_id, task_id, status (pending, in_progress, completed), dan deskripsi perubahan.
5. Dashboard Filament Widget (misal: TaskHistoryStatusChart) melakukan query ke task_histories, group by status, lalu menghitung jumlahnya.
6. Hasil query divisualisasikan dalam bentuk bar chart.