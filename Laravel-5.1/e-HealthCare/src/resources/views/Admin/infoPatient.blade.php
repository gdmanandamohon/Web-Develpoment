<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 12-Sep-15
 * Time: 3:03 PM
 */ ?>
  @extends('...app')

   @section('page-title')

   @stop
   @section('menu-bar')
                   <li><a href="/admin/index" class="current">Home</a></li>
                   <li><a href="/admin/Patients-List">Patients List</a></li>
                   <li><a href="/admin/New-Patient">New Patient</a></li>
                   <li><a href="#">Others</a></li>
                   <li><a href="/admin/logout">logout</a></li>
   @stop

   @section('page-content')
        <div id="templatemo_main"><span class="main_top"></span>

        </div>
   @stop