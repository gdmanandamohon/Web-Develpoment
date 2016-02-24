<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 12-Aug-15
 * Time: 12:35 AM
 */ ?>

 @extends('app')

 @section('page-title')
 Admin Panel
 @stop

 @section('menu-bar')
             <li><a href="/" >Home</a></li>
             <li><a href="/services" >Services</a></li>
             <li><a href="/patient-info">News Of Patient</a></li>
             <li><a href="/admin" class="current">Admin</a></li>
             <li><a href="/contact-us">Contact</a></li>
 @stop
 @section('page-content')
   <div id="templatemo_main"><span class="main_top"></span>
                      <div id="content-viewer-div">
        <table>
        {!!  Form::open(array('action'=>'AppPageController@vf_admin'))  !!}
            <tr>
                <td>
                    {!! Form::label('admin_name', 'Admin User name') !!}
                </td>
                <td>
                    {!! Form::text('admin_name', null, array('class' => 'field' )) !!}
                </td>
            </tr>
            <tr>
                 <td>
                    {!! Form::label('admin_pass', 'Input Password') !!}
                 </td>
                 <td>
                    {!! Form::password('admin_pass', null, array('class' => 'field')) !!}
                 </td>
            </tr>
            <tr>
                <td>
                   {!! Form::label('remember_token', 'Remember Me') !!}
                </td>
                <td>
                   {!! Form::checkbox('remember_token', null, array('class' => 'field')) !!}
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    {!! Form::Submit('Log In') !!}
                </td>
            </tr>
            {!!  Form::close() !!}
        </table>
        </div>
    </div>

 @stop