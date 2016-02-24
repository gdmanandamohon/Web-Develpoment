<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 10-Oct-15
 * Time: 9:21 PM
 */
     ?>
    @extends('...app')

       @section('page-title')
       |Welcome
       @stop
       @section('menu-bar')
                       <li><a href="/admin/index" >Home</a></li>
                       <li><a href="/admin/Patients-List">Patients List</a></li>
                       <li><a href="/admin/New-Patient">New Patient</a></li>
                       <li><a href="#">Others</a></li>
       @stop

       @section('page-content')
            <div id="templatemo_main"><span class="main_top"></span>

            </div>

       @stop