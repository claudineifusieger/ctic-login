@extends('layouts.pdf') 


@section('content')

       
          </br> </br> </br> </br>
          <p style="font-size: 60px;">Seu IP        :  <span style="font-weight: bold;">@php echo $_SERVER['REMOTE_ADDR'] @endphp</span> </p>
          <h1> 
            <a href="storage/config_wifi.zip">
              <button style="padding: 12px; min-width: 100px; border: 0px; border-radius: 20px; background: #2ecc71; color: #ffffff;">baixar configuração de wifi</button>
            </a>
          </h1>

          
          </br> </br> </br> </br>


  


        @can('tifpolis')
        <h2> vc é da ti florianopolis</h2>
        @else
        
        @endcan

        @can('admin')
        <h2>vc é admin</h2>
        @else
        @endcan



          </br>

        @php
          //var_dump($_SERVER);
          //echo '<pre>';
          //print_r($_SERVER);
          //echo '<pre>';
        @endphp



@endsection('content')





