<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';

$route['tambah_pengguna'] = 'Admin/Dashboard/tambah';
$route['tambah_jurusan'] = 'Admin/Dashboard/tambah_jurusan';
$route['tambah_guru'] = 'Admin/Dashboard/tambah_guru';
$route['tambah_perusahaan'] = 'Admin/Dashboard/tambah_perusahaan';

$route['tambah_pengajuan'] = 'Admin/Dashboard/tambah_pengajuan';
$route['tambah_pengajuan'] = 'Siswa/Dashboard/tambah_pengajuan';

$route['tambah_pengguna/simpan'] = 'Admin/Dashboard/tambah_simpan';
$route['tambah_jurusan/simpan_jurusan'] = 'Admin/Dashboard/tambah_simpan_jurusan';
$route['tambah_guru/simpan_guru'] = 'Admin/Dashboard/tambah_simpan_guru';
$route['tambah_perusahaan/simpan_perusahaan'] = 'Admin/Dashboard/tambah_simpan_perusahaan';

$route['tambah_pengajuan_admin/simpan_pengajuan'] = 'Admin/Dashboard/tambah_simpan_pengajuan';
$route['tambah_pengajuan/simpan_pengajuan'] = 'siswa/Dashboard/tambah_simpan_pengajuan';

$route['edit_pengguna/(:num)'] = 'Admin/Dashboard/edit/$1';
$route['edit_jurusan/(:num)'] = 'Admin/Dashboard/edit/$1';
$route['edit_guru/(:num)'] = 'Admin/Dashboard/edit/$1';
$route['edit_perusahaan/(:num)'] = 'Admin/Dashboard/edit/$1';

$route['ganti_status/(:num)'] = 'Admin/Dashboard/ganti/$1';

$route['edit_pengguna/simpan_pengguna/(:num)'] = 'Admin/Dashboard/edit_simpan/$1';
$route['edit_jurusan/simpan_jurusan/(:num)'] = 'Admin/Dashboard/edit_simpan_jurusan/$1';
$route['edit_guru/simpan_guru/(:num)'] = 'Admin/Dashboard/edit_simpan_guru/$1';
$route['edit_perusahaan/simpan_perusahaan/(:num)'] = 'Admin/Dashboard/edit_simpan_perusahaan/$1';

$route['ganti_status/simpan_pengajuan/(:num)'] = 'Admin/Dashboard/ganti_status_simpan/$1';

$route['hapus_pengguna/(:num)'] = 'Admin/Dashboard/hapus/$1';
$route['hapus_jurusan/(:num)'] = 'Admin/Dashboard/hapus_jurusan/$1';
$route['hapus_guru/(:num)'] = 'Admin/Dashboard/hapus_guru/$1';
$route['hapus_perusahaan/(:num)'] = 'Admin/Dashboard/hapus_perusahaan/$1';
$route['hapus_pengajuan/(:num)'] = 'Admin/Dashboard/hapus_pengajuan/$1';
$route['hapus_pengajuan/(:num)'] = 'Admin/Dashboard/hapus_pengajuan_siswa/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;