<!doctype html>
<html>
  <head>
    <title>Hello</title>
  </head>
  <body>
    <h1>hello world</h1>

    @can('admin')
      <p>you can see this</p>
    @endcan
  </body>
</html>
