@extends('layouts.app')
@section('advsearchbar')
<nav class="navbar navbar-default navbar-static-top stickysecond">
  @include('includes.advsearch')
</nav>
@endsection
@section('content')

@if (session('alert'))
    <div class="alert alert-success successmsg" style="z-index: 2; text-align:center; position: absolute; width: 100%">
        <h3>{{ session('alert') }}</h3>
    </div>
@endif
<div class="container-fluid">
  <div id="listings-row" class="row">
    <div id="map-fix" class="col-md-6 col-sm-6 col-xs-12 no-padding" style="position: fixed; top:106px; left:-15px; bottom: 0;">
        <div id="locationField">
          <!--div id="moveloc">
            <input class="form-control" id="autocomplete" placeholder="Enter your address"
            onFocus="geolocate()" type="text"></input>
          </div-->
        </div>
        <div id='map'></div>
        <div id="infowindow-content">
          <img src="" width="16" height="16" id="place-icon">
          <span id="place-name"  class="title"></span><br>
          <span id="place-address"></span>
        </div>
    </div>
    <div id="prop-fix" class="col-md-6 col-sm-6 col-xs-12 no-padding" style="position: absolute; top: 110px; right:0;">
      <div id="property-listings">
        <div class="col-md-10 col-md-offset-0">
          <h2>Property Listings</h2>
          <!-- <a href="{{ asset('/../server.php/properties/create') }}" >Create New Listing</a> -->
        </div>
        @if($properties->isEmpty())
        <div class="col-md-10 col-md-offset-1">
          <h1>There is no item listed!</h1>
        </div>
        @endif
        <?php
        if(isset($_GET['addr']) || isset($_GET['page']))
        {

        ?>
        @include('includes.post-search')
        <?php }
        else{ ?>
        <section class="properties endless-pagination" data-next-page="{{ $properties->nextPageUrl() }}">
        @foreach($properties as $post)
        <?php
        //for ($i = 0 ; $i < $counter; $i++ ){
        $decodedarr = json_decode( $post['images'] , true);
        $counter = count($decodedarr);
        //$image = $decodedarr[$i];
        $image = $decodedarr[0];
        //echo $decodedarr[$i];
        ?>

        <div class="col-lg-6 text-center">
                <div class ="panel panel-default">
                    <a id="{{$post->id}}" href="{{ url('properties')}}/{{$post->slug}}"><img src="{{ asset('/../images/') }}/{{$image}}" style="border: solid 0px #000000; height: 200px; width: 100%;
                      background-size: 450px; background-repeat: no-repeat;"></a>
                  <div class="panel-heading">
                    <div style="text-align: left;">
                      <a style="color: black" href="{{ url('properties')}}/{{$post->slug}}">
                        <h3 class="add-ellipsis"><strong>{{$post->title}}</strong></h3>
                        <h4><strong>${{$post->price}}</strong></h4>
                      </a>
                      <hr>
                      <p><i class="fas fa-bed"></i><b> {{$post->number_of_beds}}</b> | <i class="fas fa-bath"></i><b> {{$post->number_of_baths}} </b></p>
                      <p><i class="fas fa-chart-area"></i><b> {{$post->area}}sqft&sup2;</b></p>
                      <p class="add-ellipsis"><strong>
                        {{$post->street_address}}
                        {{$post->route}}
                        {{$post->city}}
                        {{$post->state}}
                      </strong></p>
                    </div>
                  </div>
                </div>
              </div>
      @endforeach
      <div class="col-md-12" style="text-align:center">
        <div style="display: inline-block">
          <div>{!! $properties->render() !!}</div>
        </div>
      </div>
      </section>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
@endsection
