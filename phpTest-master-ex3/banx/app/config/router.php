<?php

$router = $di->getRouter();

// app routers - router for retrieving annual rates of given countries.
$router->addGet(
	"/annualrates/getbycontryids", [
		"controller" => "AnnualRates",
		"action" => "getByCountryIds"
	]
);

// app routers - router for retrieving annual rates of given countries.
$router->addGet(
	"/interest/calculate", [
		"controller" => "Interest",
		"action" => "calculateInterest"
	]
);

$router->handle();
