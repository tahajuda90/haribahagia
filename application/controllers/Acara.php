<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acara
 *
 * @author Tahajuda
 */
class Acara extends CI_Controller {
    //put your code here
    
    public function index(){
        $dest = $this->input->get('dest');
        if($dest=='demo'){
            $data['tanggal'] = '2019/04/21';
            $data['diorama'] = array('small7.jpg', 'small2.jpg', 'small9.jpg', 'small4.jpg', 'small5.jpg', 'small1.jpg', 'small10.jpg', 'small6.jpg', 'small8.jpg');
            $data['kisah'] = array(array('tahun' => '2014', 'isi' => 'Awal kisah kedekatan adalah sebuah moment yang tak terlupakan'), array('tahun' => '2015 - 2016', 'isi' => 'Berkomitmen untuk berjuang bersama untuk meraih cita-cita'), array('tahun' => '2017', 'isi' => 'Satu langkah perjuangan terselesaikan bersama-sama, yang merupakan gerbang besar untuk berjuang di masa mendatang'), array('tahun' => '2019', 'isi' => 'Mengukuhkan komitmen untuk selalu bersama berjuang dalam meraih asa sampai akhir hayat'));
            $data['teman'] = array(array('id' => '1560848718', 'prn' => 'Make Up Pernikahan', 'psn' => 'Untuk Kak Lian owner lianweddinghouse terima kasih sudah menerima permintaan yang banyak dari kami'),
                array('id' => '5738151157', 'prn' => 'Foto Pre-Wedding', 'psn' => 'Untuk sahabat kami Kakak Zhuhri owner zhupotret terima kasih untuk persembahan foto pre-wedding yang mengagumkan'),
                array('id' => '1529912011', 'prn' => 'Desain Kartu Undangan', 'psn' => 'Kami berterima kasih untuk kakak Diya atas persembahan desain kartu undangan yang sungguh menarik :D'),
                array('id' => '1095865652', 'prn' => 'Make Up Lamaran', 'psn' => 'Terimakasih banyak untuk Septia yang sudah membuat calon mempelai wanita cantik saat hari lamaran'),
                array('id' => '235922444', 'prn' => 'Gaun Pernikahan', 'psn' => 'Untuk gaun pengantin yang istimewa dibuat oleh penjahit yang istimewa juga terima kasih Kakak Lulu'),
                array('id' => '3154124950', 'prn' => 'Hantaran Hari Lamaran', 'psn' => 'Terima kasih untuk kemasan hantaran yang rapi dan indah berkat Kakak Mega'),
                array('id' => '1166463172', 'prn' => 'Susunan Website', 'psn' => 'Berkat Kak Yoga yang telah membantu kami untuk menyusun kata kata yang indah didalam website undangan online ini terima kasih'));
            $data['arah'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d988.5810297202388!2d112.11128787914733!3d-7.648253349655356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-7.648248199999999!2d112.11184449999999!5e0!3m2!1sid!2sid!4v1554192213433!5m2!1sid!2sid" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>';
            $this->load->view('undangan/undangan1', $data);
        }else{
            redirect('/welcome','refresh');
        }
        
    }
}
