<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Christ Lutheran Church of Waterford</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" type="text/css" href="{{ elixir('css/stylesheet.css') }}" />
    </head>
    <body>
        <header class="style-header">
            <div class="container-fluid">
                <div class="logo">
                    <img src="{{url('/')}}/img/christwaterford-logo.svg" alt="Christ Lutheran Church of Waterford" class="img-responsive">
                </div>
            </div>
        </header>
        <div class="container-fluid page">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Color Palette</h1>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="color-swatch swatch1">
                                Midnight Blue<br>
                                #003366
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch2">
                                Persian Green<br>
                                #00a99d
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch3">
                                Gray<br>
                                #8b8c84
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch4">
                                Pine Green<br>
                                #00746b
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch5">
                                Light Sea Green<br>
                                #1cbbb4
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch6">
                                Black<br>
                                #252525
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h1>Buttons</h1>

                    <button class="btn btn-lg btn-blue">This is a large button</button>&nbsp;

                    <div class="visible-xs-block margin-bottom-10"></div>

                    <button class="btn btn-darkgreenblue">This is another smaller button</button>

                    <hr class="visible-xs-block">

                </div>
                <div class="col-sm-6">
                    <h1>Typography</h1>

                    <h1>Heading 1</h1>
                    <p class="details">Font: EB Garamond / Midnight Blue #003366</p>

                    <hr>

                    <h2>Heading 2</h2>
                    <p class="details">Font: Open Sans Semibold / Pine Green #00746b</p>

                    <hr>

                    <h3>Heading 3</h3>
                    <p class="details">Font: Open Sans Regular / Black #252525</p>

                    <hr>

                    <p>Body Text</p>
                    <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
                    <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

                    <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

                    <p class="details">Font: Open Sans Regular / Black #252525</p>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p>Copyright &copy; {{date('Y')}} Christ Lutheran Church of Waterford. All Rights Reserved.</p>
                <p>Designated trademarks and brands are the property of their respective owners.</p>
                <p>All graphics are created by Matt Crandell of <a href="http://www.crandelldesign.com" target="_blank">Crandell Design</a>.</p>
            </div>
        </footer>
        <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
        
    </body>
    
</html>