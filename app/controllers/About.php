<?php 

class About {
    public function index($nama = 'Deni', $pekerjaan='pemancing pro cewek') {
        echo "Hello nama saya $nama, saya adalah $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}