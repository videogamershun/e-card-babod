@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kiemelt partnerünk') }}</div>

                    <div class="card-body center">
                        <div class="col-md-8 col-lg-8 pb-8 center">
                            <div class="card card-custom bg-white border-white border-0">
                                <div class="card-custom-img" style="background-image: url({{ asset('img/bg2.jpg') }});"></div>
                                <div class="card-custom-avatar">
                                    <img class="img-fluid" src="{{ asset('img/gumis.png') }}" alt="Avatar" />
                                </div>
                                <div class="card-body" style="overflow-y: auto">
                                    <h4 class="card-title">Lorem ipsum dolor</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo nisl eget
                                        sapien consectetur lacinia in quis mauris. Duis at viverra risus. Duis ultrices ex imperdiet metus
                                        tempor dapibus. Vivamus posuere neque nibh, non dignissim augue lacinia a. Nunc rutrum, quam at
                                        pellentesque venenatis, lectus nibh condimentum nisi, et ultricies metus dui vitae leo. Quisque nibh
                                        odio, auctor ut congue sit amet, maximus in purus. Aenean faucibus leo quis ipsum lobortis egestas.
                                        Etiam ac lectus viverra, tincidunt leo lobortis, varius quam. Integer faucibus aliquam arcu. Aliquam
                                        luctus odio nec tempus laoreet.
                                    </p>
                                </div>
                                <div class="card-footer" style="background: inherit; border-color: inherit;">
                                    <a href="#" class="btn btn-primary">Tovább</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Hivatalos Facebook oldal') }}</div>

                    <div class="card-body center">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbabod.offroad&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Hivatalos Facebook csoport') }}</div>

                    <div class="card-body center">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbabod.offroad&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
