CREATE DATABASE db_klinik;
USE db_klinik;

CREATE TABLE treatment (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  deskripsi TEXT,
  foto VARCHAR(255)
);

CREATE TABLE pasien (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  treatment VARCHAR(100),
  tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO treatment (nama, deskripsi, foto) VALUES
('Facial Glow','Mencerahkan wajah','https://images.unsplash.com/photo-1588776814546-1ffcf47267a5'),
('Acne Treatment','Mengatasi jerawat','https://images.unsplash.com/photo-1600334129128-685c5582fd35'),
('Anti Aging','Perawatan anti penuaan','https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9');
