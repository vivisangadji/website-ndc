<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*###############PUBLIC###################*/
$route['default_controller'] 	            = 'Home';
$route['home']					            = 'Home';
$route['profil/visi-misi'] 		            = 'Profil/visiMisi';
$route['profil/anggota-kepengurusan'] 		= 'Profil/anggota';
$route['profil/sejarah'] 		            = 'Profil/sejarah';
$route['profil/struktur-bph'] 		        = 'Profil/strukturOrganisasi';
$route['profil/program-kerja'] 		        = 'Profil/proker';
$route['artikel/(:any)'] 		            = 'Artikel/index/$1';
$route['artikel/detail/(:any)']             = 'Artikel/detailArtikel/$1';
$route['agenda'] 				            = 'Agenda';
$route['galeri'] 				            = 'Galeri';
$route['galeri/detail/(:any)'] 	            = 'Galeri/detailGaleri/$1';
$route['kontak'] 				            = 'Kontak';
$route['form-pendaftaran'] 		            = 'Pendaftaran';



/*############### ADMIN ######################*/
$route['admin'] 					       = 'Admin';
$route['admin/login'] 			           = 'Admin/loginAdmin';

// Pendaftaran
$route['admin-lk1/data-pendaftar'] 			   = 'Admin/getAllPendaftar';
$route['admin-lk1/tambah-pendaftar'] 		   = 'Admin/tambahPendaftar';
$route['admin-lk1/detail-pendaftar/(:any)']    = 'Admin/detail/$1';
$route['admin-lk1/edit-pendaftar/(:any)']      = 'Admin/editData/$1';

// STRUKTUR
$route['admin/struktur'] 				       = 'StrukturAdmin';
$route['admin/tambah-struktur'] 			   = 'StrukturAdmin/tambahStruktur';
$route['admin/edit-struktur/(:any)'] 		   = 'StrukturAdmin/editStruktur/$1';
$route['admin/hapus-struktur/(:any)'] 		   = 'StrukturAdmin/hapusStruktur/$1';


// agenda
$route['admin/agenda'] 				       = 'AgendaAdmin';
$route['admin/tambah-agenda'] 		       = 'AgendaAdmin/tambahAgenda';
$route['admin/edit-agenda/(:any)'] 		   = 'AgendaAdmin/editAgenda/$1';
$route['admin/hapus-agenda/(:any)'] 	   = 'AgendaAdmin/hapusAgenda/$1';

// carousel
$route['admin/carousel'] 				   = 'CarouselAdmin';
$route['admin/tambah-carousel'] 		   = 'CarouselAdmin/tambahCarousel';
$route['admin/ubah-carousel/(:any)'] 	   = 'CarouselAdmin/ubahCarousel/$1';
$route['admin/hapus-carousel/(:any)'] 	   = 'CarouselAdmin/hapusCarousel/$1';

// proker
$route['admin/proker'] 					   = 'ProkerAdmin';
$route['admin/tambahProker'] 			   = 'ProkerAdmin/tambahProker';
$route['admin/ubahProker/(:any)'] 		   = 'ProkerAdmin/ubahProker/$1';
$route['admin/hapusProker/(:any)'] 		   = 'ProkerAdmin/hapusProker/$1';

// sejarah
$route['admin/sejarah'] 				   = 'SejarahAdmin';
$route['admin/tambahSejarah'] 			   = 'SejarahAdmin/tambahSejarah';
$route['admin/ubahSejarah/(:any)'] 		   = 'SejarahAdmin/ubahSejarah/$1';
$route['admin/hapusSejarah/(:any)'] 	   = 'SejarahAdmin/hapusSejarah/$1';

// visi & misi
$route['admin/visimisi'] 				   = 'VisiMisiAdmin';
$route['admin/tambahVisiMisi'] 			   = 'VisiMisiAdmin/tambahVisiMisi';
$route['admin/ubahVisiMisi/(:any)'] 	   = 'VisiMisiAdmin/ubahVisiMisi/$1';
$route['admin/hapusVisiMisi/(:any)'] 	   = 'VisiMisiAdmin/hapusVisiMisi/$1';

// anggota
$route['admin/anggota'] 				   = 'AnggotaAdmin';
$route['admin/tambah-anggota'] 			   = 'AnggotaAdmin/tambahAnggota';
$route['admin/ubah-anggota/(:any)'] 	   = 'AnggotaAdmin/ubahAnggota/$1';
$route['admin/hapus-anggota/(:any)'] 	   = 'AnggotaAdmin/hapusAnggota/$1';

// artikel
$route['admin/artikel'] 				   = 'ArtikelAdmin';
$route['admin/tambah-artikel'] 			   = 'ArtikelAdmin/tambahArtikel';
$route['admin/ubah-artikel/(:any)'] 	   = 'ArtikelAdmin/ubahArtikel/$1';
$route['admin/hapus-artikel/(:any)'] 	   = 'ArtikelAdmin/hapusArtikel/$1';

// galeri
$route['admin/galeri'] 					    = 'GaleriAdmin';
$route['admin/tambah-galeri']               = 'GaleriAdmin/tambahGaleri';
$route['admin/ubah-galeri/(:any)']          = 'GaleriAdmin/ubahGaleri/$1';
$route['admin/hapus-galeri/(:any)']         = 'GaleriAdmin/hapusGaleri/$1';

// galeri detail
$route['admin/detail-galeri/(:any)']       	        = 'GaleriAdmin/detailGaleri/$1';
$route['admin/tambah-detail-galeri/(:any)']         = 'GaleriAdmin/tambahDetailGaleri/$1';
$route['admin/ubah-detail-galeri/(:any)/(:any)']    = 'GaleriAdmin/ubahDetailGaleri/$1/$2';
$route['admin/hapus-detail-galeri/(:any)/(:any)']   = 'GaleriAdmin/hapusDetailGaleri/$1/$2';

// service
$route['admin/service'] 				   = 'FooterAdmin/service';
$route['admin/tambahService']         	   = 'FooterAdmin/tambahService';
$route['admin/ubahService/(:any)']         = 'FooterAdmin/ubahService/$1';
$route['admin/hapusService/(:any)']        = 'FooterAdmin/hapusService/$1';

// konsentrasi
$route['admin/konsentrasi'] 			   = 'FooterAdmin/konsentrasi';
$route['admin/tambahKonsentrasi']          = 'FooterAdmin/tambahKonsentrasi';
$route['admin/ubahKonsentrasi/(:any)']     = 'FooterAdmin/ubahKonsentrasi/$1';
$route['admin/hapusKonsentrasi/(:any)']    = 'FooterAdmin/hapusKonsentrasi/$1';

// divisi
$route['admin/divisi'] 			           = 'FooterAdmin/divisi';
$route['admin/tambahDivisi']          	   = 'FooterAdmin/tambahDivisi';
$route['admin/ubahDivisi/(:any)']     	   = 'FooterAdmin/ubahDivisi/$1';
$route['admin/hapusDivisi/(:any)']    	   = 'FooterAdmin/hapusDivisi/$1';

// kontak & media sosial
$route['admin/kontak_medsos'] 			   = 'FooterAdmin/kontakMedsos';
$route['admin/tambahKontakMedsos']         = 'FooterAdmin/tambahKontakMedsos';
$route['admin/ubahKontakMedsos/(:any)']    = 'FooterAdmin/ubahKontakMedsos/$1';
$route['admin/hapusKontakMedsos/(:any)']   = 'FooterAdmin/hapusKontakMedsos/$1';
 



$route['404_override'] 		   = '';
$route['translate_uri_dashes'] = TRUE;