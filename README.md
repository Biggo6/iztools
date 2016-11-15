#Installation

```
composer require biggo/iztools
```

Then inside 
```
config/app.php
``` 

add in 

```
providers
``` 

as array item 

```
Biggo6\Iztools\IztoolsServiceProvider::class,
```

Also dont forget to set its alias in 
```
aliases
```
as

```
'Iztools'   => Biggo6\Iztools\Facade\Iztools::class,
```

Happy Coding!
