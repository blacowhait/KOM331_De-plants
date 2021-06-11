# De-plants
Aplikasi berbasis web yang berfokus pada komunitas pecinta tanaman hias sebagai wadah untuk saling berbagi ilmu dan transaksi jual beli yang aman untuk para pecinta tanaman.

# Daftar Isi
- [Anggota Kelompok 13](#Anggota-Kelompok-13)
- [Tujuan](#Tujuan)
- [User Story](#User-Story)
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
            <td>Galih Nenudia</td>
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

# Latar Belakang 
Meningkatnya animo masyarakat untuk mengoleksi tanaman hias selama covid-19 tidak dibarengi dengan keamanan saat melakukan transaksi online. Banyak masyarakat awam yang
tertipu saat membeli tanaman hias secara online karena minimnya informasi yang diperoleh. Oleh karena itu, de-plants web dapat menjadi solusi untuk komunitas pecinta tanaman untuk berbagi informasi sekaligus merangkul masyarakat awam yang baru memulai hobi mengoleksi tanaman hias. Sehingga ketika ingin membeli tanaman hias, mereka memiliki wadah yang aman untuk bertransaksi. 

# Tujuan
1. Sebagai wadah antar penggemar tanaman hias
2. Mempermudah penggemar tanaman hias untuk saling berkoneksi dan bertukar informasi
3. Memungkinkan untuk berjual beli tanaman hias antar penggemar

# User Story
- Sebagai seorang pecinta tanaman, agar dapat bertukar informasi dengan dengan pecinta tanaman yang lain, saya ingin ada wadah untuk saling berkomunikasi
- Sebagai seorang pecinta tanaman, agar dapat bertukar informasi dengan dengan pecinta tanaman yang lain, saya dapat membuat sebuah semacam post.
- Sebagai seorang pecinta tanaman, agar dapat memilih informasi yang saya inginkan, saya dapat melakukan filter.
- Sebagai seorang pecinta tanaman, agar dapat melakukan bisnis, saya dapat melakukan jual/beli.
- Sebagai seorang pecinta tanaman, agar dapat menemukan informasi dengan mudah, saya ingin ada web yang terfokuskan pada tanaman hias dan sebagai tambahan sesama penggemar dapat bertukar pengalaman.
- Sebagai calon pengguna, agar dapat melakukan aktivitas pada web, saya dapat melakukan registrasi di awal dengan memasukan data diri, alamat email, dan kata sandi.
- Sebagai pengguna yang telah log out, agar dapat menggunakan web, saya dapat mengetikkan alamat email dan kata sandi saya untuk masuk ke aplikasi.

# Ruang Lingkup 
## Perangkat Keras 
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

## Perangkat Lunak
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

# Hasil dan Pembahasan 
- ERD adalah model atau rancangan untuk membuat database, untuk memudahkan dalam menggambarkan data yang memiliki hubungan atau relasi dalam bentuk sebuah desain. Berikut adalah ERD untuk website de-plant

- Diagram arsitektur adalah bahasa gambar yang digunakan dalam bidang arsitektur untuk menerangkan konsep, prinsip, anasir, dan komponen, termasuk cara kerja maupun petunjuk penggunaannya. Berikut adalah arsitektur diagram website de-plant 

# Fungsi Utama 
1. #### Login dan sign up 
    Pada fitur ini pengguna dapat mendaftar akun dan masuk ke dalam website de-plant. 
2. #### Homepage
    Pengguna dapat melihat halaman depan web de-plants, disana terdapat katalog tanaman hias dan forum yang membahas seputar perawatan tanaman hias
    dan pengalaman pribadi pengguna lain.

3. #### User Profile 
    Menampilkan informasi singkat pengguna. Informasi yang ditampilkan adalah username, bio singkat, tanggal pengguna membuat akun dan infomasi forum atau post yang pernah           dibuat.

4. #### Marketplace/transacation 
    Fitur ini menampilkan berbagai tanaman hias beserta harga yang ditawarkan. Terdapat deskripsi produk dan review dari beberapa pembeli terkait produk tersebut.

5. #### Forum/thread
    Pada fitur ini pengguna dapat membuat forum berisi pertanyaan seputar perawatan tanaman hias, pengguna lain dapat membuat post untuk menjawab pertanyaan tersebut. Pengguna       juga dapat memberi informasi terkait perawatan tanaman hias berdasarkan pengalaman pribadi.

# Fungsi CRUD 
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
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

# Panduan GitHub
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
