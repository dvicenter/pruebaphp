# Problema 1
## Change String

* Url para test:

	```
	http://localhost/pruebaphp/problema2/index.php
	```
* Test:

	```
	phpunit --bootstrap ChangeString.php ChangeStringTest.php
	```

# Problema 2
## Complete Range

* Url para test:

	```
	http://localhost/pruebaphp/problema2/index.php
	```

* Test:

	```
	phpunit --bootstrap CompleteRange.php CompleteRangeTest.php
	```

# Problema 3
## Clear Par

* Url para test:

	```
	http://localhost/pruebaphp/problema3/index.php
	```

* Test:

	```
	phpunit --bootstrap ClearPar.php ClearParTest.php
	```

# Problema 4
##  Application

* Instalar.
	
	```
	cd prueba/application
	composer install
	```

* Url para test:

	```
	http://localhost/pruebaphp/application/public/
	```

* Url para servicio web:
	
	```
	http://localhost/pruebaphp/application/public/api/v1/salary/min/{min}/max/{max}
	```

* {min} numero minimo para salario
* {max} numero maximo para salario