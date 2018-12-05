create database event;
use event;

CREATE TABLE tim (
    id_tim int(100) auto_increment,
    nama_tim varchar(255),
    constraint pktim primary key(id_tim)
);

CREATE TABLE lomba(
    id_lomba int(100) auto_increment,
    kategori varchar(255),
    deskripsi TEXT,
    babak_penyisiham TEXT,
    penilaian TEXT,
    CONSTRAINT pklomba PRIMARY KEY(id_lomba)
);

CREATE TABLE peserta(
    id_peserta int(100) auto_increment,
    nama_peserta varchar(255),
    tempat_lahir varchar(255),
    tgl_lahir varchar(255),
    jenis_kelamin varchar(255),
    alamat varchar(255),
    email varchar(255),
    instansi varchar(255),
    id_tim int(100),
    constraint pkpeserta primary key(id_peserta),
    constraint fktim foreign key(id_tim) references tim(id_tim) on delete cascade on update cascade
);

CREATE TABLE partisipasi(
    id_tim int(100),
    id_lomba int(100),
    constraint pkpartisipasi primary key(id_tim, id_lomba),
    constraint fkpartim foreign key(id_tim) references tim(id_tim) on delete cascade on update cascade,
    constraint fkparlomba foreign key(id_lomba) references lomba(id_lomba) on delete cascade on update cascade
);

CREATE TABLE admin(
    id_admin int(100),
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    CONSTRAINT pkadmin PRIMARY KEY(id_admin)
);

CREATE TABLE pengumuman (
    id_pengumuman INT,
    judul VARCHAR(45) NOT NULL,
    subjudul VARCHAR(100),
    isi TEXT NOT NULL,
    gambar VARCHAR(255),
    CONSTRAINT pkpengumuman PRIMARY KEY(id_pengumuman)
);