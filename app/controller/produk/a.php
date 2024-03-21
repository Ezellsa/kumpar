<?php
class A extends SENE_Controller {
  public function __construct(){
    parent::__construct();
  }
  public function index(){
    echo '<h1>Produk A</h1>';
    echo '<p>Produk A cocok untuk dipakai di musim hujan</p>';
    echo '<p style="text-decoration: line-through">Harga IDR 150.000</p>';
    echo '<p>Harga IDR 125.000</p>';
    echo '<br>';
    echo 'Kembali ke <a href="'.base_url().'produk">Produk</a>';
  }
}