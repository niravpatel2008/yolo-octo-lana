<?php
$this->load->view('template/header');
if ($this->router->fetch_class() == "welcome" && $this->router->fetch_method() == 'index') {
    $this->load->view('template/top_banner');
}
$this->load->view('template/nav_bar');
$this->load->view('template/middle');
$this->load->view('template/footer');
?>
