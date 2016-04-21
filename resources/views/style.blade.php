<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('master.templates.head')
    </head>
    <body>
        <header class="style-header">
            <h1>Christ Lutheran Church of Waterford</h1>
        </header>
        <div class="container-fluid page">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Color Palette</h1>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="color-swatch">
                                Color Name<br>
                                #FFFFFF;
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch">
                                Color Name<br>
                                #FFFFFF;
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch">
                                Color Name<br>
                                #FFFFFF;
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch">
                                Color Name<br>
                                #FFFFFF;
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch">
                                Color Name<br>
                                #FFFFFF;
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch">
                                Color Name<br>
                                #FFFFFF;
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1>Typography</h1>

                    <h1>Heading 1</h1>
                    <p class="details">Styling Details</p>

                    <hr>

                    <h2>Heading 2</h2>
                    <p class="details">Styling Details</p>

                    <hr>

                    <h3>Heading 3</h3>
                    <p class="details">Styling Details</p>

                    <hr>

                    <p>Body Text</p>
                    <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
                    <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

                    <p><a href="#">This is a link</a> <a href="#" class="hover">This is a hover link</a></p>

                    <p class="details">Styling Details</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h1>Buttons</h1>

                    <button class="btn btn-blue">This is a button</button>
                    <button class="btn btn-blue">This is another button</button>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ elixir('js/master.js') }}"></script>
        @include('master.templates.footer')
        @yield('scripts')
    </body>
    
</html>