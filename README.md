## De-plants
![Logo_new__1_-removebg-preview](https://user-images.githubusercontent.com/65409089/121768756-0c774300-cb8a-11eb-853b-45fd5a9c6442.png)
           
Aplikasi berbasis web yang berfokus pada komunitas pecinta tanaman hias sebagai wadah untuk saling berbagi ilmu dan transaksi jual beli yang aman untuk para pecinta tanaman.

## Daftar Isi
- [Anggota Kelompok 13](#Anggota-Kelompok-13)
- [Latar Belakang](#Latar-Belakang)
- [Tujuan](#Tujuan)
- [Ruang Lingkup](#Ruang-Lingkup)
- [User Story](#User-Story)
- [Hasil dan Pembahasan](#Hasil-dan-Pembahasan)
- [Fungsi Utama](#Fungsi-utama)
- [Fungsi CRUD](#Fungsi-CRUD)
- [Hasil Implementasi](#Hasil-Implementasi)
- [Project Dokumentation](#Project-Dokumentation)
- [Panduan GitHub](#panduan-github)

## Anggota Kelompok 13 :
<table>
    <thead>
        <tr>
            <th></th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Grey Syafiq Kusuma</td>
            <td>G64190017</td>
            <td>Project Manager + Full-Stack</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Galih Nenudiwa</td>
            <td>G64190016</td>
            <td>Back-End Developer</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tami Fildzah Nabielah</td>
            <td>G64190043</td>
            <td>UI/UX Designer</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Muhammad Yuda Sulaiman</td>
            <td>G64190094</td>
            <td>Front-End Developer</td>
        </tr>
    </tbody>
</table>

## Latar Belakang
Meningkatnya animo masyarakat untuk mengoleksi tanaman hias selama covid-19 tidak dibarengi dengan keamanan pada saat melakukan transaksi online. Banyak masyarakat awam yang tertipu saat membeli tanaman hias secara online karena minimnya informasi yang diperoleh. Oleh karena itu, de-plants web dapat menjadi solusi untuk komunitas pecinta tanaman untuk berbagi informasi sekaligus merangkul masyarakat awam yang baru memulai hobi mengoleksi tanaman hias. Sehingga ketika ingin membeli tanaman hias, mereka memiliki wadah yang aman untuk bertransaksi. 

## Tujuan
1. Sebagai wadah antar penggemar tanaman hias
2. Mempermudah penggemar tanaman hias untuk saling berkoneksi dan bertukar informasi
3. Memungkinkan untuk berjual beli tanaman hias antar penggemar

## Ruang Lingkup 
### Perangkat Keras 
<table>
    <tbody>
        <tr>
            <td>1</td>
            <td>Processor</td>
            <td>AMD Ryzen 5 2500U</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Memory</td>
            <td>16 GB</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Graphic Card</td>
            <td>Nvidia Geforce GTX 1050</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Storage</td>
            <td>1 TB</td>
        </tr>   
    </tbody>
</table>

### Perangkat Lunak
<table>
    <tbody>
        <tr>
            <td>1</td>
            <td>Operating System</td>
            <td>Windows 10 / Linux</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Framework</td>
            <td>Vue js / laravel</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Database</td>
            <td>MySQL / PostgreSQL</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Server</td>
            <td>Apache</td>
        </tr>   
         <tr>
            <td>5</td>
            <td>Text Editor</td>
            <td>Sublime Text / Visual Studio Code</td>
        </tr>   
    </tbody>
</table>

## User Story
- Sebagai seorang pecinta tanaman, agar dapat bertukar informasi dengan dengan pecinta tanaman yang lain, saya ingin ada wadah untuk saling berkomunikasi
- Sebagai seorang pecinta tanaman, agar dapat bertukar informasi dengan dengan pecinta tanaman yang lain, saya dapat membuat sebuah semacam post.
- Sebagai seorang pecinta tanaman, agar dapat memilih informasi yang saya inginkan, saya dapat melakukan filter.
- Sebagai seorang pecinta tanaman, agar dapat melakukan bisnis, saya dapat melakukan jual/beli.
- Sebagai seorang pecinta tanaman, agar dapat menemukan informasi dengan mudah, saya ingin ada web yang terfokuskan pada tanaman hias dan sebagai tambahan sesama penggemar dapat   bertukar pengalaman.
- Sebagai calon pengguna, agar dapat melakukan aktivitas pada web, saya dapat melakukan registrasi di awal dengan memasukan data diri, alamat email, dan kata sandi.
- Sebagai pengguna yang telah log out, agar dapat menggunakan web, saya dapat mengetikkan alamat email dan kata sandi saya untuk masuk ke aplikasi.

## Hasil dan Pembahasan 
- ERD adalah model atau rancangan untuk membuat database, untuk memudahkan dalam menggambarkan data yang memiliki hubungan atau relasi dalam bentuk sebuah desain. Berikut adalah ERD untuk website de-plant
![ERD_RPL_(1)]![WhatsApp Image 2021-06-14 at 15 44 22](https://user-images.githubusercontent.com/79556700/121988003-c4436500-cdc3-11eb-8228-61920667d505.jpeg)

- Diagram arsitektur adalah bahasa gambar yang digunakan dalam bidang arsitektur untuk menerangkan konsep, prinsip, anasir, dan komponen, termasuk cara kerja maupun petunjuk penggunaannya. Berikut adalah arsitektur diagram website de-plant 
![WhatsApp Image 2021-06-12 at 15 10 37](https://user-images.githubusercontent.com/65409089/121778562-a3abbd00-cbc1-11eb-8f34-d91edb8e2b51.jpeg)

## Fungsi Utama 
1. #### Login dan sign up 
    Pada fitur ini pengguna dapat mendaftar akun dan masuk ke dalam website de-plant. 
    ![login](https://user-images.githubusercontent.com/65409089/121769173-552ffb80-cb8c-11eb-9c83-30644cd9d231.jpeg)
    ![sign up](https://user-images.githubusercontent.com/65409089/121769214-8b6d7b00-cb8c-11eb-957e-9928d41f7f78.jpeg)
    
2. #### Homepage
    Pengguna dapat melihat halaman depan web de-plants, disana terdapat katalog tanaman hias dan forum yang membahas seputar perawatan tanaman hias
    dan pengalaman pribadi pengguna lain.
    ![Homepage](https://user-images.githubusercontent.com/65409089/121769274-d4253400-cb8c-11eb-830d-1d44a2b2165a.jpeg)
    ![home (1)](https://user-images.githubusercontent.com/65409089/121769276-d8515180-cb8c-11eb-8764-5ee33a734316.jpeg)

3. #### User Profile 
    Menampilkan informasi singkat pengguna. Informasi yang ditampilkan adalah username, bio singkat, tanggal pengguna membuat akun dan infomasi forum atau post yang pernah           dibuat.
    
    ![Forum](https://user-images.githubusercontent.com/65409089/121769363-6fb6a480-cb8d-11eb-8c70-35c03d143c44.jpeg)

4. #### Marketplace/transacation 
    Fitur ini menampilkan berbagai tanaman hias beserta harga yang ditawarkan. Terdapat deskripsi produk dan review dari beberapa pembeli terkait produk tersebut.
    ![marketplace 1](https://user-images.githubusercontent.com/65409089/121769385-8957ec00-cb8d-11eb-910c-983805873719.jpeg)
    ![marketplace](https://user-images.githubusercontent.com/65409089/121769401-91b02700-cb8d-11eb-8e88-45fdf32aec31.jpeg)
    ![marketplace 3](https://user-images.githubusercontent.com/65409089/121769396-8eb53680-cb8d-11eb-8126-4b0530fbdbb0.jpeg)
    
5. #### Forum/thread
    Pada fitur ini pengguna dapat membuat forum berisi pertanyaan seputar perawatan tanaman hias, pengguna lain dapat membuat post untuk menjawab pertanyaan tersebut. Pengguna       juga dapat memberi informasi terkait perawatan tanaman hias berdasarkan pengalaman pribadi.
    
    ![buat post](https://user-images.githubusercontent.com/65409089/121769241-af30c100-cb8c-11eb-8c33-555c2c5bd47c.jpeg)
    ![Forum(1)](https://user-images.githubusercontent.com/65409089/121779003-c63ed580-cbc3-11eb-9afd-8fb971533aaf.jpeg)
    ![forum 3](https://user-images.githubusercontent.com/65409089/121769248-b5bf3880-cb8c-11eb-9a3f-9fab3e3cb23b.jpeg)

## Fungsi CRUD 
<table>
    <thead>
        <tr>
            <th></th>
            <th>CRUD</th>
            <th>Fungsi</th>
            <th>Fitur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Create</td>
            <td>Membuat akun, postingan, comment</td>
            <td>Forum</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Read</td>
            <td>Membaca postingan forum dan jualan</td>
            <td>Forum, marketplace</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Update</td>
            <td>Memperbarui profil</td>
            <td>Use Profile</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Delete</td>
            <td>Menghapus postingan di forum dan marketplace, menghapus akun</td>
            <td>Marketplace, user profile</td>
        </tr>
    </tbody>
</table>

### Detail CRUD website de-plants
1. #### Create
   Fungsi create digunakan untuk menambahkan kalimat untuk membuat sebuah catatan baru. Website de-plants menyediakan fitur forum yang dapat digunakan pengguna untuk membuat        postingan, membalas postingan pengguna lain serta membuat theard (postingan panjang). Pengguna yang ingin berjualan juga dapat menambahkan produknya pada fitur marketplace.       
2. #### Read 
   Fungsi read digunakan untuk membaca record atau catatan tabel berdasarkan catatan utama(primary) dalam parameter input. Pada website ini pengguna dapat membaca postingan di      fitur forum dan marketplace. Dapat melihat profil pengguna lain dan melihat produk (tanaman hias) apa saja yang dijual oleh pengguna tersebut.

3. #### Update 
   Fungsi update digunakan untuk memperbaharui tabel berdasar primary key yang ditentukan untuk sebuah record dengan menggunakan klausa where. Website de-plants menyediakan        fitur user profile untuk memperbarui profile user agar profile dapat terlihat menarik. 

4. #### Delete 
   Fungsi delete digunakan untuk  menghapus baris atau row tertentu dalam klausa where. Pada website ini, pengguna dapat menghapus postingan di forum dan marketplace dan dapat      menghapus akun. 
   
## Hasil Implementasi
### login dan sign up 
   ![login](https://user-images.githubusercontent.com/65409089/121769173-552ffb80-cb8c-11eb-9c83-30644cd9d231.jpeg)
   ![sign up](https://user-images.githubusercontent.com/65409089/121769214-8b6d7b00-cb8c-11eb-957e-9928d41f7f78.jpeg)
### homepage 
   ![Homepage](https://user-images.githubusercontent.com/65409089/121769274-d4253400-cb8c-11eb-830d-1d44a2b2165a.jpeg)
   ![home (1)](https://user-images.githubusercontent.com/65409089/121769276-d8515180-cb8c-11eb-8764-5ee33a734316.jpeg)
### user profile
   ![Forum](https://user-images.githubusercontent.com/65409089/121769363-6fb6a480-cb8d-11eb-8c70-35c03d143c44.jpeg)
### marketplace/transaction
   ![marketplace 1](https://user-images.githubusercontent.com/65409089/121769385-8957ec00-cb8d-11eb-910c-983805873719.jpeg)
   ![marketplace](https://user-images.githubusercontent.com/65409089/121769401-91b02700-cb8d-11eb-8e88-45fdf32aec31.jpeg)
   ![marketplace 3](https://user-images.githubusercontent.com/65409089/121769396-8eb53680-cb8d-11eb-8126-4b0530fbdbb0.jpeg)
### forum/theards
   ![buat post](https://user-images.githubusercontent.com/65409089/121769241-af30c100-cb8c-11eb-8c33-555c2c5bd47c.jpeg)
   ![forum 3](https://user-images.githubusercontent.com/65409089/121769248-b5bf3880-cb8c-11eb-9a3f-9fab3e3cb23b.jpeg)

## Project Dokumentation 
- Task management in [trello/de-plant](https://trello.com/b/G4FFZCay/project-rpl)
- Repository code [github/de-plant](https://github.com/blacowhait/KOM331_De-plants)
- Website journal in [googlesite/de-plant](https://sites.google.com/apps.ipb.ac.id/de-plants/project) 

## Panduan GitHub
- penjelasan folder
    - Front-end     : berisi code bagian Front-end
    - Back-end      : berisi code bagian Back-end
    - Ready-deploy  : berisi code untuk deploy (Front dan Back sudah disatukan)
- install github, yarn, npm, Laravel, MySql, Vue CLI.
- inisiasi repo
    - git clone https://github.com/blacowhait/KOM331_De-plants.git //download folder github
    - cd KOM331_De-plants //masuk kedalam folder
    - git checkout master //masuk ke branch master 
- pull dari github
    - git reset --hard //masuk ke remote/origin/HEAD
    - git pull //memperbarui folder github
- push ke github
    - git add . //add semua file yang ada
    - git commit -m "pesan apa gitu" //ngasih pesan
    - git push origin master //upload semua file ke branch master

## Saran untuk pengembangan selanjutnya 
