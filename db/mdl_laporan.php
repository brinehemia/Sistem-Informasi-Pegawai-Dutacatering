<?php
require_once('../db/config.php');

class mdllaporan extends db_connect{	

    public function __construct(){
        $this->connect();

    }
            public function laporanpelamar(){
                        $con = $this->conn;
                        $result = mysqli_query($con , "SELECT *
                        FROM ((tbpendaftar
                        INNER JOIN tbcv ON tbpendaftar.idcv = tbcv.idcv)
                        INNER JOIN tblowonganpekerjaan ON tbpendaftar.idlowongan = tblowonganpekerjaan.idlowongan)
                        WHERE tbpendaftar.idpendaftar is not null
                        ");
                        return $result;
            }

            public function laporanpenerimaan(){
                $con = $this->conn;
                $result = mysqli_query($con , "SELECT tbwawancara.*, tbpenguji.*, tbpegawai.*, tbpendaftar.* , tbcv.*, tblowonganpekerjaan.* 
                FROM tbwawancara, tbpenguji, tbpegawai, tbpendaftar, tbcv, tblowonganpekerjaan
                WHERE tbwawancara.idpendaftar = tbpendaftar.idpendaftar
                AND tbwawancara.idpenguji = tbpenguji.idpenguji 
                AND tbpenguji.idpegawai = tbpegawai.idpegawai
                AND tbpendaftar.status = 'Diterima Pekerjaan'
                AND tbpendaftar.idcv = tbcv.idcv
                AND tbpendaftar.idlowongan = tblowonganpekerjaan.idlowongan
                AND tbwawancara.idwawancara is not null 
                ");
                return $result;
            }

            public function laporanprestasi($tahunini){
                $con = $this->conn;
                $result = mysqli_query($con , "SELECT *, DATEDIFF(NOW(), tbpegawai.tanggalaktifkerja) AS jumlahhari  
                FROM ((tbrekappenilaian 
                INNER JOIN tbpegawai ON tbrekappenilaian.idpegawai = tbpegawai.idpegawai)
                INNER JOIN tbdivisi ON tbpegawai.kodedivisi = tbdivisi.kodedivisi)
                WHERE idtahun = '$tahunini' HAVING totalskor > 200 AND jumlahhari > 350
                ORDER BY totalskor DESC LIMIT 50
                
                ");
                return $result;
            }

            public function laporanrekappenilai(){
                $con = $this->conn;
                $result = mysqli_query($con , "SELECT * 
                FROM ((tbrekappenilaian
                INNER JOIN tbpegawai ON tbrekappenilaian.idpegawai = tbpegawai.idpegawai)
                INNER JOIN tbtahun ON tbrekappenilaian.idtahun = tbtahun.idtahun)
                WHERE tbrekappenilaian.idrekappenilaian is not null
                ");
                return $result;
            }
    
    }
        
?>