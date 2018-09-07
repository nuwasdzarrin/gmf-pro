 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 /*
  * Simple_login Class
  * Class ini digunakan untuk fitur login, proteksi halaman dan logout
  * @author  Gun Gun Priatna
  * @url    https://recodeku.blogspot.com
  */
 
 class Simple_login {

     // SET SUPER GLOBAL
   var $CI = NULL;

     /**
      * Class constructor
      *
      * @return   void
      */
     public function __construct() {
       $this->CI =& get_instance();
     }

     /*
     * cek username dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($id_employee, $password) {

         //cek username dan password
       $query = $this->CI->db->get_where('users',array('id_employee'=>$id_employee,'password' => md5($password)));

       if($query->num_rows() == 1) {
             //ambil data user berdasar username
         $row = $this->CI->db->query('SELECT id_user,username,role FROM users where id_employee = "'.$id_employee.'"');
         $admin = $row->row();
         $id = $admin->id_user;
         $username = $admin->username;
         $role = $admin->role;

             //set session user
         $this->CI->session->set_userdata('role', $role);
         $this->CI->session->set_userdata('username', $username);
         $this->CI->session->set_userdata('id_employee', $id_employee);
         $this->CI->session->set_userdata('id_login', uniqid(rand()));
         $this->CI->session->set_userdata('id', $id);

             //redirect ke halaman dashboard
         redirect(site_url('alldata'));
       }else{

             //jika tidak ada, set notifikasi dalam flashdata.
         $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');

             //redirect ke halaman login
         redirect(site_url('login'));
       }
       return false;
     }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {

         //cek session username
       if($this->CI->session->userdata('id_employee') == '') {

             //set notifikasi
         $this->CI->session->set_flashdata('sukses','Anda belum login');

             //alihkan ke halaman login
         redirect(site_url('login'));
       }
     }

     public function cek_role() {
      if($this->CI->session->userdata('role') != 'ADMIN') {

       //alihkan ke halaman login
       redirect(site_url('member/alldata'));
     }
   }

     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
       $this->CI->session->unset_userdata('username');
       $this->CI->session->unset_userdata('id_login');
       $this->CI->session->unset_userdata('id');
       $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
       redirect(site_url('login'));
     }
   }