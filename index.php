<DOCTYPE html>
<html>
    <head>
        <title>台彩對獎</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div id="root"></div>

        <hr />

        <footer class="container">
            <div class="row">
                <p class="col-xs-12">Made for fun ~! <a href="https://github.com/PotsonHumer/lottos" target="_blank"><i class="fa fa-github fa-lg"></i> Github</a></p>
                <small class="col-xs-12">Copyright &copy; 2017 PotsonHumer <<a href="mailto:potsonhumer@gmail.com">potsonhumer@gmail.com</a>></small>
            </div>
        </footer>

        <script src="/js/react/react.min.js" defer></script>
        <script src="/js/react/react-dom.min.js" defer></script>
        <script src="/js/react/polyfill.min.js" defer></script>
        <script src="/js/react/babel.min.js" defer></script>
        <script src="/js/react/es6-promise.auto.min.js" defer></script>
        <script src="/js/react/axios.min.js" defer></script>
        <script type="text/babel" src="/js/app.babel" defer></script>
        <script type="text/babel" defer>
            ReactDOM.render(
                <App />,
                document.getElementById('root')
            );
        </script>
    </body>
</html>