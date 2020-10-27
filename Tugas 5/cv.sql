CREATE TABLE biodata(	
	id INT NOT NULL,
	nama VARCHAR(50) NOT NULL,
	pekerjaan VARCHAR(40),
	tempat_lahir VARCHAR(30),
	tanggal_lahir DATE,
	alamat VARCHAR(100),
	agama VARCHAR(20),
	kewarganegaraan VARCHAR(40),
	PRIMARY KEY(id)
);

CREATE TABLE kontak( 
	wa CHAR(14), 
	email VARCHAR(30), 
	PRIMARY KEY(wa)
);

CREATE TABLE sosmed(
	ig VARCHAR(30),
    	line VARCHAR(30),
    	fb VARCHAR(30),
    	twitter VARCHAR(30),
	linkedin VARCHAR(30),
	PRIMARY KEY(ig)
);

CREATE TABLE pendidikan(
	id INT NOT NULL AUTO_INCREMENT,
	jenjang VARCHAR(100),
    	jurusan VARCHAR(20),
	tahun VARCHAR(20),
	PRIMARY KEY(id)
);

CREATE TABLE pengalaman( 
	id INT AUTO_INCREMENT, 
	instansi CHAR(50), 
	bagian VARCHAR(30), 
	tahun VARCHAR(20), 
	jobdesh VARCHAR(500), 
	PRIMARY KEY(id)
);

CREATE TABLE organisasi( 
	id INT AUTO_INCREMENT, 
	nama_organisasi CHAR(50), 
	jabatan VARCHAR(30), 
	tahun VARCHAR(20), 
	jobdesh VARCHAR(500), 
	PRIMARY KEY(id)
);

CREATE TABLE komunikasi( 
	bahasa CHAR(30), 
	presentase VARCHAR(10), 
	PRIMARY KEY(bahasa)
);

CREATE TABLE kemampuan(
    	id INT AUTO_INCREMENT,
	skill VARCHAR(50), 
   	aplikasi VARCHAR(50),
	presentase VARCHAR(10), 
	PRIMARY KEY(id)
);

INSERT INTO biodata VALUES
('','EMILLIA EKA FIRNANDA','Web Programmer','Surabaya','16-10-2000','Jl.Randu Agung 1/69 Surabaya','Islam','Indonesia');

INSERT INTO kontak VALUES
('081554343524','emilliaekaf@gmail.com');

INSERT INTO sosmed VALUES
('emilliaef','emilliaekafirnanda','Emillia Eka Firnanda','emilliaekaf','Emillia Eka Firnanda');

INSERT INTO pendidikan VALUES
('', 'UPN "Veteran" Jawa Timur','Teknik Informatika', '2018 - Now'),
('', 'SMA Al-Irsyad Surabaya','IPA', '2015 - 2018'),
('', 'SMP Negeri 15 Surabaya','', '2012 - 2015'),
('', 'SDN Sidotopo Wetan IV/558','', '2006 - 2012');

INSERT INTO pengalaman VALUES
('', 'Laksmi Muslimah Surabaya','Divisi Corporation','2020', 'Mengikuti program internship selama dua bulan pada perusahaan WO membantu pengadaan event WOW Fair 3 dalam follow up dan rekap data vendor-vendor wedding.');

INSERT INTO organisasi VALUES
('', 'Informatic Learning Community','Sekretaris','2019-2020', 'Penanggung jawab laporan komunitas dan seluruh administrasi surat menyurat dengan lembaga bersangkutan dalam pengadaan beberapa event.');

INSERT INTO komunikasi VALUES
('Bahasa Indonesia','90%'),
('Bahasa Inggris','70%');

INSERT INTO kemampuan VALUES
('','Ms.Office','(word, excel, ppt)','90%'),
('','Pemrograman Web','','70%'),
('','Desain UI/UX','','70%');