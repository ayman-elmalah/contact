<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact page</title>
  </head>
  <body>
    <h1>Contact page</h1>
    <form class="" action="{{ route('contact') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Insert your name">
      <input type="email" name="email" placeholder="Insert your email">
      <textarea name="message" rows="8" cols="80" placeholder="Message !!"></textarea>
      <input type="submit" value="Send">
    </form>
  </body>
</html>
