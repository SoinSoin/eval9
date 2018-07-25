## Questions

## What is Lumen based on?
```
Lumen is based on laravel and Symfony. It's a php framework.
```
### What is Composer and what is it used for?
```
Composer is a command line ( is a packet manager, debugger, ... ) of symfony and other framework php. 
```
### What command in your terminal allow you to start your project server? 
```
The commandlines is :
- php -S 127.0.0.1 : myPort(ex:8888)
or
- php artisan seve --port=myPort(ex:8888)
```
### In which folder is your html stored?
```
the file he is stick on  myProject/resources/views/... has fun
```
### What is the method that allows me to check whether a view exists?
```
the method is exists() 

like this example:
if (view()->exists('emails.customer')) {
    //https://lumen.laravel.com/docs/5.1/views#sharing-data-with-all-views
}
```
### In which format/type does the information passed need to be before being received by the view?
```
the format type is an array with system [key, value]
in my view: 
file.php: <?php echo key  ?> 
file.html.twig -or- file.blade.php  : {{key}}
```
### Explain how do the concepts of View/Controller/Routing work together.
```
Route->(call)->Controller->(call)->Database->(return result)->Controller->(return View with result)->View->({interact with user} call a route)->.... 
is a loop like this.
```
