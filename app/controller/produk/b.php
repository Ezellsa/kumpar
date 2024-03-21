<?php
class B extends SENE_Controller {
  public function __construct(){
    parent::__construct();
  }
  public function index(){
    echo '<h1>Produk B</h1>';
    echo '<p>Produk b cocok untuk dipakai di musim panas</p>';
    echo '<p>Harga IDR 150.000</p>';
    echo '<br>';
    echo 'Kembali ke <a href="'.base_url().'produk">Produk</a>';
  }
}