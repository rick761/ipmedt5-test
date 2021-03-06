@extends('layouts.layout')

@section('content')



    <span class="signaal_uv_groot">{{ round($laatsteSignaal->uv) }}</span>


    <?php $suncolor = ''; ?> <!--------------switch om de zon weer te geven in kleur op basis van zonsterkte-->
    @switch(intval($laatsteSignaal->uv))
        @case(0)
        @case(1)
        <?php $suncolor = 'gray'; ?>
        @break;
        @case(2)
        <?php $suncolor = 'blue'; ?>
        @break
        @case(3)
        <?php $suncolor = 'lightblue'; ?>
        @break;
        @case(4)
        <?php $suncolor = 'green'; ?>
        @break
        @case(5)
        <?php $suncolor = 'yellow'; ?>
        @break;
        @case(6)
        <?php $suncolor = 'orange'; ?>
        @break
        @case(7)
        <?php $suncolor = 'red'; ?>
        @break
        @case(8)
        @case(9)
        @case(10)
        @case(11)
        <?php $suncolor = 'black'; ?>
        @break
        @default

    @endswitch
    <i class="fa fa-sun-o fa-6" id="sun_logo" style="color:{{$suncolor}};" aria-hidden="true"></i>


    <?php
    $white='none' ;
    $blue='none' ;
    $lightblue='none' ;
    $green= 'none' ;
    $orange= 'none' ;
    $yellow= 'none' ;
    $red= 'none' ;
    $black = 'none';
    ?>

    <!--------------switch om een progressbar weer te geven in kleur op basis van zonsterkte-->
    @switch(intval($laatsteSignaal->uv))
        @case(0)
        <?php
        $white='inline-block' ;
        ?>
        @break;
        @case(1)
        <?php
        $white='inline-block' ;
        ?>
        @break;
        @case(2)
        <?php
        $white='inline-block' ;
        $blue='inline-block' ;
        ?>

        @break
        @case(3)
        <?php
        $white='inline-block' ;
        $blue='inline-block' ;
        $lightblue='inline-block' ;
        ?>
        @break
        @case(4)
        <?php
        $white='inline-block' ;
        $blue='inline-block' ;
        $lightblue='inline-block' ;
        $green= 'inline-block' ;


        ?>
        @break
        @case(5)
        <?php
        $white='inline-block' ;
        $blue='inline-block' ;
        $lightblue='inline-block' ;
        $green= 'inline-block' ;
        $yellow= 'inline-block' ;


        ?>
        @break
        @case(6)
        <?php
        $white='inline-block' ;
        $blue='inline-block' ;
        $lightblue='inline-block' ;
        $green= 'inline-block' ;
        $orange= 'inline-block' ;
        $yellow= 'inline-block' ;


        ?>
        @break
        @case(7)
        <?php
        $white='inline-block' ;
        $blue='inline-block' ;
        $lightblue='inline-block' ;
        $green= 'inline-block' ;
        $orange= 'inline-block' ;
        $yellow= 'inline-block' ;
        $red= 'inline-block' ;

        ?>
        @break;
        @case(8)
        @case(9)
        @case(10)
        @case(11)
        <?php
        $white='inline-block' ;
        $blue='inline-block' ;
        $lightblue='inline-block' ;
        $green= 'inline-block' ;
        $orange= 'inline-block' ;
        $yellow= 'inline-block' ;
        $red= 'inline-block' ;
        $black= 'inline-block' ;
        ?>
        @break
        @default
        Error
    @endswitch
    <ul id="temp_bar">
        <li class="white" style="display:{{$white}}"></li>
        <li class="blue" style="display:{{$blue}}"></li>
        <li class="lightblue" style="display:{{$lightblue}}"></li>
        <li class="green" style="display:{{$green}}"></li>
        <li class="yellow" style="display:{{$yellow}}"></li>
        <li class="orange" style="display:{{$orange}}"></li>
        <li class="red" style="display:{{$red}}"></li>
        <li class="black" style="display:{{$black}}"></li>

    </ul>





    <h2 class="font-weight-light mb-0">De zonnesterkte is: <span class="signaal_uv">{{$laatsteSignaal->uv}}</span> / 8 om  <span class="signaal_created_at">"{{$laatsteSignaal->created_at}}"</span></h2>
	<br>
	<table class="table table-striped table-bordered">
		<tr>
			<td colspan="2">
                <div class="alert alert-warning" style="margin-bottom:0;">
                    Zorg ervoor dat de box in de <strong>zon</strong>  staat, met de <strong>blauwe</strong>  kant naar boven!
                </div>
			</td>
		</tr>
        <tr>
            <td colspan="2">
                <div class="alert alert-info" style="margin-bottom:0;">
                    Voor een persoonlijk advies, <strong><a href="{{route('register')}}">registreer</a></strong> of <strong><a href="{{route('login')}}">login</a></strong>!
                </div>
            </td>
        </tr>
	</table>








@endsection
