@extends('layouts.main')

    @section('container')
        <h1>Halaman <?php echo $title ?></h1>
        <h2><?php echo $name ?></h2>
        <h3><?php echo $email ?></h3>
        <img src="img/{{ $image }}" alt="<?php echo $name ?>" width="300">
    @endsection
